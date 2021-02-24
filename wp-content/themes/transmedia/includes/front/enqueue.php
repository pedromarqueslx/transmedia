<?php
function cf_enqueue () {
	wp_register_style( 'cf_bootstrap4', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_register_style( 'cf_style', get_template_directory_uri() . '/assets/css/style.css' );

    wp_enqueue_style( 'cf_bootstrap4' );
    wp_enqueue_style( 'cf_style' );

    wp_register_script( 'cf_bootstrap_js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), false, true );

    wp_enqueue_script( 'cf_bootstrap_js' );
}

