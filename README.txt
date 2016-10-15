=== Google Docs oEmbed ===
Contributors: s3rgiosan, log_oscon  
Tags: google, docs, embed, oembed, document, spreadsheet, presentation  
Requires at least: 4.0  
Tested up to: 4.6  
Stable tag: 1.0.10  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

Embed Google documents, spreadsheets and presentations in your posts or pages.  

== Description ==

Registers an oEmbed handler for Google Docs and adds it to the whitelist, allowing all users who can write posts/pages to embed documents, spreadsheets and presentations.  

= Usage =

To embed a Google Doc into a post or page:  
1. Open the document on Google Drive  
2. Select the Publish to the Web under the File menu  
3. Then copy the link and paste it into the content area. Make sure the URL is on its own line and not hyperlinked (clickable when viewing the post)  

For example:  
`https://docs.google.com/document/d/abcdefghij/pub`  

Another option is to wrap the URL in the [embed] shortcode:  
`[embed width="860" height="640"]https://docs.google.com/document/d/abcdefghij/pub[/embed]`  

== Installation ==

= Dashboard =

1. Go to the 'Plugins' menu, and choose 'Add New'.
2. Search for 'google-docs-oembed', and then click 'Install Now'.
2. Click 'Activate'.

= FTP =

1. Download and extract the .zip file.
2. Upload the unzipped folder to the `/wp-content/plugins/` directory.
3. Activate the plugin through the 'Plugins' menu.

= Composer =

`composer require logoscon/google-docs-oembed`

== Frequently Asked Questions ==

= Where can I report bugs? =

Bugs can be reported on the [GitHub repository](https://github.com/log-oscon/google-docs-oembed/issues).

= How can I contribute? =

Join in on our [GitHub repository](https://github.com/log-oscon/google-docs-oembed) and read our [contribution](https://github.com/log-oscon/google-docs-oembed/blob/master/CONTRIBUTING.md) guidelines.

== Changelog ==

= 1.0.10 =
* Added Code Climate integration.  
* Added moar badges (yes I am a badge poser).
* Added contribution guidelines.  
* Updated README. 

= 1.0.9 =
* Updated Codacy badge url.  
* Fixed NPath complexity of 300.   

= 1.0.8 =
* Added Codacy (a tool for automated code review) badge.  
* Removed the loader class.  

= 1.0.7 =
* Minor changes.  
* Added language file.  

= 1.0.6 =
* Fix PSR-4 loader conflict with older implementation.  

= 1.0.5 =
* Added GitHub Updater support.  
* Added Update supported WordPress version.  

= 1.0.4 =
* Added composer.lock to repo.  
* Added vendor folder to SVN repo.  

= 1.0.3 =
* Minor changes.

= 1.0.2 =
* Check if autoloader exists before requiring.  

= 1.0.1 =
* Removed an esc_attr() incorrectly called on $extra.  
* Added a build task with composer support.  

= 1.0.0 =
* Initial release.  

== Upgrade Notice ==

= 1.0 =  
Initial release.  
