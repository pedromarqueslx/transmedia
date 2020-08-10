<?php

    get_header ();

?>

	<!-- Content
    ============================================= -->

	<section class="section-travel-category-search">

        <div class="container">

            <div class="row mb-5 mt-5">

                <!-- Post Content
                ============================================= -->

                <div class="col-12 pt-4 pb-4">

                    <h1><?php _e('Was suchst du heute?', 'transmedia'); ?></h1>

                </div>

                <!-- Posts
                ============================================= -->

                <?php

                if (have_posts() ) {

                    while ( have_posts()) {

                        the_post();

                        ?>

                        <div class="col-12 mt-2 mb-2">

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
