<?php get_header (); ?>

	<!-- Content
    ============================================= -->
	<section class="section-page">

        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col-md-6 mb-5 mt-5">

                    <div class="error404-text text-center mb-5 mt-2">404</div>

                </div>

                <div class="col-md-6 mb-5 mt-5">

                    <h1><?php _e('Ooopps.! Die von Ihnen gesuchte Seite konnte nicht gefunden werden.', 'companyfactory'); ?></h1>
                    <p><?php _e('Suchen Sie nach dem besten Treffer oder navigieren Sie zur Startseite.', 'companyfactory'); ?></p>

                    <?php echo get_search_form(); ?>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

<?php get_footer (); ?>