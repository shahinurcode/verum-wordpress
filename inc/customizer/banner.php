<?php
if( ! class_exists('Kirki')){
	return;
}
//Section for :: Banner Settings
Kirki::add_section( 'verum_banner_settings_section', array(
    'title'          => esc_html__( 'Banner Settings', 'kirki' ),
    'description'    => esc_html__( 'Option for Banner', 'kirki' ),
    'panel'          => 'verum_option_panel',
    'priority'       => 160,
) );
Kirki::add_field( 'verum_banner_display_option', [
	'type'        => 'switch',
	'settings'    => 'verum_banner_switcher',
	'label'       => esc_html__( 'Display Banner', 'kirki' ),
	'section'     => 'verum_banner_settings_section',
	'default'     => '1',
    'priority'    => 10,
	'choices'     => [
		'on'  => esc_html__( 'Show', 'verum' ),
		'off' => esc_html__( 'Hide', 'verum' ),
	],
] );
Kirki::add_field( 'verum_banner_option', [
	'type'        => 'select',
	'settings'    => 'verum_banner',
	'label'       => esc_html__( 'Select Banner', 'kirki' ),
	'section'     => 'verum_banner_settings_section',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => [
		'1' => esc_html__( 'Banner 1', 'verum' ),
		'2' => esc_html__( 'Banner 2', 'verum' ),
		'3' => esc_html__( 'Banner 3', 'verum' ),
    ],
    'active_callback'   => array(
        array(
            'setting'  => 'verum_banner_switcher',
            'value'     => '1',
            'operator'  => '==',
        )
    )
] );


//Section for :: Banner Settings
Kirki::add_section( 'verum_helper_settings_test', array(
    'title'          => esc_html__( 'Kirki Helper Options', 'kirki' ),
    'description'    => esc_html__( 'Option for Helper', 'kirki' ),
    'panel'          => 'verum_option_panel',
    'priority'       => 160,
) );

Kirki::add_field( 'verum_theme_option', array(
	'type'     => '',
	'settings' => 'verum_taxonomy',
	'label'    => esc_html__( 'This is the label', 'kirki' ),
	'section'  => 'verum_helper_settings_test',
	'default'  => 'option-1',
	'priority' => 10,
	'multiple' => 1,
	'choices'  => Kirki_Helper::get_terms(array('taxonomy' => 'category')),
) );