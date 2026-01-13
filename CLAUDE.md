## AppMall Server

The Android Compatibility Layer for webOS bundles an Android app called "AppMall" for discovering and downloading apps. The original OpenMobile servers are dead.

**Reverse engineering completed** - see `AppMall-API.md` for full API documentation:
- API endpoint: `https://api.openmobileappmall.com/appmallpipe.php`
- Format: HTTP POST, XML responses
- Key modules: `allprods`, `browsecategories`, `pd`, `search`, `fs`, `bss`

A mock PHP server was created and moved to a separate repository for hosting at `openmobileappmall.com`.

**Files in this repo:**
- `AppMall-API.md` - Complete API documentation
- `appmall-server` - A Reverse-engineered implementation of the API

