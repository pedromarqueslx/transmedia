<?php get_header (); ?>

	<!-- Content
    ============================================= -->
	<section class="section-travel-category-search">

        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col-md-6 mb-2 mt-0 ">

                    <div class="error404-text text-center">404</div>

                </div>

                <div class="col-md-6 pt-5 pb-5">

                    <h1><?php _e('Ooopps.! Die von Ihnen gesuchte Seite konnte nicht gefunden werden.', 'transmedia'); ?></h1>

                    <p><?php _e('Suchen Sie nach dem besten Treffer oder navigieren Sie zur Startseite.', 'transmedia'); ?></p>

                    <?php echo get_search_form(); ?>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

<?php get_footer (); ?>
