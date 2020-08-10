<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body <?php body_class ('no-transition stretched'); ?> >

    <!-- Header
    ============================================= -->
    <header>

        <nav class="navbar fixed-top">

            <div class="navbar-brand img-fluid">
                <!-- Logo
                ============================================= -->
                 <?php

                    if (has_custom_logo() ) {

                    $custom_logo_id_home = get_theme_mod( 'home_page_logo' );
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src($custom_logo_id , 'full');

                 ?>

                 <div class="transmedia-logo-white">

                     <a href="<?php echo get_home_url() ?>" class="custom-logo-link" rel="home">

                         <img src="<?php echo $custom_logo_id_home; ?>" class="custom-logo" alt="transmedia" title="transmedia">

                     </a>

                 </div>

                 <div class="Webook-logo-colors d-none">

                     <a href="<?php echo get_home_url() ?>" class="" rel="home">

                        <img src="<?php echo $image[0]; ?>" class="custom-logo" alt="transmedia" title="transmedia">

                      </a>

                  </div>

                 <?php

                } else {

                    bloginfo('name');

                }

                ?>
                <!-- #logo end -->
            </div>

            <button class="navbar-toggler-home collapsed" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                <span class="toggle-secundary-label"></span>
            </button>

            <div id="mainMenu" class="collapse navbar-primary-collapse shadow">

                <div class="container">

                    <div class="row mt-5">

                        <div class="col text-center">

                            <?php

                            if ( has_nav_menu ('primary') ) {
                                wp_nav_menu (array(
                                    'theme_location'	=> 'primary',
                                    'container'			=> 'false',
                                    'menu_class'		=> 'navbar-nav',
                                    'fallback_cb'		=> 'false',
                                    'depth'				=> 1,
                                    'add_li_class'  => 'nav-item'
                                ));
                            }

                            ?>

                        </div>

                    </div>

                    <hr>

                    <div class="row mt-5">

                        <div class="col-sm-12 col-md-4 text-center text-md-left">

                            <a href="">DE</a> <a href="">FR</a> <a href="">EN</a>

                        </div>

                        <div class="col-sm-12 col-md-8 p-1">

                            <ul class="social-links text-center text-md-right">
                                <?php
                                if( get_theme_mod( 'ju_facebook_link_input_handle' ) ){
                                    ?>
                                    <li><a href="https://facebook.com/<?php echo get_theme_mod( 'ju_facebook_link_input_handle' ); ?>" target="_blank" title="Facebook"><div class="si-menu-facebook"></div></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if( get_theme_mod( 'ju_instagram_handle' ) ){
                                    ?>
                                    <li><a href="https://instagram.com/<?php echo get_theme_mod( 'ju_instagram_handle' ); ?>" target="_blank" title="Instagram"><div class="si-menu-instagram"></div></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if( get_theme_mod( 'ju_linkedin_handle' ) ){
                                    ?>
                                    <li><a href="https://linkedin.com/<?php echo get_theme_mod( 'ju_linkedin_handle' ); ?>" target="_blank" title="LinkedIn"><div class="si-menu-linkedin"></div></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if( get_theme_mod( 'ju_youtube_handle' ) ){
                                    ?>
                                    <li><a href="https://youtube.com/<?php echo get_theme_mod( 'ju_youtube_handle' ); ?>" target="_blank" title="Youtube"><div class="si-menu-youtube"></div></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if( get_theme_mod( 'ju_twitter_handle' ) ){
                                    ?>
                                    <li><a href="https://twitter.com/<?php echo get_theme_mod( 'ju_twitter_handle' ); ?>" target="_blank" title="Twitter"><div class="si-menu-twitter"></div></a></li>
                                    <?php
                                }
                                ?>
                                <?php
                                if( get_theme_mod( 'ju_pinterest_handle' ) ){
                                    ?>
                                    <li><a href="https://www.pinterest.com/<?php echo get_theme_mod( 'ju_pinterest_handle' ); ?>" target="_blank" title="Pinterest"><div class="si-menu-pinterest"></div></a></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>

                    </div>

                </div>

            </div>

        </nav>

    </header><!-- #header end -->

    <script>

        jQuery(window).scroll(function() {
            let scroll = jQuery(window).scrollTop();
            if (scroll >= 100) {
                jQuery(".navbar").addClass("primary-menu-bg-color shadow");
                jQuery(".navbar button").removeClass("navbar-toggler-home");
                jQuery(".navbar button").addClass("navbar-toggler");
                jQuery(".navbar button .toggle-secundary-label").addClass("toggle-primary-label");
                jQuery(".Webook-logo-white").addClass("d-none");
                jQuery(".Webook-logo-colors").removeClass("d-none");
            } else {
                jQuery(".navbar").removeClass("primary-menu-bg-color shadow");
                jQuery(".navbar button").removeClass("navbar-toggler");
                jQuery(".navbar button").addClass("navbar-toggler-home");
                jQuery(".Webook-logo-white").removeClass("d-none");
                jQuery(".Webook-logo-colors").addClass("d-none");
            }
        });

    </script>
