<?php
function cf_social_customizer_section ( $wp_customize ) {

    $wp_customize->add_setting( 'ju_footelinkstitle_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_footeAddressTitle_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_linkedin_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_facebook_link_input_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_instagram_handle', array(
        'default' 		=> '',
    ));

	$wp_customize->add_setting( 'ju_phone_handle', array(
		'default' 		=> '',
		));

    $wp_customize->add_setting( 'ju_address_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_setting( 'ju_email_handle', array(
        'default' 		=> '',
    ));


    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
	$wp_customize->add_section( 'ju_social_section', array(
		'title'			 => __( 'Company Factory Social', 'companyfactorty' ),
		'priority'		 => 30,
        'panel'          => 'companyfactory'
		));
    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //

    // ADD CONTROL
    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footeAddressTitle_input',
            array(
                'label'          => __( 'Footer Address Title', 'companyfactorty' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_footeAddressTitle_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footelinkstitle_input',
            array(
                'label'          => __( 'Footer Links Title', 'companyfactorty' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_footelinkstitle_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_linkedin_input',
            array(
                'label'          => __( 'LinkedIn', 'companyfactorty' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_linkedin_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_facebook_link_input',
            array(
                'label'          => __( 'Facebook', 'companyfactorty' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_facebook_link_input_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_instagram_input',
            array(
                'label'          => __( 'Instagram', 'companyfactorty' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_instagram_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_address_input',
            array(
                'label'          => __( 'Address', 'companyfactorty' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_address_handle',
                'type'           => 'text'
            )
        ));

	$wp_customize->add_control(
		new WP_Customize_Control(
        $wp_customize,
        'ju_email_input',
        array(
            'label'          => __( 'E-mail', 'companyfactorty' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_email_handle',
            'type'           => 'text'
        )
    ));

	$wp_customize->add_control(
		new WP_Customize_Control(
        $wp_customize,
        'ju_phone_input',
        array(
            'label'          => __( 'Phone', 'companyfactorty' ),
            'section'        => 'ju_social_section',
            'settings'       => 'ju_phone_handle',
            'type'           => 'text'
        )
    ));

}