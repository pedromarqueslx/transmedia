<?php
function cf_widgets() {
	// Register Side Bar and add HTML
	register_sidebar(array(
		'name'			=> __( 'webook Theme Side Bar', 'webook' ),
		'id'			=> 'cf_sidebar',
		'description'	=> __( 'Side bar for webook Theme', 'webook' ),
		'before_widget'	=> '<div id="%1$s" class="widget %2$s">',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4>',
		'after_title'	=> '</h4>'
	));
}
