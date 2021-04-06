<?php

if( !class_exists('Kirki')){
    return;
}

// Kirki Configuration for verum 
Kirki::add_config( 'verum_theme_option', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


Kirki::add_panel( 'verum_option_panel', array(
    'priority'    => 1,
    'title'       => esc_html__( 'Verum Theme Options', 'verum' ),
    'description' => esc_html__( 'Theme Option for verum theme', 'verum' ),
) );
// Section for:: Layout Control
Kirki::add_section( 'verum_layout_control_section', array(
    'title'          => esc_html__( 'Layout Settings', 'kirki' ),
    'description'    => esc_html__( 'Layout Settings for Pages', 'kirki' ),
    'panel'          => 'verum_option_panel',
    'priority'       => 160,
) );
Kirki::add_field( 'verum_sidebar_option', [
	'type'     => 'select',
	'settings' => 'layout_sidebar_control',
	'label'    => esc_html__( 'Sidebar Control', 'verum' ),
	'section'  => 'verum_layout_control_section',
    'placeholder' => esc_html__( 'Select an option...', 'verum' ),
    'priority' => 10,
	'choices'     => [
		'no-sidebar' => esc_html__( 'No Sidebar', 'verum' ),
		'left-sidebar' => esc_html__( 'Left Sidebar', 'verum' ),
		'right-sidebar' => esc_html__( 'Right Sidebar', 'verum' ),
    ],
    'default'  => 'right-sidebar',
] );

//Section for :: Search Settings
Kirki::add_section( 'verum_search_settings_section', array(
    'title'          => esc_html__( 'Search Settings', 'kirki' ),
    'description'    => esc_html__( 'Option for Search', 'kirki' ),
    'panel'          => 'verum_option_panel',
    'priority'       => 160,
) );
Kirki::add_field( 'verum_choose_post_option', [
	'type'        => 'select',
	'settings'    => 'verum_post_source',
	'label'       => esc_html__( 'Post Source Options', 'kirki' ),
	'section'     => 'verum_search_settings_section',
	'default'     => 'latest',
	'priority'    => 10,
	'choices'     => [
		'latest' => esc_html__( 'Latest Post', 'kirki' ),
		'featured' => esc_html__( 'Featured Post', 'kirki' ),
	],
] );
Kirki::add_field( 'verum_search_featured_post', [
	'type'        => 'repeater',
	'label'       => esc_html__( 'Featured Post', 'kirki' ),
	'section'     => 'verum_search_settings_section',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
        'value' =>  esc_html__( 'Your Custom Value.', 'kirki' ),
        'field' => 'post'
	],
	'button_label' => esc_html__('Add New Post', 'kirki' ),
	'settings'     => 'featured_post',
	'fields' => [
		'post' => [
			'type'        => 'select',
			'label'       => esc_html__( 'Choose Post', 'kirki' ),
            'description' => esc_html__( 'Choose Post from the list', 'kirki' ),
            'choices'     => Kirki_Helper::get_posts(array(
                array(
                    'posts_per_page'    => 4,
                    'post_type'         => 'post',    
                )
            )),
        ],
    ],
    'active_callback'   => array(
        array(
            'setting'  => 'verum_post_source',
            'value'     => 'featured',
            'operator'  => '==',
        )
    )
] );