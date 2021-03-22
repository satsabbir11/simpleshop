<?php
define('SIMPLESHOP_CUSTOMIZER_CONFIG_ID','simpleshop_customizer_settings');
define('SIMPLESHOP_CUSTOMIZER_PANEL_ID','simpleshop_customizer_panel');

if(class_exists('kirki'))
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
        'title'            => esc_html__( 'Homepage Settings', 'simpleshop' ),
        'panel'            => SIMPLESHOP_CUSTOMIZER_PANEL_ID,
        'priority'         => 160,
        'active_callback'  => function(){
                return is_page_template('page-templates/homepage.php');
            }
    ) );
    
    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//1
        'type'        => 'switch',
        'settings'    => 'simpleshop_homepage_display_categories',
        'label'       => esc_html__( 'Display Categories Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//2
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_categories_title',
        'label'    => esc_html__( 'Categories Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Shop By Category', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_categories',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    
    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//3
        'type'        => 'switch',
        'settings'    => 'simpleshop_homepage_display_product',
        'label'       => esc_html__( 'Display New Arrival Product Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//4
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_product_title',
        'label'    => esc_html__( 'New Arrival Product Title Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'New Arrival', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_product',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//5
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_product_subtitle',
        'label'    => esc_html__( 'New Arrival Product Sub-title Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'All New product here', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_product',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//6
        'type'        => 'switch',
        'settings'    => 'simpleshop_homepage_display_promo',
        'label'       => esc_html__( 'Display Promo Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//7
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_promo_title',
        'label'    => esc_html__( 'Promo Title Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Sale', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_promo',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//8
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_promo_sub-title',
        'label'    => esc_html__( 'Promo Sub Title Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Up to 50% off', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_promo',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//9
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_promo_link',
        'label'    => esc_html__( 'Promo Link Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'in store and online', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_promo',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    // Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [
    //     'type'     => 'link',
    //     'settings' => 'simpleshop_homepage_promo_link',
    //     'label'    => __( 'Promo Link Control', 'simpleshop' ),
    //     'section'  => 'simpleshop_homepage',
    //     'default'  => 'http://localhost/satkora',
    //     'priority' => 10,
    // ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//10
        'type'        => 'switch',
        'settings'    => 'simpleshop_homepage_display_popular',
        'label'       => esc_html__( 'Display Popular Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//11
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_popular_title',
        'label'    => esc_html__( 'Popular Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Popular Products', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_popular',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//12
        'type'     => 'switch',
        'settings'    => 'simpleshop_homepage_display_offer',
        'label'       => esc_html__( 'Display Offer Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//13
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_offer1',
        'label'    => esc_html__( 'Offer1 Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Free Shipping', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_offer',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//14
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_offer1_description',
        'label'    => esc_html__( 'Offer1 Description Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'On all order over $39.00', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_offer',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//15
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_offer2',
        'label'    => esc_html__( 'Offer2 Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( '30 Days Return', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_offer',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//16
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_offer2_description',
        'label'    => esc_html__( 'Offer2 Description Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Money back Guarantee', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_offer',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );
    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//17
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_offer3',
        'label'    => esc_html__( 'Offer3 Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Secure Checkout', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_offer',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//18
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_offer3_description',
        'label'    => esc_html__( 'Offer3 Description Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( '100% Protected by paypal', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_offer',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//19
        'type'        => 'switch',
        'settings'    => 'simpleshop_homepage_display_flickr',
        'label'       => esc_html__( 'Display Flickr Section', 'simpleshop' ),
        'section'     => 'simpleshop_homepage',
        'default'     => '1',
        'priority'    => 10,
        'choices'     => [
            'on'  => esc_html__( 'Display', 'simpleshop' ),
            'off' => esc_html__( 'Hide', 'simpleshop' ),
        ],
    ] );

    Kirki::add_field( SIMPLESHOP_CUSTOMIZER_CONFIG_ID, [//20
        'type'     => 'text',
        'settings' => 'simpleshop_homepage_flickr_title',
        'label'    => esc_html__( 'Flickr Text Control', 'simpleshop' ),
        'section'  => 'simpleshop_homepage',
        'default'  => esc_html__( 'Simple Shop on Flickr', 'simpleshop' ),
        'priority' => 10,
        'active_callback' => [
            [
                'setting'  => 'simpleshop_homepage_display_flickr',
                'operator' => '==',
                'value'    => true,
            ]
         ],
    ] );
}

?>