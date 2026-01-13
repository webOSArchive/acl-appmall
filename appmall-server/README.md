# AppMall Mock Server

A PHP-based mock server for the OpenMobile AppMall API, enabling the AppMall app on ACL (HP TouchPad) to function again.

## Directory Structure

```
appmall-server/
├── api/
│   ├── appmallpipe.php      # Main API endpoint
│   └── appmallpipeorder.php # Order/download endpoint
├── apps/                     # APK files for download
├── config/
│   ├── apps.php             # App catalog configuration
│   └── categories.php       # Category configuration
├── images/                   # App icons and screenshots
├── logs/                     # Request logs (optional)
├── .htaccess                # Apache URL rewriting
├── index.html               # Landing page
└── README.md
```

## Requirements

- PHP 7.0+ (works with PHP 5.6)
- Apache with mod_rewrite enabled
- SSL certificate (the app uses HTTPS)

## Deployment

### 1. Domain Setup

Point these DNS records to your server:
- `api.openmobileappmall.com` → your server IP
- `www.openmobileappmall.com` → your server IP (optional)

### 2. SSL Certificate

Install Let's Encrypt certificate:

```bash
sudo certbot --apache -d api.openmobileappmall.com -d www.openmobileappmall.com
```

### 3. Apache Virtual Host

Example configuration for `/etc/apache2/sites-available/appmall.conf`:

```apache
<VirtualHost *:443>
    ServerName api.openmobileappmall.com
    ServerAlias www.openmobileappmall.com

    DocumentRoot /var/www/appmall-server

    <Directory /var/www/appmall-server>
        AllowOverride All
        Require all granted
    </Directory>

    SSLEngine on
    SSLCertificateFile /etc/letsencrypt/live/api.openmobileappmall.com/fullchain.pem
    SSLCertificateKeyFile /etc/letsencrypt/live/api.openmobileappmall.com/privkey.pem

    ErrorLog ${APACHE_LOG_DIR}/appmall_error.log
    CustomLog ${APACHE_LOG_DIR}/appmall_access.log combined
</VirtualHost>

# Redirect HTTP to HTTPS
<VirtualHost *:80>
    ServerName api.openmobileappmall.com
    ServerAlias www.openmobileappmall.com
    Redirect permanent / https://api.openmobileappmall.com/
</VirtualHost>
```

Enable the site:

```bash
sudo a2ensite appmall
sudo a2enmod rewrite headers
sudo systemctl reload apache2
```

### 4. File Permissions

```bash
sudo chown -R www-data:www-data /var/www/appmall-server
sudo chmod -R 755 /var/www/appmall-server
sudo chmod -R 777 /var/www/appmall-server/logs  # For request logging
```

### 5. Upload Files

Copy this directory to your server:

```bash
rsync -avz appmall-server/ user@yourserver:/var/www/appmall-server/
```

## Adding Apps

Edit `config/apps.php` to add apps to the catalog. Each app entry should include:

```php
[
    'id' => 'unique-id',
    'package_name' => 'com.example.app',
    'name' => 'App Name',
    'short_description' => 'Brief description',
    'long_description' => '<p>Full HTML description</p>',
    'features' => '<ul><li>Feature 1</li></ul>',
    'version' => '1.0.0',
    'price' => '0.00',
    'rating' => 4,
    'publisher' => 'Developer Name',
    'size' => '5.2 MB',
    'icon_url' => 'https://api.openmobileappmall.com/images/app-icon.png',
    'download_url' => 'https://api.openmobileappmall.com/apps/app.apk',
    'screenshots' => ['https://...screenshot1.png'],
    'category_id' => 'tools',
    'subcategory_id' => 'utilities',
    'tags' => ['featured', 'new', 'bestseller'],
],
```

Then upload the APK to `/apps/` and icon to `/images/`.

## Testing

Test the API locally:

```bash
# Test product listing
curl -X POST http://localhost/appmallpipe.php -d "module=allprods&Page=1"

# Test categories
curl -X POST http://localhost/appmallpipe.php -d "module=browsecategories"

# Test search
curl -X POST http://localhost/appmallpipe.php -d "module=search&sString=firefox"

# Test product details
curl -X POST http://localhost/appmallpipe.php -d "module=pd&Pid=opera-mini"
```

## API Modules

The server implements these API modules:

| Module | Description |
|--------|-------------|
| `allprods` | All products |
| `ns` | New software |
| `bss` | Best sellers |
| `fs` | Free software |
| `fts` | Featured |
| `dod` | Deal of the day |
| `pd` | Product details |
| `browsecategories` | List categories |
| `browsesubcategories` | List subcategories |
| `software_by_category` | Products in category |
| `search` | Search products |
| `gettranslatedphrases` | Localization |
| Plus many more... | (see appmallpipe.php) |

## Troubleshooting

### App shows "Connection Error"

1. Verify DNS is pointing to your server
2. Check SSL certificate is valid
3. Ensure Apache is running: `sudo systemctl status apache2`
4. Check Apache error logs: `tail -f /var/log/apache2/appmall_error.log`

### App shows empty product list

1. Check `config/apps.php` has valid entries
2. Verify PHP is working: `php -v`
3. Test API directly with curl

### Downloads fail

1. Verify APK files exist in `/apps/` directory
2. Check file permissions
3. Ensure `download_url` in apps.php matches actual file location

## Logging

Request logging is enabled by default. Logs are written to `logs/requests.log`.

To disable, comment out the logging section in `api/appmallpipe.php`.
