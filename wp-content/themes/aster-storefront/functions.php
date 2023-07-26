<?php
/**
 * Aster Storefront functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aster_storefront
 */

/**
 * Include wptt webfont loader.
 */
require_once get_theme_file_path( 'theme-library/function-files/wptt-webfont-loader.php' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/theme-library/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/theme-library/function-files/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/theme-library/function-files/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/theme-library/customizer.php';

/**
 * Google Fonts
 */
require get_template_directory() . '/theme-library/function-files/google-fonts.php';

/**
 * Dynamic CSS
 */
require get_template_directory() . '/theme-library/dynamic-css.php';

/**
 * Breadcrumb
 */
require get_template_directory() . '/theme-library/function-files/class-breadcrumb-trail.php';

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/theme-library/function-files/woocommerce.php';
}

if ( ! defined( 'ASTER_STOREFRONT_VERSION' ) ) {
	define( 'ASTER_STOREFRONT_VERSION', '1.0.0' );
}

if ( ! function_exists( 'aster_storefront_setup' ) ) :
	
	function aster_storefront_setup() {
		
		load_theme_textdomain( 'aster-storefront', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary', 'aster-storefront' ),
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'woocommerce',
			)
		);

		add_theme_support(
			'custom-background',
			apply_filters(
				'aster_storefront_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		add_theme_support( 'align-wide' );

		add_theme_support( 'responsive-embeds' );
	}
endif;
add_action( 'after_setup_theme', 'aster_storefront_setup' );

function aster_storefront_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aster_storefront_content_width', 640 );
}
add_action( 'after_setup_theme', 'aster_storefront_content_width', 0 );

function aster_storefront_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aster-storefront' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aster-storefront' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title"><span>',
			'after_title'   => '</span></h2>',
		)
	);

	// Regsiter 4 footer widgets.
	register_sidebars(
		4,
		array(
			/* translators: %d: Footer Widget count. */
			'name'          => esc_html__( 'Footer Widget %d', 'aster-storefront' ),
			'id'            => 'footer-widget',
			'description'   => esc_html__( 'Add widgets here.', 'aster-storefront' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title"><span>',
			'after_title'   => '</span></h6>',
		)
	);
}
add_action( 'widgets_init', 'aster_storefront_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aster_storefront_scripts() {
	// Append .min if SCRIPT_DEBUG is false.
	$min = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	// Slick style.
	wp_enqueue_style( 'aster-storefront-slick-style', get_template_directory_uri() . '/resource/css/slick' . $min . '.css', array(), '1.8.1' );

	// Fontawesome style.
	wp_enqueue_style( 'aster-storefront-fontawesome-style', get_template_directory_uri() . '/resource/css/fontawesome' . $min . '.css', array(), '5.15.4' );

	// Google fonts.
	wp_enqueue_style( 'aster-storefront-google-fonts', wptt_get_webfont_url( aster_storefront_get_fonts_url() ), array(), null );

	// Main style.
	wp_enqueue_style( 'aster-storefront-style', get_template_directory_uri() . '/style.css', array(), ASTER_STOREFRONT_VERSION );

	// Navigation script.
	wp_enqueue_script( 'aster-storefront-navigation-script', get_template_directory_uri() . '/resource/js/navigation' . $min . '.js', array(), ASTER_STOREFRONT_VERSION, true );

	// Slick script.
	wp_enqueue_script( 'aster-storefront-slick-script', get_template_directory_uri() . '/resource/js/slick' . $min . '.js', array( 'jquery' ), '1.8.1', true );

	// Custom script.
	wp_enqueue_script( 'aster-storefront-custom-script', get_template_directory_uri() . '/resource/js/custom' . $min . '.js', array( 'jquery' ), ASTER_STOREFRONT_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'aster_storefront_scripts' );