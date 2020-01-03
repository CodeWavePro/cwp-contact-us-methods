<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Contact us methods wrapper margin top.
$margin_top = ( isset( $atts['margin_top'] ) && $atts['margin_top'] ) ? $atts['margin_top'] . 'px' : '0';
// Contact us methods wrapper padding for all sides.
$padding_top = ( isset( $atts['padding_top'] ) && $atts['padding_top'] ) ? $atts['padding_top'] . 'px' : '0';
$padding_bottom = ( isset( $atts['padding_bottom'] ) && $atts['padding_bottom'] ) ? $atts['padding_bottom'] . 'px' : '0';
$padding_left_right = ( isset( $atts['padding_left_right'] ) && $atts['padding_left_right'] ) ? $atts['padding_left_right'] . 'px' : '0';
// If background.
if ( $atts['is_background']['choice'] === 'yes' ) {
	// Contact us methods wrapper background image.
	$background_image = ( isset( $atts['is_background']['yes']['background_image'] ) && $atts['is_background']['yes']['background_image'] ) ?
						 $atts['is_background']['yes']['background_image']['url'] :
						 '';
	// Contact us methods wrapper overlay color.
	$overlay_color = ( isset( $atts['is_background']['yes']['overlay_color'] ) && $atts['is_background']['yes']['overlay_color'] ) ?
					 $atts['is_background']['yes']['overlay_color'] :
					 '#000';
	// Contact us methods wrapper overlay opacity.
	$overlay_opacity = ( isset( $atts['is_background']['yes']['overlay_opacity'] ) && $atts['is_background']['yes']['overlay_opacity'] ) ?
					   $atts['is_background']['yes']['overlay_opacity'] :
					   '1';
}	else {
	// Default values.
	$backgropund_image = '';
	$overlay_color = 'transparent';
	$overlay_opacity = '1';
}

// If contact-us-methods array is not empty.
if ( isset( $atts['contact_us_fields'] ) && $atts['contact_us_fields'] ) {
	// Contact methods wrapper and its styles.
	echo '<ul class = "cwpcum"
			  style = "margin-top: ' . esc_attr( $margin_top ) . ';
			  		   padding: ' . esc_attr( $padding_top ) . ' ' . esc_attr( $padding_left_right ) . ' ' . esc_attr( $padding_bottom ) . ';
			  		   background-image: url(' . esc_attr( $background_image ) . ')">';
	// Contact methods wrapper overlay and its styles.
	echo '<span class = "cwpcum__overlay"
				style = "background-color: ' . esc_attr( $overlay_color ) . ';
						 opacity: ' . esc_attr( $overlay_opacity ) . '"></span>';

	// If header text is not empty.
	if ( isset( $atts['title'] ) && $atts['title'] ) {
		echo '<h4 class = "cwpcum__title">' . esc_html( $atts['title'] ) . '</h4>';
	}

	foreach ( $atts['contact_us_fields'] as $contact ) {
		// Single contact method item.
		echo '<li class = "cwpcum-item">';

		// If field icon is chosen.
		if ( isset( $contact['field_icon'] ) && $contact['field_icon'] ) {
			$field_icon_color = ( isset( $contact['field_icon_color'] ) && $contact['field_icon_color'] ) ? $contact['field_icon_color'] : '#000';
			echo '<i class = "' . esc_attr( $contact['field_icon']['icon-class'] ) . ' cwpcum-item__icon" style = "color: ' . esc_attr( $field_icon_color ) . '"></i>';
		}

		// If field text is not empty.
		if ( isset( $contact['field_text'] ) && $contact['field_text'] ) {
			// If field type is chosen.
			if ( isset( $contact['field_type'] ) ) {
				switch ( $contact['field_type'] ) {
					case 'choice-phone':
						echo '<a class = "cwpcum-item__link" href = "tel:' . esc_attr( $contact['field_text'] ) . '">' . esc_html( $contact['field_text'] ) . '</a>';
						break;

					case 'choice-email':
						echo '<a class = "cwpcum-item__link" href = "mailto:' . esc_attr( $contact['field_text'] ) . '">' . esc_html( $contact['field_text'] ) . '</a>';
						break;
					
					default:	// choice-other.
						echo '<span class = "cwpcum-item__text">' . esc_html( $contact['field_text'] ) . '</span>';
						break;
				}
			}
		}
		echo '</li>';	// .cwpcum-item
	}
	echo '</ul>';	// .cwpcum
}