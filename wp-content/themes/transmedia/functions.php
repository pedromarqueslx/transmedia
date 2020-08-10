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
    // WP Tags
    include ( get_template_directory() . '/includes/customizer/navigation.php' );
    // WP Tags
    include ( get_template_directory() . '/includes/template-tags.php' );
    // WP Icons
    include ( get_template_directory() . '/includes/icon-functions.php' );
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


    /* TODO: check what this filter is doing */
    /* WPCF7 fallback for old browser versions */
    //add_filter( 'wpcf7_support_html5_fallback', '__return_true' );


    /* TODO: check what this filter is doing */
    // Shortcodes in acf fields
    //add_filter('acf/format_value/type=textarea', 'do_shortcode');
    /*
    function my_acf_format_value( $value, $post_id, $field ) {
        // run do_shortcode on all textarea values
        $value = do_shortcode($value);
        // return
        return $value;
    }

    add_filter('acf/format_value/type=textarea', 'my_acf_format_value', 10, 3);
    */

    // Customizer Add Homepage transmedia logo
    function your_theme_customizer_setting($wp_customize) {
    // add a setting
    $wp_customize->add_setting('home_page_logo');
    // Add a control to upload the hover logo
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'home_page_logo', array(
            'label' => 'Home Transmedia Logo',
            'section' => 'title_tagline', //this is the section where the custom-logo from WordPress is
            'settings' => 'home_page_logo',
            'priority' => 8 // show it just below the custom-logo
        )));
    }

    add_action('customize_register', 'your_theme_customizer_setting');


    function get_traveldestinationmenu($atts) {
        ob_start();
        ?>
            <?php
                get_template_part('includes/front/travel-destination-menu');
            ?>
        <?php
        return ob_get_clean();
    }

    add_shortcode('traveldestinationmenu', 'get_traveldestinationmenu');


    function get_traveldestination($atts) {
        ob_start();
        ?>
            <section class="section-destination carousel slide pb-5" data-ride="carousel" id="postsCarousel">
                <a class="carousel-control-prev" href="#postsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#postsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <div class="container">
                    <div class="carousel-inner" style="overflow: initial">
                    <?php
                        get_template_part('includes/front/travel-destination');
                    ?>
                    </div>
                </div>
            </section><!-- #content end -->
        <?php
        return ob_get_clean();
    }

    add_shortcode('traveldestination', 'get_traveldestination');


    function get_stats ($atts) {
        ob_start();
        ?>
            <?php
            get_template_part('includes/front/travel-stats');
            ?>
        <?php
        return ob_get_clean();
    }

    add_shortcode('stats', 'get_stats');


    function get_travelfaqs($atts) {
        ob_start();
        ?>
        <div class="section-faqs">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    get_template_part('includes/front/travel-faqs');
                    ?>
                </div>
            </div>
        </div><!-- #content end -->
        <?php
        return ob_get_clean();
    }

    add_shortcode('travelfaqs', 'get_travelfaqs');


    function get_clientstestimonials($atts) {

        ob_start();

        ?>

        <section class="section-clients carousel slide pb-5" data-ride="carousel" id="CarouselClients">
            <a class="carousel-control-prev" href="#CarouselClients" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#CarouselClients" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="container">
                <div class="carousel-inner">
                    <?php
                    get_template_part('includes/front/clients-testimonials');
                    ?>
                </div>
            </div>
        </section><!-- #content end -->
        <?php
        return ob_get_clean();
    }

    add_shortcode('clientstestimonials', 'get_clientstestimonials');


    function get_travelblog($atts) {
        ob_start();
        ?>
        <section class="section-blog carousel slide pb-5" data-ride="carousel" id="CarouselPosts">
            <a class="carousel-control-prev" href="#CarouselPosts" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#CarouselPosts" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="container mt-n5">
                <div class="carousel-inner">
                    <?php
                    get_template_part('includes/front/travel-blog');
                    ?>
                </div>
            </div>
        </section><!-- #content end -->
        <?php
        return ob_get_clean();
    }

    add_shortcode('travelblog', 'get_travelblog');


    function get_travelproducts($atts) {
        ob_start();
        ?>
        <section class="section-products carousel slide pb-5" data-ride="carousel" id="CarouselProducts">
            <a class="carousel-control-prev" href="#CarouselProducts" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#CarouselProducts" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <div class="container mt-n5">
                <div class="carousel-inner">
                    <?php
                    get_template_part('includes/front/travel-products');
                    ?>
                </div>
            </div>
        </section><!-- #content end -->
        <?php
        return ob_get_clean();
    }

    add_shortcode('products', 'get_travelproducts');



    /*add_filter('wp_nav_menu_items', 'add_search_form', 10, 2);
    function add_search_form($items, $args) {
        if( $args->theme_location == 'primary' )
            $items .= '<li class="search"><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value="Suche" name="s" id="s" /><input type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" /></form></li>';
        return $items;
    }*/

    add_filter( 'wp_nav_menu_items','add_search_box', 10, 2 );
    function add_search_box( $items, $args ) {
        if( $args->theme_location == 'secondary' ) {
        $searchbox = '<li class="search-travel-destination-menu p-2"><h4 class="mt-3">Suche</h4><form role="search" method="get" id="searchform" action="'.home_url( '/' ).'"><input type="text" value="" name="s" id="s" class="form-control-menu-search" /><input type="submit" id="searchsubmit" class="btn btn-search-menu float-right" value="'. esc_attr__('Suchen') .'" /></form></li>';
         return $searchbox.$items; }
        else {
            return $items;
        }

    }

    // Add class on submenu li - used on transmedia main menu //
    function add_additional_class_on_li($classes, $item, $args) {
        if($args->add_li_class) {
            $classes[] = $args->add_li_class;
        }
        return $classes;
    }

    add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);


    // Add filter to primary image menu
    add_filter('wp_nav_menu_args', 'add_filter_to_menus');
    function add_filter_to_menus($args) {

        // You can test with $args['menu'], $args['menu_id'] or $args['theme_location']
        if( $args['theme_location'] == 'secondary') {
            add_filter( 'wp_setup_nav_menu_item', 'filter_menu_items' );
        }

        return $args;
    }

    // Filter menu
    function filter_menu_items($item) {

        if( $item->type == 'taxonomy') {

            // For category menu items
            $cat_base = get_option('category_base');
            if( empty($cat_base) ) {
                $cat_base = 'category';
            }

            // Get the path to the category (excluding the home and category base parts of the URL)
            $cat_path = str_replace(home_url().'/'.$cat_base, '', $item->url);

            // Get category and image ID
            $cat = get_category_by_path($cat_path, true);
            $thumb_id = get_term_meta($cat->term_id, '_term_image_id', true); // I'm using the 'Simple Term Meta' plugin to store an attachment ID as the featured image

        } else {
            // Get post and image ID
            $post_id = url_to_postid( $item->url );
            $thumb_id = get_post_thumbnail_id( $post_id );
        }

        if( !empty($thumb_id) ) {
            // Make the title just be the featured image.
            $heading = get_the_title( $post_id );

            //echo wp_get_attachment_image(get_the_ID(), array('700', '600'), "", array("class" => "img-responsive"));
            $item->title = wp_get_attachment_image( $thumb_id, "medium").'<div class="bottom-left">'.$heading.'</div>';
        }

        return $item;
    }

    // Remove filters

    add_filter('wp_nav_menu_items','remove_filter_from_menus', 10, 2);

    function remove_filter_from_menus( $nav, $args ) {
        remove_filter( 'wp_setup_nav_menu_item', 'filter_menu_items' );
        return $nav;
    }



