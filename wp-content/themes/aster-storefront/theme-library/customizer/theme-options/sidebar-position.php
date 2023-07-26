<?php

/**
 * Sidebar Position
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'aster-storefront' ),
		'panel' => 'aster_storefront_theme_options',
	)
);

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'aster_storefront_sidebar_position',
	array(
		'sanitize_callback' => 'aster_storefront_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_storefront_sidebar_position',
	array(
		'label'   => esc_html__( 'Global Sidebar Position', 'aster-storefront' ),
		'section' => 'aster_storefront_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-storefront' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-storefront' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-storefront' ),
		),
	)
);

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'aster_storefront_post_sidebar_position',
	array(
		'sanitize_callback' => 'aster_storefront_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_storefront_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Post Sidebar Position', 'aster-storefront' ),
		'section' => 'aster_storefront_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-storefront' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-storefront' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-storefront' ),
		),
	)
);

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'aster_storefront_page_sidebar_position',
	array(
		'sanitize_callback' => 'aster_storefront_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_storefront_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Page Sidebar Position', 'aster-storefront' ),
		'section' => 'aster_storefront_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-storefront' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-storefront' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-storefront' ),
		),
	)
);
