<!-- Footer
============================================= -->
<footer>

    <div class="secundary-footer-background-color">

        <div class="container-fluid">

            <div class="row">

                <div class="col-sm-12 col-md-4 p-5">

                    <h5 class="pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_footelinkstitle_handle' ) ){
                            ?><?php echo esc_html (get_theme_mod( 'ju_footelinkstitle_handle' )); ?>
                            <?php
                        }
                        ?>
                    </h5>

                    <ul class="list-unstyled text-small pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu1_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu1_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu1_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu1_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu2_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu2_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu2_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu2_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu3_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu3_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu3_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu3_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu4_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu4_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu4_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu4_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu5_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu5_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu5_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu5_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                    </ul>

                </div>

                <div class="col-sm-12 col-md-4 p-5">

                    <h5 class="pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_footelinkstitle_second_handle' ) ){
                            ?><?php echo esc_html (get_theme_mod( 'ju_footelinkstitle_second_handle' )); ?>
                            <?php
                        }
                        ?>
                    </h5>

                    <?php
                    if( get_theme_mod( 'ju_address_name_handle' ) ) {
                        ?>
                        <div class="row">
                            <div class="col-1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/location.svg" width="14px"></div>
                            <div class="col-10">
                                <p class="pl-0 pl-md-2"><?php echo esc_html (get_theme_mod( 'ju_address_name_handle' )); ?><br>
                                    <a href="https://www.<?php echo esc_html (get_theme_mod( 'ju_address_online_handle' )); ?>" title="<?php echo esc_html (get_theme_mod( 'ju_address_online_handle' )); ?>"><?php echo esc_html (get_theme_mod( 'ju_address_online_handle' )); ?></a><br>
                                    <?php echo esc_html (get_theme_mod( 'ju_address_handle' )); ?><br>
                                    <?php echo esc_html (get_theme_mod( 'ju_address_postal_code_handle' )); ?><br>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>

                <div class="col-sm-12 col-md-4 p-5">

                    <h5 class="pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_footeAddressTitle_handle' ) ){
                            ?><?php echo esc_html (get_theme_mod( 'ju_footeAddressTitle_handle' )); ?>
                            <?php
                        }
                        ?>
                    </h5>


                    <?php
                    if( get_theme_mod( 'ju_phone_handle' ) ){
                        ?>
                        <div class="row">
                            <div class="col-1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/phone.svg" width="14px"></div>
                            <div class="col-10"><p class="pl-0 pl-md-2"><a href="tel:<?php echo esc_html (get_theme_mod( 'ju_phone_handle' )); ?>" title="<?php echo esc_html (get_theme_mod( 'ju_phone_handle' )); ?>"><?php echo esc_html (get_theme_mod( 'ju_phone_handle' )); ?></a></p></div>
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if( get_theme_mod( 'ju_email_handle' ) ){
                        ?>
                        <div class="row">
                            <div class="col-1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/email.svg" width="14px"></div>
                            <div class="col-10"><p class="pl-0 pl-md-2"><a href="mailto:<?php echo esc_html (get_theme_mod( 'ju_email_handle' )); ?>" title="<?php echo esc_html (get_theme_mod( 'ju_email_handle' )); ?>"><?php echo esc_html (get_theme_mod( 'ju_email_handle' )); ?></a></p></div>
                        </div>
                        <?php
                    }
                    ?>

                    <?php
                    if( get_theme_mod( 'ju_working_hours_handle' ) ) {
                        ?>
                        <div class="row">
                            <div class="col-1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/time.svg" width="14px"></div>
                            <div class="col-10"><p class="pl-0 pl-md-2">
                                    <?php echo esc_html (get_theme_mod( 'ju_working_hours_handle' )); ?><br>
                                    <?php echo esc_html (get_theme_mod( 'ju_working_hours_week_handle' )); ?><br>
                                    <?php echo esc_html (get_theme_mod( 'ju_working_hours_saturday_handle' )); ?><br>
                                    <?php echo esc_html (get_theme_mod( 'ju_working_hours_sunday_handle' )); ?>
                                </p></div>
                        </div>
                        <?php
                    }
                    ?>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-12 mt-0 p-5">

                    <ul class="social-links text-center text-md-right mt-n4">
                        <?php
                        if( get_theme_mod( 'ju_facebook_link_input_handle' ) ){
                            ?>
                            <li><a href="https://facebook.com/<?php echo esc_html (get_theme_mod( 'ju_facebook_link_input_handle' )); ?>" target="_blank" title="Facebook"><div class="si-facebook"></div></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_instagram_handle' ) ){
                            ?>
                            <li><a href="https://instagram.com/<?php echo esc_html (get_theme_mod( 'ju_instagram_handle' )); ?>" target="_blank" title="Instagram"><div class="si-instagram"></div></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_linkedin_handle' ) ){
                            ?>
                            <li><a href="https://linkedin.com/<?php echo esc_html (get_theme_mod( 'ju_linkedin_handle' )); ?>" target="_blank" title="LinkedIn"><div class="si-linkedin"></div></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_youtube_handle' ) ){
                            ?>
                            <li><a href="https://youtube.com/<?php echo esc_html (get_theme_mod( 'ju_youtube_handle' )); ?>" target="_blank" title="Youtube"><div class="si-youtube"></div></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_twitter_handle' ) ){
                            ?>
                            <li><a href="https://twitter.com/<?php echo esc_html (get_theme_mod( 'ju_twitter_handle' )); ?>" target="_blank" title="Twitter"><div class="si-twitter d-none d-sm-block"></div></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_pinterest_handle' ) ){
                            ?>
                            <li><a href="https://www.pinterest.com/<?php echo esc_html (get_theme_mod( 'ju_pinterest_handle' )); ?>" target="_blank" title="Pinterest"><div class="si-pinterest d-none d-sm-block"></div></a></li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>

            </div>

            <div class="row">

                <div class="col-12 mt-n1 p-5">
                    <?php
                    if ( get_theme_mod ( 'ju_footer-image_handle' )) {
                        ?><a href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_html (get_theme_mod( 'ju_footer-image_handle' )); ?>" alt="<?php
                        if (get_theme_mod( 'ju_footer_copyright_text' )) {
                            ?><?php echo esc_html (get_theme_mod( 'ju_footer_copyright_text' )); ?><?php
                        }
                        ?>" height="36px" width="120px" title="<?php
                        if (get_theme_mod( 'ju_footer_copyright_text' )) {
                            ?><?php echo esc_html (get_theme_mod( 'ju_footer_copyright_text' )); ?><?php
                        }
                        ?>"></a><?php
                    }
                    ?>

                    <p>
                        <small>
                            <?php
                            if (get_theme_mod( 'ju_footer_copyright_text' )) {
                                ?><?php echo esc_html (get_theme_mod( 'ju_footer_copyright_text' )); ?><?php
                            }
                            ?>
                        </small>
                    </p>

                </div>

            </div>

        </div>

    </div>

</footer>

    <!-- Go To Top
    ============================================= -->
    <?php
        get_template_part( 'includes/front/go-to', 'top' );
    ?>

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77903941-1"></script>-->
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-77903941-1');
</script>

</body>
</html>
