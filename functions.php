<?php
/**
 * Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CoBlocks Child Theme
 * @author  Sébastien Dumont
 * @license GPL-3.0
 */

/**
 * Enqueues stylesheet.
 */
if ( !function_exists( 'coblocks_child_style' ) ) {
	function coblocks_child_style() {
		// CoBlocks stylesheet.
		wp_enqueue_style( 'coblocks-style', trailingslashit( get_template_directory_uri() ) . 'style.css' );
		// Child Theme stylesheet.
		wp_enqueue_style( 'coblocks-child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'coblocks-style' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'coblocks_child_style', 10 );

