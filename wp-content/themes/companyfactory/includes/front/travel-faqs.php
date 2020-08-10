<div class="col-12 p-0">
    <?php
    $categories 		 =  get_the_category();
    //print_r($categories);
    $rp_query 			 =  new WP_Query( array(
        'posts_per_page' => 3,
        'orderby'        => 'ASC',
        'category_name'	 => 'Faqs'
    ));
    $i = 0;
    if( $rp_query->have_posts() ) {
        while ($rp_query->have_posts() ) {
            $rp_query->the_post();
            $i++;
            ?>
            <!-- Entry Accordion
            ============================================= -->

            <div id="<?php echo 'TravelAgencyAccordion'.$i; ?>">
                <div id="accordion" class="card-header-faqs">
                    <div class="accordion-card">
                        <div class="row">
                            <div class="col">
                                <div class="container pt-2 pb-2" id="<?php echo 'heading0'.$i; ?>">
                                    <h3 class="m-1" data-toggle="collapse" data-target="<?php echo '#collapse0'.$i; ?>" aria-expanded="false" aria-controls="<?php echo 'collapse0'.$i; ?>">
                                        <?php the_title(); ?><img src="<?php echo get_template_directory_uri(); ?>/images/faqs-arrow.svg" alt="Arrow" width="15px" class="fa fa-chevron-down pull-right float-right p-0">
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div id="<?php echo 'collapse0'.$i; ?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body card-body-faqs">
                                        <div class="container">
                                        <?php the_content(); ?>
 <!--                                           <p class="mt-3 font-weight-bold"><a class="" href="<?php /*the_permalink(); */?>" alt="<?php /*the_title(); */?>" title="<?php /*the_title(); */?>">
                                                    <?php /*_e('Weiter ', 'webook'); */?>
                                                </a>&raquo;</p>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php
        }
        wp_reset_postdata();
    }
    ?>
</div>








