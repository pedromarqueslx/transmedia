<?php
function cf_misc_customizer_section ( $wp_customize ) {

    // ADD SECTION
    $wp_customize->add_section( 'ju_misc_section', array(
        'title'          => __( 'Transmedia Settings', 'transmedia' ),
        'priority'       => 30,
        'panel'          => 'transmedia'
    ));

    $wp_customize->add_setting( 'ju_btn_quote_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_btn_quote_input',
            array(
                'label'          => __( 'Offerte-Anfrage Title', 'transmedia' ),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_btn_quote_handle',
                'type'           => 'text'
            )
        ));


    $wp_customize->add_setting( 'ju_btn_quote_link_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_btn_quote_link_input',
            array(
                'label'          => __( 'Offerte-Anfrage Link', 'transmedia' ),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_btn_quote_link_handle',
                'type'           => 'url'
            )
        ));

    $wp_customize->add_setting( 'ju_footer-image_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    // ADD CONTROL
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer-image_input',
        array(
            'label'          => __( 'Logo Footer Image URL', 'transmedia' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer-image_handle',
            'type'           => 'url'
        )
    ));

    $wp_customize->add_setting( 'ju_footer_copyright_text', array(
        'sanitize_callback' => 'sanitize_textarea_field',
        'default'       => 'Copyright &copy; 2020 All Rights Reserved by transmedia',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input',
        array(
            'label'          => __( 'Copyright Text', 'transmedia' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_copyright_text'
        )
    ));

    $wp_customize->add_setting( 'ju_footer_tos_page', array(
        'default'       => 0,
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input',
        array(
            'label'          => __( 'TOS Page', 'transmedia' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_tos_page',
            'type'           => 'dropdown-pages'
        )
    ));

    $wp_customize->add_setting( 'ju_footer_privacy_page', array(
        'default'       => 0,
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input',
        array(
            'label'          => __( 'Privacy Policy Page', 'transmedia' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_privacy_page',
            'type'           => 'dropdown-pages'
        )
    ));
}
