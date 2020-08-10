<?php
/*
* Template Name: Page-Kontakt
*/
get_header ('');
?>

    <!-- Travel Direction
    ============================================= -->
    <section class="section-travel-direction">

    <div class="container">

        <div class="row mb-5">

            <div class="col-sm-12 col-md-3 ">

                <div class="seo-invisible-content">

                    <?php the_field('seo-invisible-content'); ?>

                </div>

            </div>

            <div class="col col-sm-12 col-md-6 mt-5 text-center">

                <?php the_field('page-title'); ?>

            <!-- Page Content
            ============================================= -->

            <?php

            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post ();
                    $author_ID = get_the_author_meta ('ID');
                    $author_url = get_author_posts_url ($author_ID);
                    ?>

                    <!-- Entry Page Content
                    ============================================= -->

                    <?php
                    the_content ();
                    ?>

            </div>

            <div class="col-md-3 mt-n4 pl-5 d-none d-sm-none d-md-block">

                <?php the_field('boo-chat'); ?>

            </div>

        </div>

    </div>
    <!-- .entry end -->

    </section><!-- #content end -->

        <?php
                }
            }
        ?>

<?php get_footer (); ?>
