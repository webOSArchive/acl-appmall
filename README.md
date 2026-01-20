# AppMall Revival

A revival project for the OpenMobile AppMall Android app store, originally bundled with ACL (Android Compatibility Layer) on HP TouchPad.

## Overview

The original OpenMobile AppMall servers are defunct. This project provides:
- **Patched APK** (`AppMall_webosarchive.apk`) - Works with HTTP, no login required
- **Mock PHP server** (`appmall-server/`) - Responds to the app's API requests

**Live deployment:** http://aclappmall.webosarchive.org

## Quick Start

### Using the App
1. Download `AppMall_webosarchive.apk`
2. Install on your HP TouchPad running ACL
3. Browse and install apps from the catalog

### Development Setup
```bash
./setup.sh  # Decompiles APK for editing
```

### Server Deployment
See `appmall-server/README.md` for deployment instructions.

---

# API Documentation

Reverse-engineered from `AppMall_OpenMobile_2.0.10.777.apk` (Android app for ACL)

## Server Endpoints

| Endpoint | URL |
|----------|-----|
| Main API | `https://api.openmobileappmall.com/appmallpipe.php` |
| Order API | `https://api.openmobileappmall.com/appmallpipeorder.php` |
| Base URL | `https://api.openmobileappmall.com` |
| Support | `http://www.openmobileappmall.com/support.php` |

## Authentication

Every request includes these base parameters:
- `Posid` - Point of Sale ID (store identifier, loaded from `assets/branding/posid2.txt`)
- `password` - Store password
- `platform` - Always "1" (Android)
- `Osid` - OS ID, always "222"

## Request Format

HTTP POST to `appmallpipe.php` with URL-encoded form parameters.

### Common Parameters

| Parameter | Description |
|-----------|-------------|
| `module` | API operation to perform |
| `Posid` | Store identifier |
| `password` | Store password |
| `platform` | Platform ID (1 = Android) |
| `Osid` | OS ID (222) |
| `Page` | Page number for pagination |
| `items` | Items per page (default 15) |
| `Lang` | Language code |
| `currency` | Currency code (default "USD") |
| `EncodeURLs` | Set to "1" to encode URLs |

### Device Parameters (sent with requests)

| Parameter | Description |
|-----------|-------------|
| `Device` | Device name |
| `deviceId` | Unique device ID |
| `dAndroidID` | Android ID |
| `dBrand` | Device brand |
| `dModel` | Device model |
| `dName` | Device name |
| `dOS` | OS version |
| `dOSLanguage` | OS language |
| `macID` | MAC address |
| `serialid` | Serial ID |
| `appstoreversion` | AppMall version |

## API Modules (Operations)

### Product Listing

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `allprods` | All products | - |
| `ns` | New software | - |
| `bss` | Best sellers | - |
| `fs` | Free software | - |
| `fts` | Featured/Recommended software | - |
| `dod` | Deal of the day | - |

### Product Details

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `pd` | Product details | `Pid` (product ID) |
| `listreviews` | Product reviews | `Pid` |
| `othersalsobought` | Related products | `Pid` |
| `checkversion` | Check for updates | `Pid` |

### Categories

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `browsecategories` | List all categories | - |
| `browsesubcategories` | List subcategories | `Catid` |
| `software_by_category` | Products in category | `Catid` |
| `software_by_sub_category` | Products in subcategory | `Catid`, `Subcatid` |

### Search

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `search` | Search products | `sString` |
| `search_by_category` | Search in category | `sString`, `Catid` |
| `search_by_sub_category` | Search in subcategory | `sString`, `Catid`, `Subcatid` |
| `searchuser` | Search users | `sString` |
| `vendorproducts` | Products by vendor | `vendorid` |

### User Account

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `verify` | Verify field (email/screenName) | `field`, `value` |
| `newuser` | Create account | (many user fields) |
| `updateuser` | Update account | (various user fields) |
| `userdetails` | Get user details | `Email`, `customerPassword` |
| `userstats` | User statistics | `customerid` |
| `fp` | Forgot password | `Email` |

### Social Features

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `userfollowunfollow` | Follow/unfollow user | `Email`, `customerPassword`, `followeecustomerid`, `Mode` |
| `userfollowers` | Get user's followers | `Email` |
| `userfollowing` | Get following list | `Email` |
| `recommendedusers` | Suggested users | - |
| `appversereviews` | Recent reviews | - |

### User Products

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `userproductsreviewed` | Products user reviewed | `customerid` |
| `userproductsunreviewed` | Products user hasn't reviewed | `customerid` |
| `reviews` | Add review | `Email`, `Pid`, `review`, `rating` |
| `addreviewcomment` | Comment on review | `Email`, `customerPassword`, `reviewid`, `commentText` |
| `orderhistory` | Purchase history | `Email`, `customerPassword` |
| `productupdates` | Available updates | `Email`, `customerPassword` |

