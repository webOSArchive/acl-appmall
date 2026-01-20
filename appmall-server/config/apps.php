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
        'id' => 'esfileexplorer',
        'package_name' => 'com.estrongs.android.pop',
        'name' => 'ES File Explorer',
        'short_description' => 'Powerful file manager with cloud support and root access',
        'long_description' => '<p>ES File Explorer is a full-featured file manager for Android. It includes:</p><ul><li>File management (copy, move, rename, delete)</li><li>Root explorer for system files</li><li>Cloud storage support</li><li>App manager</li><li>FTP and network shares</li></ul>',
        'features' => '<ul><li>Browse and manage files</li><li>Access root filesystem</li><li>Connect to cloud storage</li><li>Built-in viewers for images, video, music</li><li>App backup and restore</li></ul>',
        'version' => '3.2.5',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'ES Global',
        'size' => '5 MB',
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
        'id' => 'operamini',
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
        'name' => 'Mozilla Firefox',
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
        'id' => 'cuttherope',
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
        'id' => 'tinydeathstar',
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
    // GAMES - Racing
    // =========================================================================

    [
        'id' => 'asphalt7',
        'package_name' => 'com.gameloft.android.SAMSUNG.GloftA7SS',
        'name' => 'Asphalt 7: Heat',
        'short_description' => 'Arcade racing with 60 cars and 15 tracks worldwide',
        'long_description' => '<p>Asphalt 7: Heat is an arcade racing game from Gameloft featuring 60 licensed cars from Ferrari, Lamborghini, Aston Martin, and more. Race on 15 tracks set in real cities including Hawaii, Paris, London, Miami, and Rio.</p>',
        'features' => '<ul><li>60 licensed cars across 7 tiers</li><li>15 tracks in real-world locations</li><li>Career mode with 13 cups</li><li>Multiplayer via Wi-Fi and Bluetooth</li><li>Multiple race types: Normal, Drift, Elimination</li></ul>',
        'version' => '1.0.0',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Gameloft',
        'size' => '2.9 MB',
        'icon_url' => $BASE_URL . '/images/asphalt7-icon.png',
        'download_url' => $BASE_URL . '/apps/asphalt7_1.0.0.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'racing',
        'tags' => ['featured'],
    ],

    // =========================================================================
    // GAMES - Arcade
    // =========================================================================

    [
        'id' => 'flappybird',
        'package_name' => 'com.dotgears.flappybird',
        'name' => 'Flappy Bird',
        'short_description' => 'Tap to fly through pipes in this addictive arcade game',
        'long_description' => '<p>Flappy Bird is the infamous one-touch arcade game. Tap to flap your wings and navigate through gaps in the pipes. Simple to learn, nearly impossible to master.</p>',
        'features' => '<ul><li>One-touch gameplay</li><li>Endless challenge</li><li>Retro pixel art style</li><li>Addictive high-score chasing</li></ul>',
        'version' => '1.0',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'dotGears',
        'size' => '1 MB',
        'icon_url' => $BASE_URL . '/images/flappybird-icon.png',
        'download_url' => $BASE_URL . '/apps/flappybird_1.0.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'arcade',
        'tags' => ['featured'],
    ],

    [
        'id' => 'fruitninja',
        'package_name' => 'com.halfbrick.fruitninjafree',
        'name' => 'Fruit Ninja',
        'short_description' => 'Slice fruit with your finger in this juicy arcade game',
        'long_description' => '<p>Fruit Ninja is the original hit fruit-slicing game. Swipe your finger across the screen to slice fruit, avoid bombs, and chase high scores in multiple game modes.</p>',
        'features' => '<ul><li>Swipe to slice fruit</li><li>Multiple game modes</li><li>Unlockable blades and backgrounds</li><li>Combo scoring system</li></ul>',
        'version' => '1.8.8',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Halfbrick Studios',
        'size' => '48 MB',
        'icon_url' => $BASE_URL . '/images/fruitninja-icon.png',
        'download_url' => $BASE_URL . '/apps/fruitninja_1.8.8.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'arcade',
        'tags' => ['featured', 'bestseller'],
    ],

    [
        'id' => 'geometrydash',
        'package_name' => 'com.robtopx.geometryjump',
        'name' => 'Geometry Dash',
        'short_description' => 'Rhythm-based action platformer with intense challenges',
        'long_description' => '<p>Jump and fly your way through danger in this rhythm-based action platformer. Prepare for a near impossible challenge as you navigate through obstacles synced to exciting music.</p>',
        'features' => '<ul><li>Rhythm-based gameplay</li><li>Multiple levels with unique soundtracks</li><li>Level editor to build and share</li><li>Unlock icons and colors</li><li>Practice mode to sharpen skills</li></ul>',
        'version' => '1.60',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'RobTop Games',
        'size' => '32 MB',
        'icon_url' => $BASE_URL . '/images/geometrydash-icon.png',
        'download_url' => $BASE_URL . '/apps/geometrydash_1.60.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'arcade',
        'tags' => ['featured', 'bestseller'],
    ],

    [
        'id' => 'templerun',
        'package_name' => 'com.imangi.templerun',
        'name' => 'Temple Run',
        'short_description' => 'Endless running adventure - escape the temple with the idol',
        'long_description' => '<p>Temple Run is the original endless running game. You have stolen the cursed idol from the temple, and now you have to run for your life to escape the evil demon monkeys.</p>',
        'features' => '<ul><li>Swipe to turn, jump, and slide</li><li>Tilt to collect coins</li><li>Unlock characters and power-ups</li><li>Endless gameplay</li></ul>',
        'version' => '1.0.3',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Imangi Studios',
        'size' => '26 MB',
        'icon_url' => $BASE_URL . '/images/templerun-icon.png',
        'download_url' => $BASE_URL . '/apps/templerun_1.0.3.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'arcade',
        'tags' => ['bestseller'],
    ],

    [
        'id' => 'templerun2',
        'package_name' => 'com.imangi.templerun2',
        'name' => 'Temple Run 2',
        'short_description' => 'The sequel to the smash hit endless runner',
        'long_description' => '<p>Temple Run 2 continues the adventure with new graphics, obstacles, and environments. Navigate perilous cliffs, zip lines, mines, and forests as you escape with the cursed idol.</p>',
        'features' => '<ul><li>Beautiful new graphics</li><li>New obstacles and environments</li><li>More power-ups and characters</li><li>Endless runner gameplay</li></ul>',
        'version' => '1.2.1',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Imangi Studios',
        'size' => '31 MB',
        'icon_url' => $BASE_URL . '/images/templerun2-icon.png',
        'download_url' => $BASE_URL . '/apps/templerun2_1.2.1.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'arcade',
        'tags' => ['featured', 'bestseller'],
    ],

    [
        'id' => 'robocop',
        'package_name' => 'com.glu.robocop',
        'name' => 'RoboCop',
        'short_description' => 'Third-person shooter based on the 2014 film',
        'long_description' => '<p>RoboCop: The Official Game is a third-person cover-based shooter. Train in the OmniCorp simulator and prepare for the dangerous streets of Detroit using signature weapons, experimental tech, and drone strikes.</p>',
        'features' => '<ul><li>Cover-based shooting gameplay</li><li>Upgrade weapons and suit</li><li>Heat vision to find enemies</li><li>Fight robots from the film</li></ul>',
        'version' => '3.0.6',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Glu Mobile',
        'size' => '3.7 MB',
        'icon_url' => $BASE_URL . '/images/robocop-icon.png',
        'download_url' => $BASE_URL . '/apps/robocop_3.0.6.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'arcade',
        'tags' => [],
    ],

    // =========================================================================
    // GAMES - Puzzle
    // =========================================================================

    [
        'id' => 'bejeweledblitz',
        'package_name' => 'com.ea.BejeweledBlitz_row',
        'name' => 'Bejeweled Blitz',
        'short_description' => 'Match gems in 60-second blitz rounds',
        'long_description' => '<p>Bejeweled Blitz is the hit match-3 puzzle game. Match gems to create cascading explosions in fast-paced 60-second rounds. Compete with friends for the highest score.</p>',
        'features' => '<ul><li>60-second blitz gameplay</li><li>Special gems and power-ups</li><li>Weekly tournaments</li><li>Compete with friends</li></ul>',
        'version' => '1.4.4',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Electronic Arts',
        'size' => '47 MB',
        'icon_url' => $BASE_URL . '/images/bejeweledblitz-icon.png',
        'download_url' => $BASE_URL . '/apps/bejeweledblitz_1.4.4.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'puzzle',
        'tags' => ['bestseller'],
    ],

    [
        'id' => 'wheresmywater',
        'package_name' => 'com.disney.WMWLite',
        'name' => "Where's My Water? Free",
        'short_description' => 'Dig through dirt to guide water to Swampy the alligator',
        'long_description' => "<p>Where's My Water? is a physics-based puzzle game. Help Swampy the alligator by digging paths through dirt to guide water to his shower. Collect rubber ducks along the way!</p>",
        'features' => '<ul><li>Physics-based puzzles</li><li>Dig through dirt and rock</li><li>Collect rubber ducks</li><li>Multiple chapters</li></ul>',
        'version' => '1.0.2',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Disney',
        'size' => '23 MB',
        'icon_url' => $BASE_URL . '/images/wheresmywater-icon.png',
        'download_url' => $BASE_URL . '/apps/wheresmywater_1.0.2.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'puzzle',
        'tags' => ['featured'],
    ],

    [
        'id' => 'wheresmywater2',
        'package_name' => 'com.disney.wheresmywater2_goo',
        'name' => "Where's My Water? 2",
        'short_description' => 'More physics puzzles with Swampy and friends',
        'long_description' => "<p>Where's My Water? 2 continues the puzzle fun with Swampy, Allie, and Cranky. Guide water, steam, and purple ooze through challenging levels in this sequel.</p>",
        'features' => '<ul><li>Three playable characters</li><li>New gameplay mechanics</li><li>Challenge modes</li><li>Hundreds of levels</li></ul>',
        'version' => '1.0.1',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Disney',
        'size' => '46 MB',
        'icon_url' => $BASE_URL . '/images/wheresmywater2-icon.png',
        'download_url' => $BASE_URL . '/apps/wheresmywater2_1.0.1.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'puzzle',
        'tags' => [],
    ],

    // =========================================================================
    // GAMES - Casual
    // =========================================================================

    [
        'id' => 'minecraft',
        'package_name' => 'com.mojang.minecraftpe',
        'name' => 'Minecraft - Pocket Edition',
        'short_description' => 'Create, explore and survive in infinite blocky worlds',
        'long_description' => '<p>Minecraft - Pocket Edition brings the full Minecraft experience to mobile. Build anything you can imagine, explore randomly generated worlds, and survive against creatures of the night.</p>',
        'features' => '<ul><li>Infinite worlds</li><li>Survival and Creative modes</li><li>Multiplayer over local Wi-Fi</li><li>Craft, create, and explore</li></ul>',
        'version' => '0.15.1.2',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Mojang',
        'size' => '36 MB',
        'icon_url' => $BASE_URL . '/images/minecraft-icon.png',
        'download_url' => $BASE_URL . '/apps/minecraft_0.15.1.2.apk',
        'screenshots' => [],
        'category_id' => 'games',
        'subcategory_id' => 'casual',
        'tags' => ['featured', 'bestseller'],
    ],

    // =========================================================================
    // SYSTEM UTILITIES - Android Stock Apps
    // =========================================================================

    [
        'id' => 'calendar',
        'package_name' => 'com.android.calendar',
        'name' => 'Calendar',
        'short_description' => 'Android calendar app for managing events and schedules',
        'long_description' => '<p>The stock Android Calendar app. View and manage your events in day, week, or month view. Syncs with Google Calendar.</p>',
        'features' => '<ul><li>Day, week, month views</li><li>Event reminders</li><li>Google Calendar sync</li><li>Multiple calendars support</li></ul>',
        'version' => '2.3.6',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Google',
        'size' => '576 KB',
        'icon_url' => $BASE_URL . '/images/calendar-icon.png',
        'download_url' => $BASE_URL . '/apps/calendar_2.3.6.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => [],
    ],

    [
        'id' => 'contacts',
        'package_name' => 'com.android.contacts',
        'name' => 'Contacts',
        'short_description' => 'Android contacts manager for people and phone numbers',
        'long_description' => '<p>The stock Android Contacts app. Manage your contacts, groups, and favorites. Syncs with Google Contacts.</p>',
        'features' => '<ul><li>Contact management</li><li>Groups and favorites</li><li>Google Contacts sync</li><li>Quick search</li></ul>',
        'version' => '2.3.6',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Google',
        'size' => '1.3 MB',
        'icon_url' => $BASE_URL . '/images/contacts-icon.png',
        'download_url' => $BASE_URL . '/apps/contacts_2.3.6.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => [],
    ],

    [
        'id' => 'deskclock',
        'package_name' => 'com.android.deskclock',
        'name' => 'Clock',
        'short_description' => 'Alarm clock, timer, and stopwatch',
        'long_description' => '<p>The stock Android Clock app featuring alarms, world clock, timer, and stopwatch. Perfect for waking up or timing activities.</p>',
        'features' => '<ul><li>Multiple alarms</li><li>World clock</li><li>Countdown timer</li><li>Stopwatch</li></ul>',
        'version' => '2.0.2',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Google',
        'size' => '344 KB',
        'icon_url' => $BASE_URL . '/images/deskclock-icon.png',
        'download_url' => $BASE_URL . '/apps/deskclock_2.0.2.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => [],
    ],

    [
        'id' => 'email',
        'package_name' => 'com.android.email',
        'name' => 'Email',
        'short_description' => 'Email client for POP3, IMAP, and Exchange accounts',
        'long_description' => '<p>The stock Android Email app. Connect to your email accounts using POP3, IMAP, or Exchange. Manage multiple accounts in one place.</p>',
        'features' => '<ul><li>POP3 and IMAP support</li><li>Exchange ActiveSync</li><li>Multiple accounts</li><li>Push notifications</li></ul>',
        'version' => '2.3.4',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Google',
        'size' => '1.2 MB',
        'icon_url' => $BASE_URL . '/images/email-icon.png',
        'download_url' => $BASE_URL . '/apps/email_2.3.4.apk',
        'screenshots' => [],
        'category_id' => 'communication',
        'subcategory_id' => 'email',
        'tags' => [],
    ],

    [
        'id' => 'screencast',
        'package_name' => 'com.ms.screencast',
        'name' => 'Screencast',
        'short_description' => 'Record your screen to video',
        'long_description' => '<p>Screencast allows you to record your device screen to video. Perfect for creating tutorials, recording gameplay, or capturing app demos.</p>',
        'features' => '<ul><li>Screen recording</li><li>Adjustable quality</li><li>No root required</li><li>Easy sharing</li></ul>',
        'version' => '3.2a',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'MS Apps',
        'size' => '3.4 MB',
        'icon_url' => $BASE_URL . '/images/screencast-icon.png',
        'download_url' => $BASE_URL . '/apps/screencast_3.2a.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => [],
    ],

    // =========================================================================
    // MEDIA
    // =========================================================================

    [
        'id' => 'gallery',
        'package_name' => 'com.cooliris.media',
        'name' => 'Gallery',
        'short_description' => 'Photo and video gallery with 3D album view',
        'long_description' => '<p>Gallery3D is the classic Android gallery app with a unique 3D album view. Browse your photos and videos with smooth animations and quick navigation.</p>',
        'features' => '<ul><li>3D album view</li><li>Slideshow mode</li><li>Photo editing</li><li>Share to social media</li></ul>',
        'version' => '1.1.30682',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Google',
        'size' => '572 KB',
        'icon_url' => $BASE_URL . '/images/gallery-icon.png',
        'download_url' => $BASE_URL . '/apps/gallery_1.1.30682.apk',
        'screenshots' => [],
        'category_id' => 'media',
        'subcategory_id' => 'photo',
        'tags' => [],
    ],

    [
        'id' => 'music',
        'package_name' => 'com.android.music',
        'name' => 'Music',
        'short_description' => 'Android music player for your audio library',
        'long_description' => '<p>The stock Android Music app. Browse and play your music library by artist, album, song, or playlist. Simple and reliable music playback.</p>',
        'features' => '<ul><li>Browse by artist, album, song</li><li>Playlist support</li><li>Background playback</li><li>Lock screen controls</li></ul>',
        'version' => '2.3.6',
        'price' => '0.00',
        'rating' => 4,
        'publisher' => 'Google',
        'size' => '644 KB',
        'icon_url' => $BASE_URL . '/images/music-icon.png',
        'download_url' => $BASE_URL . '/apps/music_2.3.6.apk',
        'screenshots' => [],
        'category_id' => 'media',
        'subcategory_id' => 'music-players',
        'tags' => [],
    ],

    // =========================================================================
    // PRODUCTIVITY
    // =========================================================================

    [
        'id' => 'kingsoftoffice',
        'package_name' => 'cn.wps.moffice_eng',
        'name' => 'Kingsoft Office',
        'short_description' => 'Full office suite for documents, spreadsheets, and presentations',
        'long_description' => '<p>Kingsoft Office (now WPS Office) is a complete office suite. Create and edit Word documents, Excel spreadsheets, and PowerPoint presentations on your mobile device.</p>',
        'features' => '<ul><li>Word document editing</li><li>Excel spreadsheet support</li><li>PowerPoint presentations</li><li>PDF viewer</li><li>Cloud storage integration</li></ul>',
        'version' => '5.9.1',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Kingsoft',
        'size' => '16 MB',
        'icon_url' => $BASE_URL . '/images/kingsoftoffice-icon.png',
        'download_url' => $BASE_URL . '/apps/kingsoftoffice_5.9.1.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => ['featured'],
    ],

    [
        'id' => 'moonreader',
        'package_name' => 'com.flyersoft.moonreaderp',
        'name' => 'Moon+ Reader Pro',
        'short_description' => 'Feature-rich ebook reader supporting many formats',
        'long_description' => '<p>Moon+ Reader Pro is a powerful ebook reader supporting EPUB, PDF, MOBI, FB2, and many more formats. Features include customizable themes, text-to-speech, annotations, and cloud sync.</p>',
        'features' => '<ul><li>EPUB, PDF, MOBI, FB2 support</li><li>Text-to-speech</li><li>Annotations and highlights</li><li>Customizable themes</li><li>Cloud backup via Dropbox</li></ul>',
        'version' => '2.2.6',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Moon+',
        'size' => '7.1 MB',
        'icon_url' => $BASE_URL . '/images/moonreader-icon.png',
        'download_url' => $BASE_URL . '/apps/moonreader_2.2.6.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => ['featured'],
    ],

    [
        'id' => 'maps',
        'package_name' => 'com.google.android.apps.maps',
        'name' => 'Google Maps',
        'short_description' => 'Navigation and maps with traffic and transit info',
        'long_description' => '<p>Google Maps provides comprehensive maps, navigation, and local search. Get driving directions, transit routes, and walking paths with real-time traffic information.</p>',
        'features' => '<ul><li>Turn-by-turn navigation</li><li>Real-time traffic</li><li>Transit and walking directions</li><li>Local business search</li><li>Street View</li></ul>',
        'version' => '6.14.5',
        'price' => '0.00',
        'rating' => 5,
        'publisher' => 'Google',
        'size' => '7.2 MB',
        'icon_url' => $BASE_URL . '/images/maps-icon.png',
        'download_url' => $BASE_URL . '/apps/maps_6.14.5.apk',
        'screenshots' => [],
        'category_id' => 'tools',
        'subcategory_id' => 'utilities',
        'tags' => ['featured', 'bestseller'],
    ],

];
