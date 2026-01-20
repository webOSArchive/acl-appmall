<?php
/**
 * AppMall App Catalog
 *
 * Add apps to this array. Each app needs:
 * - id: Unique identifier
 * - package_name: Android package name (com.example.app)
 * - name: Display name
 * - short_description: Brief description
 * - long_description: Full description (HTML allowed)
 * - features: Feature list (HTML allowed)
 * - version: Version string
 * - price: Price (use "0.00" for free)
 * - rating: 1-5 star rating
 * - publisher: Developer/publisher name
 * - size: Download size string
 * - icon_url: URL to app icon
 * - download_url: Direct URL to APK file
 * - screenshots: Array of screenshot URLs
 * - category_id: Category ID (see categories.php)
 * - subcategory_id: Subcategory ID (optional)
 * - tags: Array of tags (featured, new, bestseller)
 * - youtube_url: Optional YouTube video URL
 * - trial_url: Optional trial/lite version URL
 */

// Base URL for locally hosted files (change to your domain)
$BASE_URL = 'http://aclappmall.webosarchive.org';

$APP_CATALOG = [

    // =========================================================================
    // ESSENTIAL APPS - Apps that help users set up their system
    // =========================================================================

    [
        'id' => 'es-file-explorer',
        'package_name' => 'com.estrongs.android.pop',
        'name' => 'ES File Explorer',
        'short_description' => 'Powerful file manager with cloud support and root access',
        'long_description' => '<p>ES File Explorer is a full-featured file manager for Android. It includes:</p><ul><li>File management (copy, move, rename, delete)</li><li>Root explorer for system files</li><li>Cloud storage support</li><li>App manager</li><li>FTP and network shares</li></ul>',
        'features' => '<ul><li>Browse and manage files</li><li>Access root filesystem</li><li>Connect to cloud storage</li><li>Built-in viewers for images, video, music</li><li>App backup and restore</li></ul>',
        'version' => '3.2.5',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'ES Global',
        'size' => 'G MB',
        'icon_url' => $BASE_URL . '/images/esfile-icon.png',
        'download_url' => $BASE_URL . '/apps/es-file-explorer_3.2.5.apk',
        'screenshots' => [
            $BASE_URL . '/images/es-file-explorer-1.png',
            $BASE_URL . '/images/es-file-explorer-2.png',
        ],
        'category_id' => 'tools',
        'subcategory_id' => 'file-managers',
        'tags' => ['featured', 'bestseller'],
    ],


    // =========================================================================
    // BROWSERS
    // =========================================================================

    [
        'id' => 'opera-mini',
        'package_name' => 'com.opera.mini.android',
        'name' => 'Opera Mini',
        'short_description' => 'Fast, lightweight browser with data compression',
        'long_description' => '<p>Opera Mini is a lightweight mobile browser that uses Opera servers to compress pages before sending them to your device. This makes browsing faster and uses less data.</p>',
        'features' => '<ul><li>Data compression saves bandwidth</li><li>Fast page loading</li><li>Tabbed browsing</li><li>Bookmarks sync</li></ul>',
        'version' => '7.5.4',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Opera Software',
        'size' => '1.8 MB',
        'icon_url' => $BASE_URL . '/images/opera-mini-icon.png',
        'download_url' => $BASE_URL . '/apps/FirefoxRootCerts.apk',
        'screenshots' => [],
        'category_id' => 'communication',
        'subcategory_id' => 'browsers',
        'tags' => ['featured', 'bestseller'],
    ],

    [
        'id' => 'firefox',
        'package_name' => 'com.mozilla.firefox',
        'name' => 'Android Browser',
        'short_description' => 'Mozilla Firefox web browser for Android',
        'long_description' => '<p>Firefox for Android brings the Firefox experience to your mobile device. Features include tabbed browsing, sync with desktop Firefox, and add-on support.</p>',
        'features' => '<ul><li>Sync with Firefox desktop</li><li>Add-on support</li><li>Private browsing</li><li>Customizable</li></ul>',
        'version' => '37.0.2',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Mozilla',
        'size' => '32 MB',
        'icon_url' => $BASE_URL . '/images/firefox-icon.png',
        'download_url' => $BASE_URL . '/apps/firefox_37.0.2.apk',
        'screenshots' => [],
        'category_id' => 'communication',
        'subcategory_id' => 'browsers',
        'tags' => ['bestseller'],
    ],

    // =========================================================================
    // MEDIA & ENTERTAINMENT
    // =========================================================================

    [
        'id' => 'vlc',
        'package_name' => 'org.videolan.vlc',
        'name' => 'VLC for Android',
        'short_description' => 'Play any video or audio file',
        'long_description' => '<p>VLC for Android is a full port of VLC media player. It can play most multimedia files, network streams, and DVD ISOs.</p>',
        'features' => '<ul><li>Plays all formats</li><li>No codec packs needed</li><li>Subtitle support</li><li>Audio and video playlists</li><li>Network stream support</li></ul>',
        'version' => '0.9.10',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'VideoLAN',
        'size' => '12.2 MB',
        'icon_url' => $BASE_URL . '/images/vlc-icon.png',
        'download_url' => $BASE_URL . '/apps/vlc-0.9.10.apk',
        'screenshots' => [],
        'category_id' => 'media',
        'subcategory_id' => 'video-players',
        'tags' => ['featured', 'bestseller'],
    ],

    // =========================================================================
    // GAMES
    // =========================================================================

    [
        'id' => 'cut-the-rope',
        'package_name' => 'com.zeptolab.ctr.free',
        'name' => 'Cut the Rope',
        'short_description' => 'Physics puzzle game - feed candy to Om Nom!',
        'long_description' => '<p>Cut the Rope is a physics-based puzzle game. Cut ropes to release candy and feed it to the adorable Om Nom creature. Collect stars along the way!</p>',
        'features' => '<ul><li>Physics-based puzzles</li><li>Multiple worlds</li><li>Collect stars</li><li>Unlock new levels</li></ul>',
        'version' => '2.3.0',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'ZeptoLab',
        'size' => '29.6 MB',
        'icon_url' => $BASE_URL . '/images/cutrope-icon.png',
        'download_url' => $BASE_URL . '/apps/cut-the-rope_2.3.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'puzzle',
        'tags' => ['featured'],
    ],

     [
        'id' => 'tiny-deathstar',
        'package_name' => 'com.lucasarts.tinydeathstar_goo',
        'name' => 'Tiny Death Star',
        'short_description' => 'A strategy and management game where you are in charge of your own Death Star!',
        'long_description' => '<p>Tiny Death Star is a strategy and management game where you are in charge of your own Death Star!</p><p>The object of the game is to build the biggest and best Death Star around. To help you achieve such a feat, you will have the chance to build more than 80 different types of rooms, including karaoke spots, souvenir shops, and even spas to allow your inhabitants to relax.</p>',
        'features' => '<ul><li>More than 30 different races from Star Wars</li><li>80 different types of rooms</li></ul>',
        'version' => '1.4.2',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'LucasArts',
        'size' => '51.6 MB',
        'icon_url' => $BASE_URL . '/images/tinydeathstar-icon.png',
        'download_url' => $BASE_URL . '/apps/tiny-deathstar_1.4.2.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'puzzle',
        'tags' => ['featured'],
    ],

    // =========================================================================
    // Add more apps here...
    // =========================================================================

];
