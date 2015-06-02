<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/log-oscon/google-docs-oembed/
 * @since      1.0.0
 *
 * @package    GoogleDocsOembed
 * @subpackage GoogleDocsOembed/Frontend
 */

namespace logoscon\GoogleDocsOembed;

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the dashboard-specific stylesheet and JavaScript.
 *
 * @package    GoogleDocsOembed
 * @subpackage GoogleDocsOembed/Frontend
 * @author     log.OSCON, Lda. <engenharia@log.pt>
 */
class Frontend {

	/**
	 * The plugin's instance.
	 *
	 * @since     1.0.0
	 * @access    private
	 * @var       Plugin    $plugin    This plugin's instance.
	 */
	private $plugin;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    Plugin    $plugin    This plugin's instance.
	 */
	public function __construct( Plugin $plugin ) {
		$this->plugin = $plugin;
	}

	/**
	 * Registers the Google Docs oEmbed handler.
	 *
	 * @see      WP_Embed::register_handler()
	 * @see      wp_oembed_register_handler()
	 *
	 * @since    1.0.0
	 */
	public function wp_oembed_register_google_docs() {
		\wp_embed_register_handler( 'google_docs', '#https?:\/\/(www\.)?docs.google.com\/(document|spreadsheets|presentation)\/.*#i', array( $this, 'wp_oembed_handler_google_docs' ), true );
	}

	/**
	 * The Google Docs oembed handler callback.
	 *
	 * @see       WP_Embed::register_handler()
	 * @see       WP_Embed::shortcode()
	 *
	 * @since     1.0.0
	 * @param     array     $matches    The RegEx matches from the provided regex when calling \wp_embed_register_handler().
	 * @param     array     $attr       Embed attributes.
	 * @param     string    $url        The original URL that was matched by the regex.
	 * @param     array     $rawattr    The original unmodified attributes.
	 * @return    string                The embed HTML.
	 */
	public function wp_oembed_handler_google_docs( $matches, $attr, $url, $rawattr ) {

		$base_url = $matches[0];
		$doc_type = $matches[2];
		$extra    = '';		
		$width    = isset( $rawattr['width'] )  ? absint( $rawattr['width'] )  : 0;
		$height   = isset( $rawattr['height'] ) ? absint( $rawattr['height'] ) : 0;

		if ( ! $width || ! $height ) {
			list( $width, $height ) = \wp_expand_dimensions( 500, 750, $attr['width'], $attr['height'] );
		}

		switch ( $doc_type ) {
			case 'document':
				$base_url .= '?embedded=true';
				break;

			case 'spreadsheets':
				$base_url .= '?widget=true&amp;headers=false';
				break;

			case 'presentation':
				$base_url = str_replace( '/pub', '/embed', $base_url );
				$extra    = 'allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"';
				break;

			default:
				break;
		}

		$base_url = \apply_filters( 'oembed_google_docs_base_url', $base_url, $matches, $attr, $rawattr );
		$extra    = \apply_filters( 'oembed_google_docs_extra', $extra, $matches, $attr, $rawattr );

		/**
		 * Filter the Google Docs oEmbed output.
		 *
		 * @since    1.0.0
		 * @param    string    $html       Google Docs HTML oEmbed markup.
		 * @param    array     $matches    The RegEx matches from the provided regex.
		 * @param    array     $attr       An array of embed attributes.
		 * @param    string    $url        The original URL that was matched by the regex.
		 * @param    array     $rawattr    The original unmodified attributes.
		 */
		return \apply_filters( 'oembed_google_docs', sprintf(
			'<iframe width="%s" height="%s" frameborder="0" src="%s" %s></iframe>',
			\esc_attr( $width ),
			\esc_attr( $height ),
			\esc_url( $base_url ),
			$extra
		), $matches, $attr, $url, $rawattr );

	}
}
