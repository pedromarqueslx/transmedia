<?php
/*
* Template Name: Page-Landing-With-Simple-Form
*/
get_header ();?>

    <!-- Content Start Page
    ============================================= -->
    <!--<div class="modal-backdrop fade show"></div>-->

    <section id="section2" class="section-start-page container">
        <!-- Page Content
        ============================================= -->
        <?php

        if ( have_posts() ) {
            while ( have_posts() ) {
        the_post ();
        $author_ID = get_the_author_meta ('ID');
        $author_url = get_author_posts_url ($author_ID);
        ?>

        <?php
            the_content ();
        ?>
    </section><!-- #content end -->

    <!-- Deine reiseplattform kommt form
    ============================================= -->
    <section id="section22" class="section-start-page">
        <?php
            the_field('deine-reiseplattform-kommt-formform')
        ?>
    </section><!-- #content end -->

    <!-- Fun Facts
    ============================================= -->
    <section id="section4" class="cd-section section-fun-facts" style="display: <?php the_field('section_fun_facts') ?>">
        <div class="container">
            <div class="row">
                <?php
                $categories 		 = get_the_category();
                //print_r($categories);
                $rp_query 			 = new WP_Query( array(
                    'posts_per_page' => 4,
                    'orderby'        => 'rand',
                    'post__not_in'	 => array( $post->ID ),
                    'category_name'	 => 'Fun-Facts'
                ));

                if( $rp_query->have_posts() ) {
                    while ($rp_query->have_posts() ) {
                        $rp_query->the_post();
                        ?>

                        <div class="col-md-3 mt-4 mb-4">
                            <?php
                            if ( has_post_thumbnail() ) {
                            ?>
                                <div class="text-center"><?php the_post_thumbnail('full', array( 'title' => get_the_title(),'class' => 'img-fluid' )); ?></div>
                            <?php
                            }
                            ?>
                                <h3 class="text-center mt-4"><?php the_title(); ?></h3>
                                <p class="text-center"><?php echo get_the_excerpt(); ?></p>
                        </div>

                        <?php
                    }
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
    </section><!-- #content end -->


    <!-- Travel Search
    ============================================= -->
    <section id="" class="section-travel-search" style="display: <?php the_field('section_travel_search') ?>">
        <div class="container">
            <div class="row">
                <?php
                    get_template_part('includes/front/travel-search')
                ?>
            </div>
        </div>
    </section><!-- #content end -->


    <!-- Slider transmedia
    ============================================= -->
    <section id="section5" class="section-slider-posts" style="display: <?php the_field('section_slider_posts') ?>">
        <?php
            echo do_shortcode('[smartslider3 slider=2]');
        ?>
    </section><!-- #content end -->


    <!-- Travel Posts
    ============================================= -->
    <section id="section6" class="section-travel-posts" style="display: <?php the_field('section_travel_post') ?>">
        <div class="container">
           <div class="row mt-5 mb-5">
               <?php
                    get_template_part('includes/front/travel-posts')
               ?>
            </div>
        </div>
    </section><!-- #content end -->


    <!-- FAQS
    ============================================= -->
    <section id="section7" class="section-faqs-posts" style="display: <?php the_field('section_faqs_posts') ?>">
        <div class="container">
            <div class="row mt-5 mb-5">
                <?php
                    get_template_part('includes/front/travel-faqs')
                ?>
            </div>
        </div>
    </section><!-- #FAQS end -->

    <?php
        }
    }
    ?>

<?php get_footer (); ?>
