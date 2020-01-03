<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = [];

$cfg['page_builder'] = [
	'title'			=> esc_html__( 'CWP Contact-Us Methods', 'mebel-laim' ),
	'description'	=> esc_html__( 'Add, edit or remove different contact fields.', 'mebel-laim' ),
	'tab'			=> esc_html__( 'Content Elements', 'mebel-laim' ),
	'icon' 			=> 'dashicons dashicons-rest-api'
];