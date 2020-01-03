<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * Function localizes js file and makes own variable for ajax-url.
 */
if ( !is_admin() ) {
	$uri = fw_get_template_customizations_directory_uri( '/extensions/shortcodes/shortcodes/cwp-contact-us-methods' );

	if ( !wp_style_is( 'fw-shortcode-cwp-contact-us-methods-css', 'enqueued' ) ) {
		wp_enqueue_style(
		    'fw-shortcode-cwp-contact-us-methods-css',
		    $uri . '/static/css/css/styles.min.css'
		);
	}

	if ( !wp_script_is( 'fw-shortcode-cwp-contact-us-methods', 'enqueued' ) ) {
		wp_enqueue_script(
			'fw-shortcode-cwp-contact-us-methods',
			$uri . '/static/js/scripts.min.js',
			array( 'jquery' )
		);
	}
}