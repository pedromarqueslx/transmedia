<?php
function cf_footernavigation_customizer_section ( $wp_customize ) {


    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    $wp_customize->add_section( 'ju_navigation_section', array(
        'title'			 => __( 'Webook Footer Navigation', 'webook' ),
        'priority'		 => 30,
        'panel'          => 'webook'
    ));


    $wp_customize->add_setting( 'ju_footelinkstitle_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footelinkstitle_input',
            array(
                'label'          => __( 'Footer Navigation Title', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_footelinkstitle_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu_input',
            array(
                'label'          => __( 'Footer Page Navigation Menu', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu1_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu1_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu1_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu2_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu2_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu2_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu3_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu3_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu3_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu4_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu4_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu4_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu5_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu5_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu5_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu6_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu6_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu6_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu7_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu7_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu7_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu8_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu8_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu8_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu9_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu9_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu9_handle',
                'type'           => 'dropdown-pages'
            )
        ));


    $wp_customize->add_setting( 'ju_navigationpagemenu10_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu10_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu10_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu11_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu11_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu11_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu12_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu12_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu12_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu13_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu13_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu13_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu14_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu14_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu14_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu15_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu15_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu15_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu16_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu16_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu16_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu17_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu17_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu17_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu18_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu18_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu18_handle',
                'type'           => 'dropdown-pages'
            )
        ));


    $wp_customize->add_setting( 'ju_footelinkstitle_second_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footelinkstitle_second_input',
            array(
                'label'          => __( 'Footer Navigation Title', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_footelinkstitle_second_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu19_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu19_input',
            array(
                'label'          => __( 'Footer Page Navigation 2 Menu', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu19_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu20_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu20_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu20_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu21_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu21_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu21_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu22_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu22_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu22_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu23_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu23_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu23_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu24_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu24_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu24_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu25_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu25_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu25_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu26_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu26_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu26_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu27_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu27_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu27_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu28_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu28_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu28_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu29_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu29_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu29_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu30_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu30_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu30_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu31_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu31_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu31_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu32_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu32_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu32_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu33_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu33_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu33_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu34_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu34_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu34_handle',
                'type'           => 'dropdown-pages'
            )
        ));
    $wp_customize->add_setting( 'ju_navigationpagemenu35_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu35_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu35_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu36_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu36_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu36_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu37_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu37_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu37_handle',
                'type'           => 'dropdown-pages'
            )
        ));

    $wp_customize->add_setting( 'ju_navigationpagemenu38_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_navigationpagemenu38_input',
            array(
                'label'          => __( '', 'webook' ),
                'section'        => 'ju_navigation_section',
                'settings'       => 'ju_navigationpagemenu38_handle',
                'type'           => 'dropdown-pages'
            )
        ));











}
