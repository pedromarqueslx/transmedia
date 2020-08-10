<?php
    get_header ();
?>

    <!-- Page Title
============================================= -->
    <!--<section class="section-category-content">-->
    <section class="section-page">

        <div class="container">

            <div class="row mb-5 mt-4">

                <div class="col-sm-12 col-md-12">

                    <!-- archive is a list of posts based on the category -->
                    <h1><?php the_archive_title(); ?></h1>

                </div>

                <!-- Post Content
                ============================================= -->

                <!-- Posts
                ============================================= -->
                <?php

                if ( have_posts() ) {
                    while ( have_posts()) {
                        the_post();
                        // get parts of the include
                        // get template part points to theme dir
                        ?>

                        <div class="col-md-6 mt-5 mb-2">

                        <?php
                        get_template_part('partials/post/content-excerpt');
                        ?>

                        </div>

                        <?php
                    }
                }

                ?>

            </div>

        </div>

    </section><!-- #content end -->

<?php get_footer (); ?>