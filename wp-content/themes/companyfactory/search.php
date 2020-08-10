<?php
    get_header ();
?>

	<!-- Content
    ============================================= -->
	<section class="section-page">

        <div class="container">

            <div class="row mb-5 mt-5">

                <!-- Search Box
                ============================================= -->
                <div class="col-sm-12 col-md-6 mt-5">

                    <h1><?php _e('Was suchst du heute?', 'companyfactory'); ?></h1>

                </div>

                <div class="col-sm-12 col-md-6 mt-5 mb-5">

                    <?php get_search_form(); ?>

                    <!-- Search Box End -->

                </div>

                <!-- Posts
                ============================================= -->
                <?php

                if ( have_posts() ) {
                    while ( have_posts()) {
                        the_post();
                        ?>

                        <div class="col-md-6 mt-2 pb-3 ">

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