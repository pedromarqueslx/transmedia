<!-- Footer
============================================= -->
<footer class="pt-md-5 primary-footer-background-color mt-0 pt-4">

    <div class="container">

        <div class="row mb-5">

            <div class="col-sm-12 col-md-3">

                <h3>
                    <?php
                    if( get_theme_mod( 'ju_footeAddressTitle_handle' ) ){
                        ?><?php echo get_theme_mod( 'ju_footeAddressTitle_handle' ); ?>
                        <?php
                    }
                    ?>
                </h3>

                <ul class="list-unstyled">
                    <?php
                    if( get_theme_mod( 'ju_address_handle' ) ){
                        ?><li class="small"><?php echo get_theme_mod( 'ju_address_handle' ); ?></li>
                        <?php
                    }
                    ?>
                    <?php
                    if( get_theme_mod( 'ju_phone_handle' ) ){
                        ?><li class="small"><a href="tel:<?php echo get_theme_mod( 'ju_phone_handle' ); ?>" class=""><?php echo get_theme_mod( 'ju_phone_handle' ); ?></a></li>
                        <?php
                    }
                    ?>
                    <?php
                    if( get_theme_mod( 'ju_email_handle' ) ){
                        ?><li class="small"><a href="mailto:<?php echo get_theme_mod( 'ju_email_handle' ); ?>" class=""><?php echo get_theme_mod( 'ju_email_handle' ); ?></a></li>
                        <?php
                    }
                    ?>

                </ul>

            </div>

            <div class="col-sm-12 col-md-3">

                <h3>
                    <?php
                    if( get_theme_mod( 'ju_footelinkstitle_handle' ) ){
                        ?><?php echo get_theme_mod( 'ju_footelinkstitle_handle' ); ?>
                        <?php
                    }
                    ?>
                </h3>

                <?php
                if ( has_nav_menu ('secondary') ) {
                    wp_nav_menu (array(
                        'theme_location'	=> 'secondary',
                        'container'			=> 'true',
                        'fallback_cb'		=> 'false',
                        // no dropdown menus depth 1
                        'depth'				=> 1,
                        'menu_class'        => 'list-unstyled',
                        'add_li_class'      => 'text-muted small'
                    ));
                }
                ?>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <hr>

    </div>

    <div class="secundary-footer-background-color">

        <div class="container">

            <div class="row">

                <div class="col-xs-3 col-sm-3 col-md-6">

			        <?php
			        if ( get_theme_mod ( 'ju_footer-image_handle' )) {
				        ?><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_theme_mod( 'ju_footer-image_handle' ); ?>" alt="Logo Company Factory" height="36px" width="120px"></a><?php
			        }
			        ?>

                </div>

                <div class="col-xs-3 col-sm-6 col-md-6">

                    <ul class="float-right social-links">
			            <?php
			            if( get_theme_mod( 'ju_linkedin_handle' ) ){
				            ?><li><a href="https://linkedin.com/<?php echo get_theme_mod( 'ju_linkedin_handle' ); ?>" target="_blank"><span class="ts-icon p-2"><i class="icon-linkedin"></i></span></a></li>
				            <?php
			            }
			            ?>
			            <?php
			            if( get_theme_mod( 'ju_facebook_link_input_handle' ) ){
				            ?><li><a href="https://facebook.com/<?php echo get_theme_mod( 'ju_facebook_link_input_handle' ); ?>" target="_blank"><span class="ts-icon p-2"><i class="icon-facebook"></i></span></a></li>
				            <?php
			            }
			            ?>
			            <?php
			            if( get_theme_mod( 'ju_instagram_handle' ) ){
				            ?><li><a href="https://instagram.com/<?php echo get_theme_mod( 'ju_instagram_handle' ); ?>" target="_blank"><span class="ts-icon p-2"><i class="icon-instagram2"></i></span></a></li>
				            <?php
			            }
			            ?>
                    </ul>

                </div>

                <div class="col-12 mt-0">

                    <p class="small pt-1 pb-3">
		                <?php
		                if (get_theme_mod( 'ju_footer_copyright_text' )) {
			                ?><?php echo get_theme_mod( 'ju_footer_copyright_text' ); ?><?php
		                }
		                ?>
                    </p>

                </div>

            </div>

        </div>

    </div>

</footer>

<!-- Go To Top
============================================= -->
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="<?php echo get_template_directory_uri(); ?>/images/to-top-arrow.svg" alt="Back to Top"></button>

</body>

<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("myBtn").style.display = "block";
        } else {
            document.getElementById("myBtn").style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

<?php wp_footer(); ?>

</html>