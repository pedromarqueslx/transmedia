<?php
function cf_social_customizer_section ( $wp_customize ) {

    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //
    $wp_customize->add_section( 'ju_social_section', array(
        'title'			 => __( 'Transmedia Contact and Social', 'transmedia' ),
        'priority'		 => 30,
        'panel'          => 'transmedia'
    ));
    // ::::::::::::::::::::: ADD SECTION :::::::::::::::::::::::::::: //


    $wp_customize->add_setting( 'ju_footeAddressTitle_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
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


    $wp_customize->add_setting( 'ju_linkedin_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
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

    $wp_customize->add_setting( 'ju_address_name_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_address_name_input',
            array(
                'label'          => __( 'Address Name', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_address_name_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_address_online_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_address_online_input',
            array(
                'label'          => __( 'URL', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_address_online_handle',
                'type'           => 'url'
            )
        ));


    $wp_customize->add_setting( 'ju_address_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
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

    $wp_customize->add_setting( 'ju_address_postal_code_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_address_postal_code_input',
            array(
                'label'          => __( 'Postal Code', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_address_postal_code_handle',
                'type'           => 'text'
            )
        ));


    $wp_customize->add_setting( 'ju_email_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
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
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_working_hours_input',
            array(
                'label'          => __( 'Working Hours', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_working_hours_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_working_hours_week_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_working_hours_week_input',
            array(
                'label'          => __( 'Week Hours', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_working_hours_week_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_working_hours_saturday_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_working_hours_saturday_input',
            array(
                'label'          => __( 'Saturday Hours', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_working_hours_saturday_handle',
                'type'           => 'text'
            )
        ));

    $wp_customize->add_setting( 'ju_working_hours_sunday_handle', array(
        'default' 		=> '',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,
            'ju_working_hours_sunday_input',
            array(
                'label'          => __( 'Sunday Hours', 'transmedia' ),
                'section'        => 'ju_social_section',
                'settings'       => 'ju_working_hours_sunday_handle',
                'type'           => 'text'
            )
        ));

}
