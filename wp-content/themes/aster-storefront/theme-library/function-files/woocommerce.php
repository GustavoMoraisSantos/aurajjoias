<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package aster_storefront
 */

function aster_storefront_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'aster_storefront_woocommerce_setup' );

function aster_storefront_woocommerce_scripts() {
	wp_enqueue_style( 'aster-storefront-woocommerce-style', get_template_directory_uri() . '/resource/css/woocommerce.css', array(), ASTER_STOREFRONT_VERSION );

	$font_path   = WC()->plugin_url() . '/resource/fonts/';
	$inline_font = '@font-face {
		font-family: "star";
		src: url("' . $font_path . 'star.eot");
		src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
			url("' . $font_path . 'star.woff") format("woff"),
			url("' . $font_path . 'star.ttf") format("truetype"),
			url("' . $font_path . 'star.svg#star") format("svg");
		font-weight: normal;
		font-style: normal;
	}';

	wp_add_inline_style( 'aster-storefront-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', 'aster_storefront_woocommerce_scripts' );

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function aster_storefront_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', 'aster_storefront_woocommerce_active_body_class' );

function aster_storefront_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'aster_storefront_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( 'aster_storefront_woocommerce_wrapper_before' ) ) {
	function aster_storefront_woocommerce_wrapper_before() {
		?>
			<main id="primary" class="site-main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', 'aster_storefront_woocommerce_wrapper_before' );

if ( ! function_exists( 'aster_storefront_woocommerce_wrapper_after' ) ) {
	function aster_storefront_woocommerce_wrapper_after() {
		?>
			</main>
		<?php
	}
}
add_action( 'woocommerce_after_main_content', 'aster_storefront_woocommerce_wrapper_after' );

if ( ! function_exists( 'aster_storefront_woocommerce_cart_link_fragment' ) ) {
	function aster_storefront_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		aster_storefront_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'aster_storefront_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'aster_storefront_woocommerce_cart_link' ) ) {
	function aster_storefront_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', 'aster-storefront' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), 'aster-storefront' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}
