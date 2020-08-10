<?php
function cf_misc_customizer_section ( $wp_customize ) {

    // ADD SECTION
    $wp_customize->add_section( 'ju_misc_section', array(
        'title'          => __( 'Webook Settings', 'webook' ),
        'priority'       => 30,
        'panel'          => 'webook'
    ));

    $wp_customize->add_setting( 'ju_btn_quote_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_btn_quote_input',
            array(
                'label'          => __( 'Offerte-Anfrage Title', 'webook' ),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_btn_quote_handle',
                'type'           => 'text'
            )
        ));


    $wp_customize->add_setting( 'ju_btn_quote_link_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_btn_quote_link_input',
            array(
                'label'          => __( 'Offerte-Anfrage Link', 'webook' ),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_btn_quote_link_handle',
                'type'           => 'url'
            )
        ));

    $wp_customize->add_setting( 'ju_footer-image_handle', array(
        'default' 		=> '',
    ));
    // ADD CONTROL
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer-image_input',
        array(
            'label'          => __( 'Logo Footer Image URL', 'webook' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer-image_handle',
            'type'           => 'url'
        )
    ));

    $wp_customize->add_setting( 'ju_footer_copyright_text', array(
        'default'       => 'Copyright &copy; 2019 All Rights Reserved by webook',
        ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input',
        array(
            'label'          => __( 'Copyright Text', 'webook' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_copyright_text'
        )
    ));

    $wp_customize->add_setting( 'ju_footer_tos_page', array(
        'default'       => 0,
        ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input',
        array(
            'label'          => __( 'TOS Page', 'webook' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_tos_page',
            'type'           => 'dropdown-pages'
        )
    ));

    $wp_customize->add_setting( 'ju_footer_privacy_page', array(
        'default'       => 0,
        ));
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input',
        array(
            'label'          => __( 'Privacy Policy Page', 'webook' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_privacy_page',
            'type'           => 'dropdown-pages'
        )
    ));











}
