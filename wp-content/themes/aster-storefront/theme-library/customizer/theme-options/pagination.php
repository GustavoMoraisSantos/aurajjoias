<?php

/**
 * Pagination
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_pagination',
	array(
		'panel' => 'aster_storefront_theme_options',
		'title' => esc_html__( 'Pagination', 'aster-storefront' ),
	)
);

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'aster_storefront_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'aster-storefront' ),
			'section'  => 'aster_storefront_pagination',
			'settings' => 'aster_storefront_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'aster_storefront_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'aster_storefront_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_storefront_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'aster-storefront' ),
		'section'         => 'aster_storefront_pagination',
		'settings'        => 'aster_storefront_pagination_type',
		'active_callback' => 'aster_storefront_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'aster-storefront' ),
			'numeric' => __( 'Numeric', 'aster-storefront' ),
		),
	)
);
