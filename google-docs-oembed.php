<?php

/**
 * Google Docs oEmbed
 *
 * Registers an oEmbed handler for Google Docs and adds it to the whitelist,
 * allowing all users who can write posts/pages to embed documents, spreadsheets and presentations.
 *
 * @link              http://log.pt/
 * @since             1.0.0
 * @package           GoogleDocsOembed
 *
 * @wordpress-plugin
 * Plugin Name:       Google Docs oEmbed
 * Plugin URI:        https://github.com/log-oscon/google-docs-oembed/
 * Description:       Embed Google documents, spreadsheets and presentations in your posts or pages.
 * Version:           1.0.3
 * Author:            log.OSCON, Lda.
 * Author URI:        http://log.pt/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       google-docs-oembed
 * Domain Path:       /languages
 */

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use logoscon\GoogleDocsOembed;

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Begins execution of the plugin.
 *
 * @since    1.0.0
 */
\add_action( 'plugins_loaded', function () {
    $plugin = new GoogleDocsOembed\Plugin();
    $plugin->run();
} );
