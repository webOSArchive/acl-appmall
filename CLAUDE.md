# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

AppMall is a revival project for the OpenMobile AppMall Android app store bundled with ACL (Android Compatibility Layer) on HP TouchPad. The original OpenMobile servers are defunct. This project provides:

1. **Mock PHP server** - Responds to the app's API requests
2. **Patched APK** - Modified to work with HTTP and bypass login requirements

**Live deployment:** `http://aclappmall.webosarchive.org`

## Directory Structure

```
AppMall/
├── AppMall_webosarchive.apk    # Final patched, signed APK
├── AppMall-decompiled/         # Decompiled APK (apktool output, editable smali)
├── AppMall-extracted/          # Raw APK contents (unzip output, reference only)
├── appmall-server/             # PHP mock server
│   └── api/                    # Web root (deploy this folder)
├── appmall-key.keystore        # Signing key (password: appmall123)
├── setup.sh                    # Script to decompile APK on new machine
└── README.md                   # API documentation (reverse-engineered)
```

## Quick Start (New Machine)

```bash
./setup.sh
```

This decompiles the APK to `AppMall-decompiled/` for editing.

## APK Patching

The APK is decompiled with apktool to smali (Dalvik bytecode assembly). Key modifications made:

### 1. HTTP instead of HTTPS
**File:** `AppMall-decompiled/smali/com/openmobile/store/common/mobipipe/MobiPipeRequestConstants.smali`

Changed URLs from `https://api.openmobileappmall.com` to `http://aclappmall.webosarchive.org`. Required because Android 2.3.6 only supports TLS 1.0 with deprecated cipher suites.

### 2. HTTP Connection Fix
**File:** `AppMall-decompiled/smali/com/openmobile/store/common/mobipipe/MobiPipeManager.smali`

Removed `HttpsURLConnection` cast that caused ClassCastException with HTTP URLs.

### 3. Welcome Popup Disabled
**File:** `AppMall-decompiled/smali/com/openmobile/store/common/mobipipe/User.smali`

Modified `getIsShowWelcomeScreen()` to always return "0".

### 4. Login Bypass for Downloads
**File:** `AppMall-decompiled/smali/com/openmobile/omappmall/MainActivity.smali`

Modified `checkLoginAndPurchase()` to skip login dialog and directly call `startApkFetch()`. Uses `getFreeTrialUrl()` instead of `getDownloadURL()` (see server hack below).

### 5. Notification ID Fix
**File:** `AppMall-decompiled/smali/com/openmobile/omappmall/MainActivity.smali`

Product ID (string like "vlc") was used as notification ID (requires int). Fixed by using `String.hashCode()`.

### 6. Hidden UI Elements
- **ListProductAdapter.smali** - Hide price button in list view (download only works from detail view)
- **ProductDetails.smali** - Hide "Add Review" button (reviews not supported)

Both use `setVisibility(View.GONE)` (constant 8).

## Server Implementation

### Key Hack: FreeTrialURL
The app's XML parser doesn't populate `getDownloadURL()` from `<DownloadURL>` tags, but DOES parse `<FreeTrialURL>`. The server puts the download URL in both fields:

```php
$xml .= "<downloadURL>" . $app['download_url'] . "</downloadURL>\n";
$xml .= "<FreeTrialURL>" . $app['download_url'] . "</FreeTrialURL>\n";  // HACK
```

### API Endpoints
- `appmallpipe.php` - Main API (POST with `module` parameter)
- `appmallpipeorder.php` - Order/download handling

### Key Modules
| Module | Description |
|--------|-------------|
| `allprods` | All products |
| `browsecategories` | Category list |
| `pd` | Product details |
| `search` | Search products |
| `userdetails` | Login (accepts any credentials) |

### Adding Apps
Edit `appmall-server/config/apps.php`. Upload APKs to `api/apps/` and icons to `api/images/`.

## Building the APK

```bash
# Rebuild from smali
apktool b AppMall-decompiled -o AppMall_webosarchive.apk

# Sign with v1 signature (required for Android 2.3)
apksigner sign --ks appmall-key.keystore --ks-pass pass:appmall123 \
  --v1-signing-enabled true --v2-signing-enabled false AppMall_webosarchive.apk
```

## Testing

```bash
# Test API
curl -X POST http://aclappmall.webosarchive.org/appmallpipe.php -d "module=allprods&Page=1"

# Verify APK MIME type (critical for installation)
curl -I http://aclappmall.webosarchive.org/apps/yourapp.apk | grep -i content-type
# Must return: application/vnd.android.package-archive

# Install to device
adb install AppMall_webosarchive.apk
```

## Server Deployment

The server root should be `appmall-server/api/` so that `config/` and `logs/` are not web-accessible.

nginx example:
```nginx
server {
    listen 80;
    server_name aclappmall.webosarchive.org;
    root /var/www/appmall-server/api;

    location /apps/ {
        default_type application/vnd.android.package-archive;
    }
}
```

See `appmall-server/README.md` for full deployment instructions.

## Troubleshooting

| Issue | Cause | Fix |
|-------|-------|-----|
| "Error parsing package" | Wrong MIME type for APK | Configure server to return `application/vnd.android.package-archive` |
| Download button does nothing | Missing download URL | Check `FreeTrialURL` field in server response |
| App crash on download | Notification ID not numeric | Use `hashCode()` of product ID string |
| Connection error | TLS incompatibility | Use HTTP, not HTTPS |
