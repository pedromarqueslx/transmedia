<?php
/*
* Template Name: impressum
*/
get_header ();
?>

	<!-- Travel Products
    ============================================= -->
    <section id="section1" class="section-download-manager-dashboard">

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
        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col-sm-12 col-md-12">

                    <?php
                    the_content ();
                    ?>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <?php
        }
    }

    ?>

<?php get_footer (); ?>