<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

    <section class="section-page">

        <div class="container">

            <div class="row mb-5 mt-4">

                <div class="col-sm-12 col-md-12 mt-4 pb-0">

		        <?php if ( have_posts() ) : ?>

				<?php
					the_archive_title( '<h1>', '</h1>' );
				?>

                <?php
                // Start the Loop.
                while ( have_posts() ) :
                    the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'partials/post/content-excerpt', 'excerpt' );

                    // End the loop.
                endwhile;

                // Previous/next page navigation.
                //twentynineteen_the_posts_navigation();

                // If no content, include the "No posts found" template.
            else :
                get_template_part( 'partials/post/content-excerpt', 'none' );

            endif;
            ?>

                </div>

            </div>

    </section><!-- #content end -->

<?php
get_footer();
