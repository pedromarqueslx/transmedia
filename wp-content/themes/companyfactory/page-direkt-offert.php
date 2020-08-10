<?php
/*
* Template Name: Page-Direkt-Offert
*/
get_header ();?>

<!-- Content Start Page
============================================= -->
<section id="regForm" class="section-webook-easy-planning pb-2">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-2">

                <div class="seo-invisible-content">

                    <?php the_field('seo-invisible-content'); ?>

                </div>

            </div>

            <div class="col col-sm-12 col-md-8 m-0 pt-5 pb-5">

                <!-- Post Content
                ============================================= -->
                <?php

                if ( have_posts() ) {
                    while ( have_posts() ) {
                        the_post ();
                        $author_ID = get_the_author_meta ('ID');
                        $author_url = get_author_posts_url ($author_ID);
                        ?>

                        <?php
                        the_content ();
                        ?>

            </div>

            <div class="col-md-2 mt-n4 pr-5 ml-0 d-none d-sm-none d-md-block">


            </div>

        </div>

    </div>
    <!-- .entry end -->

</section><!-- #content end -->

                        <!-- Slider webook
                        ============================================= -->
                        <section id="section5" class="section-slider-posts">
                            <?php
                            echo do_shortcode('[smartslider3 slider=2]');
                            ?>
                        </section><!-- #content end -->

                        <!-- Travel Posts
============================================= -->
                        <section id="section6" class="section-travel-posts" style="display: <?php the_field('section_travel_post') ?>">
                            <div class="container">
                                <div class="row mt-5 mb-5">
                                    <?php
                                    include( plugin_dir_path( __FILE__ ) . 'includes/front/travel-posts.php');
                                    ?>
                                </div>
                            </div>
                        </section><!-- #content end -->

                        <!-- FAQS
                        ============================================= -->
                        <section id="section7" class="section-faqs-posts">
                            <div class="container">
                                <div class="row mt-5 mb-5">
                                    <?php
                                    include( plugin_dir_path( __FILE__ ) . 'includes/front/travel-faqs.php');
                                    ?>
                                </div>
                            </div>
                        </section><!-- #FAQS end -->

    <?php
        }
    }
    ?>

<?php get_footer (); ?>
