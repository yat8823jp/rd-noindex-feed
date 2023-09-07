<?php
/**
 * @package rd-noindex-feed
 */
/*
Plugin Name: RD noindex feed
Plugin URI: https://github.com/yat8823jp/rd-noindex-feed
Description: This plugin is add noindex to feed for WordPress.
Author: YAT
Version: 1.0.0
Author URI: http://wp.yat-net.com
Text Domain: rd-noindex-feed
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

add_action( 'template_redirect', function() {
	if ( is_feed() && headers_sent() === false ) {
		header( 'X-Robots-Tag: noindex, follow', true );
	}
} );