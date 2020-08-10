<?php
function cf_enqueue () {
	//wp_register_style( 'cf_google_fonts_sourcesans', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet' );
	wp_register_style( 'cf_datatables', 'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' );
	wp_register_style( 'cf_bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );

	wp_register_style( 'cf_style', get_template_directory_uri() . '/assets/css/style.css' );
	wp_register_style( 'cf_font_icons', get_template_directory_uri() . '/assets/css/font-icons.css' );

	//wp_enqueue_style( 'cf_google_fonts_sourcesans' );
	wp_enqueue_style( 'cf_datatables' );
	wp_enqueue_style( 'cf_bootstrap4' );
    wp_enqueue_style( 'cf_style' );
	wp_enqueue_style( 'cf_font_icons' );

	wp_register_script( 'cf_datatables_js', 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array(), false, true );
    //wp_register_script( 'cf_modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array(), false, true );
	//wp_register_script( 'cf_main', get_template_directory_uri().'/assets/js/main.js', array(), false, true );
    //wp_register_script( 'cf_bootstrap_popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), false, true );
	//wp_register_script( 'cf_bootstrap_js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), false, true );
    //wp_register_script( 'cf_chart_js', 'https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js', array(), false, false );
    //wp_register_script( 'cf_inview_js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inview/1.0.0/jquery.inview.js', array(), false, false );

	wp_enqueue_script( 'cf_datatables_js' );
    //wp_enqueue_script( 'jquery' );
    //wp_enqueue_script( 'cf_main' );
	//wp_enqueue_script( 'cf_bootstrap_popper' );
	//wp_enqueue_script( 'cf_bootstrap_js' );
    //wp_enqueue_script( 'cf_chart_js' );
    //wp_enqueue_script( 'cf_inview_js' );
	//wp_enqueue_script( 'cf_modernizr' );
}