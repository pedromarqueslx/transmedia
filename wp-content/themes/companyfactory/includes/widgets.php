<?php
function cf_widgets() {
	// Register Side Bar and add HTML
	register_sidebar(array(
		'name'			=> __( 'Company Factory Theme Side Bar', 'companyfactory' ),
		'id'			=> 'cf_sidebar',
		'description'	=> __( 'Side bar for Company Factory Theme', 'companyfactory' ),
		'before_widget'	=> '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4>',
		'after_title'	=> '</h4>'
	));
}