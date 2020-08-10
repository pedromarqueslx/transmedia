<?php get_header (); ?>
<?php //get_header ('v2'); // header-v2.php ?>
	<!-- Content
    ============================================= -->
	<section id="content">

		<div class="content-wrap">

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