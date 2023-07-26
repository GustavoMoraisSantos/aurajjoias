<?php

/**
 * Dynamic CSS
 */
function aster_storefront_dynamic_css() {
	$primary_color = get_theme_mod( 'primary_color', '#ff0000' );

	$site_title_font       = get_theme_mod( 'aster_storefront_site_title_font', 'Raleway' );
	$site_description_font = get_theme_mod( 'aster_storefront_site_description_font', 'Raleway' );
	$header_font           = get_theme_mod( 'aster_storefront_header_font', 'Epilogue' );
	$body_font             = get_theme_mod( 'aster_storefront_body_font', 'Raleway');

	$custom_css  = '';
	$custom_css .= '
    /* Color */
    :root {
        --primary-color: ' . esc_attr( $primary_color ) . ';
        --header-text-color: ' . esc_attr( '#' . get_header_textcolor() ) . ';
    }
    ';

	$custom_css .= '
    /* Typograhpy */
    :root {
        --font-heading: "' . esc_attr( $header_font ) . '", serif;
        --font-main: -apple-system, BlinkMacSystemFont,"' . esc_attr( $body_font ) . '", "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }

    body,
	button, input, select, optgroup, textarea {
        font-family: "' . esc_attr( $body_font ) . '", serif;
	}

	.site-title a {
        font-family: "' . esc_attr( $site_title_font ) . '", serif;
	}
    
	.site-description {
        font-family: "' . esc_attr( $site_description_font ) . '", serif;
	}
    ';

    // slider and service hideshow css
    $aster_storefront_show_slider = get_theme_mod( 'aster_storefront_enable_banner_section', false);
    $aster_storefront_show_service = get_theme_mod( 'aster_storefront_enable_service_section', false);
        if($aster_storefront_show_slider == false && $aster_storefront_show_service == false){
            $custom_css .='.home header.site-header .header-main-wrapper .bottom-header-outer-wrapper .bottom-header-part{';
            $custom_css .='position:static;
        }
        padding: 10px;
        border-bottom: 1px solid #777777;';
            $custom_css .='}';
    }

   if($aster_storefront_show_slider == false){
        $custom_css .='.home header.site-header .header-main-wrapper .bottom-header-outer-wrapper .bottom-header-part{';
            $custom_css .='position:static;background: var(--background-color-white); padding: 10px; border-bottom: 1px solid #777777;';
        $custom_css .='}';
        $custom_css .='#aster_storefront_service_section{';
            $custom_css .='margin:5px;';
        $custom_css .='}';
    }

	wp_add_inline_style( 'aster-storefront-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'aster_storefront_dynamic_css', 99 );
