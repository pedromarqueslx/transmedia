<?php
function cf_misc_customizer_section ( $wp_customize ) {

    $wp_customize->add_setting( 'ju_footer-image_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_footer_copyright_text', array(
        'default'       => 'Copyright &copy; 2019 All Rights Reserved by Company Factory',
        ));

    $wp_customize->add_setting( 'ju_footer_tos_page', array(
        'default'       => 0,
        ));

    $wp_customize->add_setting( 'ju_footer_privacy_page', array(
        'default'       => 0,
        ));                    

    $wp_customize->add_setting( 'ju_show_header_popular_posts_widget', array(
        'default'                   =>  false
    ));

    $wp_customize->add_setting( 'ju_popular_posts_widget_title', array(
        'default'                   =>  'Breaking News'
    ));


    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    // ADD SECTION
    $wp_customize->add_section( 'ju_misc_section', array(
        'title'          => __( 'Company Factory Settings', 'companyfactory' ),
        'priority'       => 30,
        'panel'          => 'companyfactory'
        ));
    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //

    // ADD CONTROL
    $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'ju_footer-image_input',
            array(
                'label'          => __( 'Logo Footer Image URL', 'companyfactorty' ),
                'section'        => 'ju_misc_section',
                'settings'       => 'ju_footer-image_handle',
               'type'           => 'url'
            )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_copyright_text_input',
        array(
            'label'          => __( 'Copyright Text', 'companyfactory' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_copyright_text'
        ) 
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_tos_page_input',
        array(
            'label'          => __( 'TOS Page', 'companyfactory' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_tos_page',
            'type'           => 'dropdown-pages'
        )
    ));   
    
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'ju_footer_privacy_page_input',
        array(
            'label'          => __( 'Privacy Policy Page', 'companyfactory' ),
            'section'        => 'ju_misc_section',
            'settings'       => 'ju_footer_privacy_page',
            'type'           => 'dropdown-pages'
        )          
    ));

}