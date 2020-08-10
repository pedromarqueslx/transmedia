<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

<section class="section-travel-category-search">

	<div class="page-content">
		<?php
		if  ( is_search() ) :
			?>

            <!-- Content
            ============================================= -->is_search

                <div class="container">

                    <div class="row mb-5 mt-4 pt-5 pb-5">

                        <!-- Post Content
                        ============================================= -->

                        <!-- Search Box
                        ============================================= -->

                        <div class="col-sm-12 col-md-6 mt-4 pb-0">

                            <h1><?php _e('Was suchst du heute?', 'webook'); ?></h1>

                        </div>

                        <div class="col-sm-12 col-md-6 mt-0 mb-5 pt-0">

                            <?php get_search_form(); ?>

                            <!-- Search Box End -->

                        </div>

                    </div>

                </div>

			<p><?php _e( 'Es tut uns leid, aber es stimmt nichts mit Ihren Suchbegriffen überein. Bitte versuchen Sie es mit anderen Suchbegriffen erneut.', 'webook' ); ?></p>

            <?php
			get_search_form();

		else :
			?>

                <div class="container">

                    <div class="row mb-5 mt-4 pt-5 pb-5">

                        <!-- Search Box
                        ============================================= -->

                        <div class="col-sm-12 col-md-6 mt-4 pb-0">

                            <h1><?php _e('Was suchst du heute?', 'webook'); ?></h1>
                            <p><?php _e( 'Anscheinend können wir nicht finden, wonach Sie suchen. Vielleicht kann die Suche helfen.', 'webook' ); ?></p>

                        </div>

                        <div class="col-sm-12 col-md-6 mt-0 mb-5 pt-0">

                            <?php get_search_form(); ?>

                            <!-- Search Box End -->

                        </div>

                    </div>

                </div>

			<?php

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
