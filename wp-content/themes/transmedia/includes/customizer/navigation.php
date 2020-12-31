<?php
function cf_footernavigation_customizer_section ( $wp_customize ) {


    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    $wp_customize->add_section( 'ju_navigation_section', array(
        'title'			 => __( 'transmedia Footer Navigation', 'transmedia' ),
        'priority'		 => 30,
        'panel'          => 'transmedia'
    ));


    $wp_customize->add_setting( 'ju_footelinkstitle_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footelinkstitle_input',
            array(
                'label'          => __( 'Footer Navigation Title', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_footelinkstitle_handle',
                'type'           => 'text'
            )
    ));

    $wp_customize->add_setting( 'ju_navigationpagemenu_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu_input',
            array(
                'label'          => __( 'Footer Page Navigation Menu', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu1_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu1_input',
            array(
                'label'          => __( '', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu1_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu2_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu2_input',
            array(
                'label'          => __( '', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu2_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu3_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu3_input',
            array(
                'label'          => __( '', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu3_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu4_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu4_input',
            array(
                'label'          => __( '', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu4_handle',
                'type'           => 'dropdown-pages'
            )
        ));



    $wp_customize->add_setting( 'ju_footelinkstitle_second_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footelinkstitle_second_input',
            array(
                'label'          => __( 'Footer Navigation Title', 'transmedia' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_footelinkstitle_second_handle',
                'type'           => 'text'
            )
        ));

}
