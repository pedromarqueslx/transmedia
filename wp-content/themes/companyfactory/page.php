<?php get_header ();?>

    <!-- Content Start Page
    ============================================= -->
    <section class="section-page">

        <!-- Entry Content
        ============================================= -->
        <div class="container">

            <div class="row mb-5 mt-4">

                <div class="col-sm-12 col-md-12">

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

            </div>

        </div>

    </section><!-- #content end -->

    <?php
        }
    }

    ?>

<?php get_footer (); ?>