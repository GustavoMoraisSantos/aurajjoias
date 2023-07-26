<?php

/**
 * Header Options
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_header_options',
	array(
		'panel' => 'aster_storefront_theme_options',
		'title' => esc_html__( 'Header Options', 'aster-storefront' ),
	)
);

// Header Options - Enable Topbar.
$wp_customize->add_setting(
	'aster_storefront_enable_topbar',
	array(
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_enable_topbar',
		array(
			'label'   => esc_html__( 'Enable Topbar', 'aster-storefront' ),
			'section' => 'aster_storefront_header_options',
		)
	)
);

// Header Options - Contact Number.
$wp_customize->add_setting(
	'aster_storefront_discount_topbar_text',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_storefront_discount_topbar_text',
	array(
		'label'           => esc_html__( 'Topbar Discount Text', 'aster-storefront' ),
		'section'         => 'aster_storefront_header_options',
		'type'            => 'text',
		'active_callback' => 'aster_storefront_is_topbar_enabled',
	)
);