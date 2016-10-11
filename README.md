[![Codacy Badge](https://api.codacy.com/project/badge/Grade/d50c20fa4e354dea8f7f8219cf451993)](https://www.codacy.com/app/s3rgiosan/google-docs-oembed?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=log-oscon/google-docs-oembed&amp;utm_campaign=Badge_Grade)

# Google Docs oEmbed #
**Contributors:** [s3rgiosan](https://profiles.wordpress.org/s3rgiosan), [log_oscon](https://profiles.wordpress.org/log_oscon)  
**Tags:** google, docs, embed, oembed, document, spreadsheet, presentation    
**Requires at least:** 4.0    
**Tested up to:** 4.6    
**Stable tag:** 1.0.8    
**License:** GPLv2 or later    
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html    

Embed Google documents, spreadsheets and presentations in your posts or pages.  

## Description ##

Registers an oEmbed handler for Google Docs and adds it to the whitelist, allowing all users who can write posts/pages to embed documents, spreadsheets and presentations.  

[Bug report](https://github.com/log-oscon/google-docs-oembed/issues)  
[Source](https://github.com/log-oscon/google-docs-oembed)  

### Usage ###

To embed a Google Doc into a post or page:  
1. Open the document on Google Drive  
2. Select the Publish to the Web under the File menu  
3. Then copy the link and paste it into the content area. Make sure the URL is on its own line and not hyperlinked (clickable when viewing the post)  

For example:  
`https://docs.google.com/document/d/asdfghjkl/pub`  

Another option is to wrap the URL in the [embed] shortcode:  
`[embed width="860" height="640"]https://docs.google.com/document/d/asdfghjkl/pub[/embed]`  

## Installation ##

### Uploading in WordPress Dashboard ###

1. Navigate to the 'Add New' in the plugins dashboard
2. Navigate to the 'Upload' area
3. Select `google-docs-oembed.zip` from your computer
4. Click 'Install Now'
5. Activate the plugin in the Plugin dashboard

### Using FTP ###

1. Download `google-docs-oembed.zip`
2. Extract the `google-docs-oembed` directory to your computer
3. Upload the `google-docs-oembed` directory to the `/wp-content/plugins/` directory
4. Activate the plugin in the Plugin dashboard

## Changelog ##

### 1.0.8 ###
* Added Codacy (a tool for automated code review) badge.  
* Removed the loader class.  

### 1.0.7 ###
* Minor changes.  
* Added language file.  

### 1.0.6 ###
* Fix PSR-4 loader conflict with older implementation.  

### 1.0.5 ###
* Added GitHub Updater support.  
* Added Update supported WordPress version.  

### 1.0.4 ###
* Added composer.lock to repo.  
* Added vendor folder to SVN repo.  

### 1.0.3 ###
* Minor changes.

### 1.0.2 ###
* Check if autoloader exists before requiring.  

### 1.0.1 ###
* Removed an esc_attr() incorrectly called on $extra.  
* Added a build task with composer support.  

### 1.0.0 ###
* Initial release.  

## Upgrade Notice ##

### 1.0 ###
Initial release.  