### Wishlist

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `wishlistretrieve` | Get wishlist | `Email`, `wishlisttype` |
| `wishlistitemadd` | Add to wishlist | `Email`, `Pid`, `wishlisttype` |
| `wishlistitemremove` | Remove from wishlist | `Email`, `Pid` |

### Other

| Module | Description | Extra Parameters |
|--------|-------------|------------------|
| `gettranslatedphrases` | Localization strings | - |
| `availablecountries` | List countries | - |
| `availablelanguages` | List languages | - |
| `availablecurrencies` | List currencies | - |
| `availableageranges` | Age ranges (parental) | - |
| `privacypolicy` | Privacy policy text | - |
| `termsandconditions` | Terms of service | - |
| `giftcertificatedetails` | Gift card info | `Email`, `giftcertficatecode` |
| `ads` | Advertisements | `Pid` |
| `productsupport` | Report problem | `Email`, `Pid`, `message` |
| `appaudit` | App analytics | - |

## Response Format (XML)

The API returns XML responses. Example structure for product list:

```xml
<results>
    <module>allprods</module>
    <page>1</page>
    <moreAvailable>Yes</moreAvailable>
    <totalProducts>150</totalProducts>
    <product>
        <productName>App Name</productName>
        <shortDescription>Brief description</shortDescription>
        <longDescription>Full description with HTML</longDescription>
        <longFeatures>Feature list with HTML</longFeatures>
        <price>0.00</price>
        <rating>4</rating>
        <thumbnail>https://url/to/icon.png</thumbnail>
        <version>1.0.0</version>
        <PublisherName>Developer Name</PublisherName>
        <downloadSize>5.2 MB</downloadSize>
        <DownloadURL>https://url/to/app.apk</DownloadURL>
        <FreeTrialURL></FreeTrialURL>
        <totalScreenshots>3</totalScreenshots>
        <screenshot1>https://url/to/screenshot1.png</screenshot1>
        <screenshot2>https://url/to/screenshot2.png</screenshot2>
        <screenshot3>https://url/to/screenshot3.png</screenshot3>
        <CFScreenshotURL>https://url/to/coverflow.png</CFScreenshotURL>
        <YouTubeURL></YouTubeURL>
        <InternalProductName>com.example.app</InternalProductName>
    </product>
    <!-- more products... -->
</results>
```

### Key XML Tags

| Tag | Description |
|-----|-------------|
| `results` | Root element |
| `module` | Which module was called |
| `page` | Current page number |
| `moreAvailable` | "Yes" or "No" |
| `totalProducts` | Total count |
| `product` | Product container |
| `category` | Category container |
| `subCategory` | Subcategory container |
| `review` | Review container |
| `user` | User container |
| `error` | Error message |
| `status` | Status code |
| `statusDescription` | Status message |

### Error Response

```xml
<results>
    <error>Error message here</error>
    <status>ERROR_CODE</status>
    <statusDescription>Human readable description</statusDescription>
</results>
```

## Implementation Notes

This project uses a combination of **mock server** and **patched APK**:

### Why HTTP Instead of HTTPS?
Android 2.3.6 (ACL) only supports TLS 1.0 with older cipher suites that modern servers have deprecated. Rather than maintaining complex TLS termination, the patched APK uses plain HTTP.

### APK Modifications
The APK is decompiled with `apktool` and modified at the smali (Dalvik bytecode) level:

1. **Server URL** - Changed from `https://api.openmobileappmall.com` to `http://aclappmall.webosarchive.org`
2. **HTTP connection fix** - Removed `HttpsURLConnection` cast that broke HTTP
3. **Welcome popup disabled** - `getIsShowWelcomeScreen()` always returns "0"
4. **Login bypass** - `checkLoginAndPurchase()` skips login and starts download directly
5. **UI cleanup** - Hidden non-functional buttons (list view download, add review)

### Server Hack: FreeTrialURL
The app's XML parser doesn't populate `getDownloadURL()` from `<DownloadURL>` tags, but DOES parse `<FreeTrialURL>`. The server puts the download URL in both fields as a workaround.

### Product ID Restriction
Product IDs in `apps.php` must be alphanumeric only - **no hyphens or special characters**. The Android client's XML parser fails to load products with hyphens in their IDs (e.g., use `vlc` or `esfileexplorer`, not `vlc-player` or `es-file-explorer`).

### Implemented Modules
- `allprods`, `ns`, `bss`, `fs`, `fts`, `dod` - Product listings
- `browsecategories`, `browsesubcategories`, `software_by_category` - Categories
- `pd` - Product details
- `search` - Search
- `userdetails`, `verify` - Auth (accepts any credentials)

## Key Files (Smali)

| File | Purpose |
|------|---------|
| `MobiPipeRequestConstants.smali` | Server URLs |
| `MobiPipeManager.smali` | HTTP connection handling |
| `User.smali` | Welcome popup logic |
| `MainActivity.smali` | Download/purchase flow |
| `ListProductAdapter.smali` | List view UI |
| `ProductDetails.smali` | Detail view UI |

All in `AppMall-decompiled/smali/com/openmobile/`
