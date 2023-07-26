<?php

/**
 * The template for displaying the footer
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aster_storefront
 */

if ( ! is_front_page() || is_home() ) { ?>
		</div>
	</div>
</div>
<?php } ?>

<footer id="colophon" class="site-footer">
	<div class="site-footer-top">
		<div class="asterthemes-wrapper">
			<div class="footer-widgets-wrapper">

				<?php for ( $i = 1; $i <= 4; $i++ ) { ?>

					<div class="footer-widget-single">
						<?php dynamic_sidebar( 'footer-widget-' . $i ); ?>
					</div>

				<?php } ?>

			</div>
		</div>
	</div>
	<div class="site-footer-bottom">
		<div class="asterthemes-wrapper">
			<div class="site-footer-bottom-wrapper">
				<div class="site-info">
					<?php					
						do_action( 'aster_storefront_footer_copyright' );
					?>
				</div>
			</div>
		</div>
	</div>
</footer>

<?php
$is_scroll_top_active = get_theme_mod( 'aster_storefront_scroll_top', true );
if ( $is_scroll_top_active ) :
	?>
	<a href="#" id="scroll-to-top" class="aster-storefront-scroll-to-top"><i class="fas fa-chevron-up"></i></a>
	<?php
endif;
?>
</div>

<?php wp_footer(); ?>

</body>

</html>
