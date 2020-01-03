<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

// Contact us methods wrapper margin top.
$margin_top = ( isset( $atts['margin_top'] ) && $atts['margin_top'] ) ? $atts['margin_top'] . 'px' : '0';
// Contact us methods wrapper background image.
$backgropund_image = ( isset( $atts['backgropund_image'] ) && $atts['backgropund_image'] ) ? $atts['backgropund_image']['url'] : '';

// If contact-us-methods array is not empty.
if ( isset( $atts['contact_us_fields'] ) && $atts['contact_us_fields'] ) {
	// Contact methods wrapper.
	echo '<ul class = "cwpcum" style = "margin-top: ' . esc_attr( $margin_top ) . '; background-image: url(' . esc_attr( $backgropund_image ) . ')">';

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