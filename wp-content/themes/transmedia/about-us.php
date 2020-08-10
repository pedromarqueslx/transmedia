<?php
/*
* Template Name: about-us
*/
get_header ();
?>

    <!-- Products
    ============================================= -->

    <section id="section3" class="section-products" style="display: <?php the_field('section_products') ?>">

        <?php
            echo do_shortcode('[smartslider3 slider=4]');
        ?>

    </section><!-- #content end -->


    <!-- transmedia Team
    ============================================= -->

    <section id="section2" class="section-uber-uns">
        <div class="container mt-4">
    <!-- Post Content
    ============================================= -->

    <?php

    if ( have_posts() ) {
    while ( have_posts() ) {
        the_post ();
        $author_ID = get_the_author_meta ('ID');
        $author_url = get_author_posts_url ($author_ID);
        ?>

        <!-- Entry Content
        ============================================= -->

        <?php
        the_content ();
        ?>

        </div>
    </section><!-- #content end -->


    <!-- Travel Posts
    ============================================= -->
    <section id="section5" class="section-travel-posts" style="display: <?php the_field('section_travel_posts') ?>">

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
    <section id="section7" class="section-faqs-posts" style="display: <?php the_field('section_faqs_posts') ?>">

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
