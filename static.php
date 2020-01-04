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
}