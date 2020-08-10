<?php get_header (); ?>
<?php //get_header ('v2'); // header-v2.php ?>
	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

        <?php
        // conditional tags if is single and is home
        // check if wp popular post Plug-in is active
        if( !is_single() && is_home() && function_exists( 'wpp_get_mostpopular' )  && get_theme_mod( 'ju_show_header_popular_posts_widget' ) ){
	        wpp_get_mostpopular(array(
                'wpp_start'         =>  '
                    <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                        <div>
                            <div class="container clearfix">
                                <span class="label label-danger bnews-title">' . get_theme_mod( 'ju_popular_posts_widget_title' ) . ':</span>
                                <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                                    <div class="flexslider">
                                        <div class="slider-wrap">',
                'wpp_end'           =>  '</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>',
                'post_html'         =>  '<div class="slide"><a href="{url}"><strong>{text_title}</strong></a></div>'
            ));
        }

        ?>
			
			<div class="container clearfix">

				<div class="row mb-3">

		    		<div class="col-md-8">

						<!-- Load Post Content
		                ============================================= -->
						<div class="postcontent nobottommargin clearfix">

							<!-- Posts
		                    ============================================= -->
							<div id="posts">
								<?php

								if ( have_posts() ) {
									while ( have_posts() ) {
										// function the_post used to stop the loop // one post per iteration
										the_post();

										get_template_part('partials/post/content-excerpt');
                                        ?>
                                        <?php  the_post_thumbnail( 'full' ); ?>
                                        <?php the_title (); ?>

                                        <?php
									}
								}

								?>

							</div><!-- #posts end -->

							<!-- Pagination
		                    ============================================= -->
							<ul class="pager nomargin">
								<li class="previous"><?php previous_posts_link('&larr; Older') ?></li>
								<li class="next"><?php next_posts_link('Newer &rarr;') ?></li>
							</ul><!-- .pager end -->

						</div><!-- .postcontent end -->

					</div>

					<div class="col-md-4">
			  		
							<!-- Get side bar -->
							<?php //get_sidebar(); ?>

					</div>
					
				</div>

			</div>

		</div>

	</section><!-- #content end -->

<?php get_footer (); ?>