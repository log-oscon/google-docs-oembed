=== Google Docs oEmbed ===
Contributors: s3rgiosan, log_oscon  
Tags: google, docs, embed, oembed, document, spreadsheet, presentation  
Requires at least: 4.0  
Tested up to: 4.2.2  
Stable tag: trunk  
License: GPLv2 or later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

Embed Google documents, spreadsheets and presentations in your posts or pages.  

== Description ==

Registers an oEmbed handler for Google Docs and adds it to the whitelist, allowing all users who can write posts/pages to embed documents, spreadsheets and presentations.  

[Bug report](https://github.com/log-oscon/google-docs-oembed/issues)  
[Source](https://github.com/log-oscon/google-docs-oembed)  

= Usage =

To embed a Google Doc into a post or page:  
1. Open the document on Google Drive  
2. Select the Publish to the Web under the File menu  
3. Then copy the link and paste it into the content area. Make sure the URL is on its own line and not hyperlinked (clickable when viewing the post)  

For example:  
`https://docs.google.com/document/d/asdfghjkl/pub`  

Another option is to wrap the URL in the [embed] shortcode:  
`[embed width="860" height="640"]https://docs.google.com/document/d/asdfghjkl/pub[/embed]`  

== Installation ==

= Uploading in WordPress Dashboard =

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `google-docs-oembed.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

= Using FTP =

1. Download `google-docs-oembed.zip`
2. Extract the `google-docs-oembed` directory to your computer
3. Upload the `google-docs-oembed` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

== Changelog ==

= 1.0.0 =
* Initial release.  
