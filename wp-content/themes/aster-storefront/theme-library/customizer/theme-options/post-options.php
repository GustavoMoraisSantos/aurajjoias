<?php

/**
 * Post Options
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'aster-storefront' ),
		'panel' => 'aster_storefront_theme_options',
	)
);

// Post Options - Hide Date.
$wp_customize->add_setting(
	'aster_storefront_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_date',
		array(
			'label'   => esc_html__( 'Hide Date', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Hide Author.
$wp_customize->add_setting(
	'aster_storefront_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_author',
		array(
			'label'   => esc_html__( 'Hide Author', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Hide Category.
$wp_customize->add_setting(
	'aster_storefront_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_category',
		array(
			'label'   => esc_html__( 'Hide Category', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Hide Tag.
$wp_customize->add_setting(
	'aster_storefront_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_tags',
		array(
			'label'   => esc_html__( 'Hide Tag', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'aster_storefront_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'aster-storefront' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_storefront_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'aster-storefront' ),
		'section'  => 'aster_storefront_post_options',
		'settings' => 'aster_storefront_post_related_post_label',
		'type'     => 'text',
	)
);

// Post Options - Hide Related Posts.
$wp_customize->add_setting(
	'aster_storefront_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Hide Related Posts', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);
