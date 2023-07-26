<?php

/**
 * Archive Layout
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_archive_layout',
	array(
		'title' => esc_html__( 'Archive Layout', 'aster-storefront' ),
		'panel' => 'aster_storefront_theme_options',
	)
);

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'aster_storefront_archive_column_layout',
	array(
		'default'           => 'column-3',
		'sanitize_callback' => 'aster_storefront_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_storefront_archive_column_layout',
	array(
		'label'   => esc_html__( 'Select Column Layout', 'aster-storefront' ),
		'section' => 'aster_storefront_archive_layout',
		'type'    => 'select',
		'choices' => array(
			'column-2' => __( 'Column 2', 'aster-storefront' ),
			'column-3' => __( 'Column 3', 'aster-storefront' ),
			'column-4' => __( 'Column 4', 'aster-storefront' ),
		),
	)
);
