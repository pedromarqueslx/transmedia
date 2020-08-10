<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<!--<link rel="icon" type="image/png" href="images/favicon.png">-->

	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />

</head>

<!-- body_class for add CSS classes to body -->
<body <?php body_class ('no-transition stretched'); ?> >

<!-- Document Wrapper
============================================= -->
<div id="wrapper">

	<!-- Header
    ============================================= -->

    <header>

        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white border-bottom box-shadow ">

            <div class="">

                <!-- Logo
                ============================================= -->
		        <?php

		        if( has_custom_logo() ){
			        the_custom_logo();
		        }else{
			        ?><?php bloginfo('name'); ?><?php
		        }
		        ?>
                <!-- #logo end -->

            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">

	            <?php
	            if ( has_nav_menu ('primary') ) {
		            wp_nav_menu (array(
			            'theme_location'	=> 'primary',
			            'container'			=> 'false',
			            'menu_class'		=> 'navbar-nav ml-auto',
			            'fallback_cb'		=> 'false',
			            // number of submenus
			            'depth'				=> 1,
			            'add_li_class'      => 'nav-item'
		            ));
	            }
	            ?>

            </div>

        </nav>

    </header>