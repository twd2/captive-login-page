# captive-login-page

You can select the username / password pair desired to use in the poped login window for captive portals in OS X.

### Getting Started

1. Clone this repository and make it accessable locally (e.g. localhost/...)

2. Install dependencies via Composer:

   ```bash
   composer install
   ```

2. Copy `config.php.default` to `config.php` and configure for authentication.

3. Open and edit `/Library/Preferences/SystemConfiguration/CaptiveNetworkSupport/Settings.plist`:
	
   Replace `http://captive.apple.com/hotspot-detect.html` with something like `http://localhost/captive-login-page/probe.php`.
