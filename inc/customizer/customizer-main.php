<?php
define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('Kirki'))
{
    Kirki::add_config( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, array(
        'capability'    => 'edit_theme_options',
        'option_type'   => 'theme_mod',
    ) );
    Kirki::add_panel( SIMPLESHOP_CUSTOMIZER_PANEL_ID, array(
        'priority'    => 240,
        'title'       => esc_html__( 'SimpleShop', 'simpleshop' ),
        'description' => esc_html__( 'SimpleShop Settings', 'simpleshop' ),
    ) );
    Kirki::add_section( 'simpleshop_homepage', array(
        'title'            => esc_html__( 'Homeage Settings', 'kirki' ),
        'panel'            => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
        'priority'         => 160,
        'active_callback'  => function(){
                return is_page_template('page-templates/homepage.php');
            }
    ) );
    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'        => 'switch',
        'settings'    => 'switch_setting',
        'label'       => esc_html__( 'This is the label', 'kirki' ),
        'section'     => 'section_id',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Enable', 'kirki' ),
            'off' => esc_html__( 'Disable', 'kirki' ),
        ],
    ] );
    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
        'type'     => 'text',
        'settings' => 'text_setting',
        'label'    => esc_html__( 'Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'This is a default value', 'simpleshop' ),
        'priority' => 10,
    ] );
}

?>