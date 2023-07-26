<?php

/**
 * Footer Options
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_footer_options',
	array(
		'panel' => 'aster_storefront_theme_options',
		'title' => esc_html__( 'Footer Options', 'aster-storefront' ),
	)
);

$copyright_default = sprintf( esc_html_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL', 'aster-storefront' ), '[the-year]', '[site-link]' );
$wp_customize->add_setting(
	'aster_storefront_footer_copyright_text',
	array(
		'default'           => $copyright_default,
		'sanitize_callback' => 'wp_kses_post',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'aster_storefront_footer_copyright_text',
	array(
		'label'    => esc_html__( 'Copyright Text', 'aster-storefront' ),
		'section'  => 'aster_storefront_footer_options',
		'settings' => 'aster_storefront_footer_copyright_text',
		'type'     => 'textarea',
	)
);

// Footer Options - Scroll Top.
$wp_customize->add_setting(
	'aster_storefront_scroll_top',
	array(
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_scroll_top',
		array(
			'label'   => esc_html__( 'Enable Scroll Top Button', 'aster-storefront' ),
			'section' => 'aster_storefront_footer_options',
		)
	)
);
