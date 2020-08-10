<?php
function cf_customize_register( $wp_customize ) {
	// add wp customizer - ID title_tagline
    $wp_customize->get_section ( 'title_tagline' )->title = 'Site Identity';

	// WP customize classes - Add Panel Customizer
    $wp_customize->add_panel ( 'companyfactory', array(
		'title' => __( 'Company Factory','companyfactory' ),
		'description' => '<p>Company Factory</p>',
		'priority' => 160
	));

	cf_social_customizer_section ( $wp_customize );
	cf_misc_customizer_section ( $wp_customize );

	//echo '<pre>';
	//var_dump($wp_customize);
	//echo '</pre>';
}