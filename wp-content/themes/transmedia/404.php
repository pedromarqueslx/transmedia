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

                    <h1><?php _e('Ooopps.! A página que você está procurando não foi encontrada.', 'transmedia'); ?></h1>

                    <p><?php _e('Procure por melhor correspondência ou navegue até a página inicial.', 'transmedia'); ?></p>

                    <?php echo get_search_form(); ?>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

<?php get_footer (); ?>
