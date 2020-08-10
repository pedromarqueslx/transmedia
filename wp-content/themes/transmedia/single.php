<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
get_header();
?>

    <section class="section-post-content">
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-sm-12 col-lg-8">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                    the_post();
                    get_template_part( 'partials/content', 'single' );
                    ?>

                    <div class="mt-5 mb-5">
                        <?php
                        if ( is_singular( 'attachment' ) ) {
                            // Parent post navigation.
                            the_post_navigation(
                                array(
                                    /* translators: %s: parent post link */
                                    'prev_text' => sprintf( __( '<span class="meta-nav">Veröffentlicht </span><span class="post-title">%s</span>', 'transmedia' ), '%title' ),
                                )
                            );
                        } elseif ( is_singular( 'post' ) ) {
                            ?>
                               <!-- Post Navigation
                                ============================================= -->
                                <div class="row">
                                    <div class="col-sm-12 col-lg-6 font-weight-bold">
                                        <?php previous_post_link(  '&laquo; %link', '%title', TRUE, ' '); ?>
                                    </div>
                                    <div class="col-sm-12 col-lg-6 font-weight-bold">
                                        <?php next_post_link(  '%link &raquo;', '%title', TRUE, ' '); ?>
                                    </div>
                                </div><!-- .post-navigation end -->
                            <?php
                        }
                        ?>
                    </div>

                    <div class="mt-5 mb-5">
                        <?php
                        // If comments are open or we have at least one comment, load up the comment template.
                        //if ( comments_open() || get_comments_number() ) {
                            //comments_template();
                        //}
                        endwhile; // End of the loop.
                        ?>
                    </div>

                </div>

                <div class="col-sm-12 col-lg-4 pt-3">
                    <?php get_sidebar(); ?>
                </div>

            </div>
        </div>
    </section><!-- #content end -->

    <!-- Travel Posts
    ============================================= -->
    <section class="section-travel-posts">

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
    <section class="section-faqs-posts">

        <div class="container">

            <div class="row mt-5 mb-5">

                <?php
                    include( plugin_dir_path( __FILE__ ) . 'includes/front/travel-faqs.php');
                ?>

            </div>

        </div>

    </section><!-- #FAQS end -->
<?php get_sidebar(); ?>
<?php
get_footer();
