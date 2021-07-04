# nextcloud
Scripts and customizions for Nextcloud

## Update

If you get a warning message about additional files when updating Nextcloud, open `/updater/index.php` and search for `private function getExpectedElementsList`:

```
	private function getExpectedElementsList() {
		$expected = [
			// Generic
			'.',
			'..',
			// Folders
			'.well-known',
			'3rdparty',
			'apps',
			'config',
			'core',
			'data',
			'l10n',
			'lib',
			'ocs',
			'ocs-provider',
			'ocm-provider',
			'resources',
			'settings',
			'themes',
			'updater',
			'nextcloud-data', # added by me
      'tmp', # added by me
			// Files
			'.rnd',
			'index.html',
			'indie.json',
			'.user.ini',
			'console.php',
			'cron.php',
			'index.php',
			'public.php',
			'remote.php',
			'status.php',
			'version.php',
			'robots.txt',
			'.htaccess',
			'AUTHORS',
			'CHANGELOG.md',
			'COPYING',
			'COPYING-AGPL',
			'occ',
			'db_structure.xml',
      'webcron.php', # added by me
		];
```

## Links

* https://gitlab.com/-/snippets/2033200
