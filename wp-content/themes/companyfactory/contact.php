<?php
/*
* Template Name: contact
*/
get_header ();
?>

    <!-- Travel Direction
    ============================================= -->
    <section class="section-full-width">

    <div class="container">

        <div class="row mb-5">

            <div class="col col-sm-12 col-md-12 mt-5 text-center">

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

        </div>

    </div>
    <!-- .entry end -->

    </section><!-- #content end -->

        <?php
                }
            }
        ?>

<?php get_footer (); ?>