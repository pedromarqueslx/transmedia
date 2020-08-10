<?php
function cf_social_customizer_section ( $wp_customize ) {

    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    $wp_customize->add_section( 'ju_social_section', array(
        'title'			 => __( 'Transmedia Contact and Social', 'transmedia' ),
        'priority'		 => 30,
        'panel'          => 'transmedia'
    ));
    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //

    $wp_customize->add_setting( 'ju_rateus_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_aboutus_input',
            array(
                'label'          => __( 'Footer Rate Title', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_rateus_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_footeAddressTitle_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_footeAddressTitle_input',
            array(
                'label'          => __( 'Footer Address Title', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_footeAddressTitle_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_google_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_google_input',
            array(
                'label'          => __( 'Google Rate Us', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_google_handle',
                'type'           => 'text'
            )
        ));

	$wp_customize->add_setting( 'ju_facebook_handle', array(
		'default' 		=> '',
		));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_facebook_input',
            array(
                'label'          => __( 'Facebook Rate Us', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_facebook_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_linkedin_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_linkedin_input',
            array(
                'label'          => __( 'LinkedIn', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_linkedin_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_facebook_link_input_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_facebook_link_input',
            array(
                'label'          => __( 'Facebook', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_facebook_link_input_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_instagram_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_instagram_input',
            array(
                'label'          => __( 'Instagram', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_instagram_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_twitter_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_twitter_input',
            array(
                'label'          => __( 'Twitter', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_twitter_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_youtube_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_youtube_input',
            array(
                'label'          => __( 'Youtube', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_youtube_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_pinterest_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_pinterest_input',
            array(
                'label'          => __( 'Pinterest', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_pinterest_handle',
                'type'           => 'text'
            )
        ));

	$wp_customize->add_setting( 'ju_phone_handle', array(
		'default' 		=> '',
		));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_phone_input',
            array(
                'label'          => __( 'Phone', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_phone_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_address_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_address_input',
            array(
                'label'          => __( 'Address', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_address_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_email_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_email_input',
            array(
                'label'          => __( 'E-mail', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_email_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_working_hours_handle', array(
        'default' 		=> '',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_email_input',
            array(
                'label'          => __( 'Working Hours', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_working_hours_handle',
                'type'           => 'textarea'
            )
        ));

}
