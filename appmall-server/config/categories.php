<?php
/**
 * AppMall Categories Configuration
 *
 * Define categories and subcategories for the app store.
 * Each category needs:
 * - id: Unique identifier (used in app catalog)
 * - name: Display name
 * - icon: Optional icon URL
 * - subcategories: Array of subcategories
 */

$BASE_URL = 'https://api.openmobileappmall.com';

$CATEGORIES = [

    [
        'id' => 'featured',
        'name' => 'Featured',
        'icon' => $BASE_URL . '/images/cat-featured.png',
        'subcategories' => [],
    ],

    [
        'id' => 'tools',
        'name' => 'Tools & Utilities',
        'icon' => $BASE_URL . '/images/cat-tools.png',
        'subcategories' => [
            ['id' => 'file-managers', 'name' => 'File Managers'],
            ['id' => 'utilities', 'name' => 'Utilities'],
            ['id' => 'system', 'name' => 'System Tools'],
            ['id' => 'security', 'name' => 'Security'],
        ],
    ],

    [
        'id' => 'communication',
        'name' => 'Communication',
        'icon' => $BASE_URL . '/images/cat-communication.png',
        'subcategories' => [
            ['id' => 'browsers', 'name' => 'Web Browsers'],
            ['id' => 'email', 'name' => 'Email'],
            ['id' => 'messaging', 'name' => 'Messaging'],
            ['id' => 'social', 'name' => 'Social'],
        ],
    ],

    [
        'id' => 'media',
        'name' => 'Media & Entertainment',
        'icon' => $BASE_URL . '/images/cat-media.png',
        'subcategories' => [
            ['id' => 'video-players', 'name' => 'Video Players'],
            ['id' => 'music-players', 'name' => 'Music Players'],
            ['id' => 'photo', 'name' => 'Photo & Gallery'],
            ['id' => 'streaming', 'name' => 'Streaming'],
        ],
    ],

    [
        'id' => 'productivity',
        'name' => 'Productivity',
        'icon' => $BASE_URL . '/images/cat-productivity.png',
        'subcategories' => [
            ['id' => 'office', 'name' => 'Office'],
            ['id' => 'notes', 'name' => 'Notes & Lists'],
            ['id' => 'calendar', 'name' => 'Calendar'],
            ['id' => 'finance', 'name' => 'Finance'],
        ],
    ],

    [
        'id' => 'games',
        'name' => 'Games',
        'icon' => $BASE_URL . '/images/cat-games.png',
        'subcategories' => [
            ['id' => 'casual', 'name' => 'Casual'],
            ['id' => 'puzzle', 'name' => 'Puzzle'],
            ['id' => 'arcade', 'name' => 'Arcade'],
            ['id' => 'strategy', 'name' => 'Strategy'],
            ['id' => 'racing', 'name' => 'Racing'],
        ],
    ],

    [
        'id' => 'education',
        'name' => 'Education',
        'icon' => $BASE_URL . '/images/cat-education.png',
        'subcategories' => [
            ['id' => 'learning', 'name' => 'Learning'],
            ['id' => 'reference', 'name' => 'Reference'],
            ['id' => 'books', 'name' => 'Books & Comics'],
        ],
    ],

    [
        'id' => 'lifestyle',
        'name' => 'Lifestyle',
        'icon' => $BASE_URL . '/images/cat-lifestyle.png',
        'subcategories' => [
            ['id' => 'health', 'name' => 'Health & Fitness'],
            ['id' => 'weather', 'name' => 'Weather'],
            ['id' => 'travel', 'name' => 'Travel'],
            ['id' => 'shopping', 'name' => 'Shopping'],
        ],
    ],

];
