<?php get_header (); ?>

	<!-- Content
    ============================================= -->

	<section class="section-page-content">

        <div class="container">

            <div class="row pt-5 pb-5 p-1">

            <!-- Post Content
            ============================================= -->

            <?php

            if ( have_posts() ) {
                while ( have_posts() ) {
                the_post ();
            ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('single-post nobottommargin'); ?>>

                    <!-- Single Post
                    ============================================= -->

                    <!-- Entry Title
					============================================= -->
                    <div class="col-12">
                        <h2><?php the_title(); ?></h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
					============================================= -->
		                <?php the_category(''); ?>

                    <!-- Entry Content
					============================================= -->
                    <div class="col-12">

		                <?php
		                the_content ();
		                ?>

                    </div>

                    <!-- .entry end -->

                </div>

            </div>

        </div>

    </section><!-- #content end -->

	<?php
        }
    }

    ?>

<?php get_footer (); ?>