<?php

/**
 * Breadcrumb
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_breadcrumb',
	array(
		'title' => esc_html__( 'Breadcrumb', 'aster-storefront' ),
		'panel' => 'aster_storefront_theme_options',
	)
);

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'aster_storefront_enable_breadcrumb',
	array(
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'aster-storefront' ),
			'section' => 'aster_storefront_breadcrumb',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'aster_storefront_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'aster_storefront_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'aster-storefront' ),
		'active_callback' => 'aster_storefront_is_breadcrumb_enabled',
		'section'         => 'aster_storefront_breadcrumb',
	)
);
