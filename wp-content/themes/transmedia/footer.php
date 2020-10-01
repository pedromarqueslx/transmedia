<!-- Footer
============================================= -->
<footer>

    <div class="primary-footer-background-color">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 col-md-4 p-3">

                    <?php
                    if( get_theme_mod( 'ju_btn_quote_handle' ) ){
                        ?>
                        <a class="btn btn-lg btn-block button-rate-us" href="<?php echo esc_html (get_theme_mod( 'ju_btn_quote_link_handle' )); ?>" title="<?php echo esc_html (get_theme_mod( 'ju_btn_quote_handle' )); ?>"><?php echo esc_html (get_theme_mod( 'ju_btn_quote_handle' )); ?></a>
                        <?php
                    }
                    ?>

                </div>

            </div>

        </div>

    </div>

    <div class="secundary-footer-background-color">

        <div class="container">

            <div class="row">

                <div class="col-sm-12 mt-0">

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

            <div class="row mt-5 mb-5">

                <div class="col-sm-12 col-md-4">

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
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu6_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu6_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu6_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu6_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu7_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu7_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu7_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu7_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu8_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu8_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu8_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu8_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu9_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu9_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu9_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu9_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu10_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu10_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu10_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu10_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu11_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu11_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu11_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu11_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu12_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu12_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu12_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu12_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu13_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu13_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu13_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu13_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu14_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu14_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu14_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu14_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu15_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu15_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu15_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu15_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu16_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu16_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu16_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu16_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu17_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu17_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu17_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu17_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu18_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu18_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu18_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu18_handle' )); ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>

                </div>

                <div class="col-sm-12 col-md-4">

                    <h5 class="pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_footelinkstitle_second_handle' ) ){
                            ?><?php echo esc_html (get_theme_mod( 'ju_footelinkstitle_second_handle' )); ?>
                            <?php
                        }
                        ?>
                    </h5>

                    <ul class="list-unstyled text-small pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu19_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( esc_html (get_theme_mod( 'ju_navigationpagemenu19_handle' ))); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu19_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu19_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu20_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu20_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu20_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu20_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu21_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu21_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu21_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu21_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu22_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu22_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu22_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu22_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu23_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu23_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu23_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu23_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu24_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu24_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu24_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu24_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu25_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu25_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu25_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu25_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu26_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu26_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu26_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu26_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu27_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu27_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu27_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu27_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu28_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu28_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu28_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu28_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu29_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu29_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu29_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu29_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu30_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu30_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu30_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu30_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu31_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu31_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu31_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu31_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu32_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu32_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu32_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu32_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu33_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu33_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu33_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu33_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu34_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu34_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu34_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu34_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu35_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu35_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu35_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu35_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu36_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu36_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu36_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu36_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu37_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu37_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu37_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu37_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        if( get_theme_mod( 'ju_navigationpagemenu38_handle' ) ) {
                            ?><li><a href="<?php the_permalink ( get_theme_mod( 'ju_navigationpagemenu38_handle' )); ?>" title="<?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu38_handle' )); ?>"><?php echo get_the_title( get_theme_mod( 'ju_navigationpagemenu38_handle' )); ?></a></li>
                            <?php
                        }
                        ?>

                        <?php
                        /*
                        if ( has_nav_menu ('secondary') ) {
                            wp_nav_menu (array(
                                'theme_location'	=> 'secondary',
                                'container'			=> 'true',
                                'fallback_cb'		=> 'false',
                                // no dropdown menus depth 1
                                'depth'				=> 1,
                                'menu_class'        => 'list-unstyled text-small',
                                'add_li_class'      => 'text-muted'
                            ));
                        }
                        */
                        ?>
                    </ul>

                </div>

                <div class="col-sm-12 col-md-4">

                    <h5 class="pl-0 pl-md-2">
                        <?php
                        if( get_theme_mod( 'ju_footeAddressTitle_handle' ) ){
                            ?><?php echo esc_html (get_theme_mod( 'ju_footeAddressTitle_handle' )); ?>
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


                    <h5 class="pl-0 pl-md-2 pt-5">
                        <?php
                        if( get_theme_mod( 'ju_rateus_handle' ) ){
                            ?><?php echo esc_html (get_theme_mod( 'ju_rateus_handle' )); ?>
                            <?php
                        }
                        ?>
                    </h5>

                    <?php
                    if( get_theme_mod( 'ju_google_handle' ) ){
                        ?>
                        <a class="btn btn-lg btn-block button-rate-us" href="https://g.page/<?php echo esc_html (get_theme_mod( 'ju_google_handle' )); ?>" target="_blank" title="auf Google">auf Google</a>

                        <?php
                    }
                    ?>
                    <?php
                    if( get_theme_mod( 'ju_facebook_handle' ) ){
                        ?>
                        <a class="btn btn-lg btn-block button-rate-us" href="https://facebook.com/<?php echo esc_html (get_theme_mod( 'ju_facebook_handle' )); ?>" target="_blank" title="auf Facebook">auf Facebook</a>

                        <?php
                    }
                    ?>

                </div>

            </div>

            <div class="row">

                <div class="col-12 mt-n1">
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
                    <p><small>
                            <?php
                            if (get_theme_mod( 'ju_footer_copyright_text' )) {
                                ?><?php echo esc_html (get_theme_mod( 'ju_footer_copyright_text' )); ?><?php
                            }
                            ?>
                    </small></p>

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
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-77903941-1"></script>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-77903941-1');
</script>

</body>
</html>
