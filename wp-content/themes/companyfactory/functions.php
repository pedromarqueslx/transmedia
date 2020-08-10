<?php
// Load Includes
include ( get_template_directory() . '/includes/front/enqueue.php' );
// Add primary menu
include ( get_template_directory() . '/includes/setup.php' );
// Add widgets
include ( get_template_directory() . '/includes/widgets.php' );
// WP Customizer
include ( get_template_directory() . '/includes/theme-customizer.php' );
// WP Customizer Social
include ( get_template_directory() . '/includes/customizer/social.php' );
// WP Customizer Misc
include ( get_template_directory() . '/includes/customizer/misc.php' );
// WP JS Theme Customizer
//include ( get_template_directory() . '/includes/customizer/enqueue.php' );


// Enqueue Hooks API
add_action ( 'wp_enqueue_scripts', 'cf_enqueue' );
// Add primary menu
add_action ( 'after_setup_theme', 'cf_setup_theme' );
// Add widgets
add_action ( 'widgets_init', 'cf_widgets' );
// WP Customizer
add_action ( 'customize_register', 'cf_customize_register' );
// WP JS Theme Customizer for load changes without reloading page
//add_action ( 'customize_preview_init', 'cf_customize_preview_init' );
// Shortcodes



// Add class on submenu li //
function add_additional_class_on_li($classes, $item, $args) {
    if($args->add_li_class) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);



