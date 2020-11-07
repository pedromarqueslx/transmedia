<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<!-- body_class for add CSS classes to body -->
<body <?php body_class ('no-transition stretched'); ?> >

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

    <!-- Header
    ============================================= -->
    <header>

        <nav class="navbar fixed-top bg-light">

            <div class="container">

                <div class="navbar-brand">
                <!-- Logo
                ============================================= -->
                <?php

                    if (has_custom_logo() ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $image = wp_get_attachment_image_src($custom_logo_id , 'full');
                    $image_alt = get_post_meta($custom_logo_id, '_wp_attachment_image_alt', true);
                    $image_title = get_the_title($custom_logo_id);
                    ?>

                    <a href="<?php echo get_home_url() ?>" class="" rel="home">

                        <img src="<?php echo $image[0]; ?>" class="custom-logo" alt="<?php echo $image_alt ?>" title="<?php echo $image_title ?>">

                    </a>

                <?php //the_custom_logo();

                } else {

                    bloginfo('name');

                }

                ?>
                <!-- #logo end -->

                </div>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar top-bar"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                    <span class="toggle-primary-label"></span>
                </button>

            </div>

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

                        <div class="col-sm-12 col-md-4">

                            <a href="">DE</a> <a href="">FR</a> <a href="">EN</a>

                        </div>

                        <div class="col-sm-12 col-md-8 p-1">

                            <ul class="social-links float-right">
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


