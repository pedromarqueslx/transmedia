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


    <!-- Page Title
============================================= -->
    <!--<section class="section-category-content">-->
    <section class="section-category-travel-posts">

        <div class="container shadow" style="background-color: white">

            <div class="card-columns mb-5 mt-5 pb-5">

                <?php if ( have_posts() ) : ?>

                <?php
                // Start the Loop.
                while ( have_posts() ) :
                    the_post();
                    ?>

                    <div class="card">
                        <?php
                        get_template_part( 'partials/post/content', 'excerpt-blog' );
                        ?>
                    </div>

                <?php
                    // End the loop.
                endwhile;
                ?>

            </div>

            <div class="row m-4">

                <div class="col-sm-12 col-md-12 p-4 d-flex justify-content-center">

                    <?php
                    the_posts_pagination(
                        array(
                            'prev_text'          => '<span class="posts-pagination">' . __( '&laquo; Zurück', 'webook' ) . '</span>',
                            'next_text'          => '<span class="posts-pagination">' . __( 'Weiter &raquo;', 'webook' ) . '</span>',
                            'before_page_number' => '<span class="posts-pagination">' . __( 'Seite', 'webook' ) . ' </span>',
                        )
                    );
                    ?>

                </div>

                <?php
                // If no content, include the "No posts found" template.
                else :
                    get_template_part( 'partials/content', 'none' );
                endif;
                ?>

            </div>

        </div>

    </section><!-- #content end -->

<?php get_footer (); ?>
