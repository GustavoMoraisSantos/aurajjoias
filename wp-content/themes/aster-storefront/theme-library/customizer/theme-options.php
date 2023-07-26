<?php

/**
 * Theme Options
 *
 * @package aster_storefront
 */

$wp_customize->add_panel(
	'aster_storefront_theme_options',
	array(
		'title'    => esc_html__( 'Theme Options', 'aster-storefront' ),
		'priority' => 10,
	)
);

// Header Options.
require get_template_directory() . '/theme-library/customizer/theme-options/header-options.php';

// Typography.
require get_template_directory() . '/theme-library/customizer/theme-options/typography.php';

// Excerpt.
require get_template_directory() . '/theme-library/customizer/theme-options/excerpt.php';

// Breadcrumb.
require get_template_directory() . '/theme-library/customizer/theme-options/breadcrumb.php';

// Archive Layout.
require get_template_directory() . '/theme-library/customizer/theme-options/archive-layout.php';

// Sidebar Position.
require get_template_directory() . '/theme-library/customizer/theme-options/sidebar-position.php';

// Post Options.
require get_template_directory() . '/theme-library/customizer/theme-options/post-options.php';

// Pagination.
require get_template_directory() . '/theme-library/customizer/theme-options/pagination.php';

// Footer Options.
require get_template_directory() . '/theme-library/customizer/theme-options/footer-options.php';