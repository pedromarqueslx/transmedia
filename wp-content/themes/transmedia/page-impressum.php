<?php
/*
* Template Name: Page-Impressum
*/
get_header ();
?>

	<!-- Travel Products
    ============================================= -->
    <section id="section1" class="section-travel-category-search">

        <!-- Post Content
        ============================================= -->

        <?php

        if ( have_posts() ) {
            while ( have_posts() ) {
        the_post ();
        $author_ID = get_the_author_meta ('ID');
        $author_url = get_author_posts_url ($author_ID);
        ?>

        <!-- Entry Image
        ============================================= -->
        <?php

        if ( has_post_thumbnail () ) {
            ?>
            <?php //the_post_thumbnail ('full', ['sizes' => '100%', 'class' => 'img-fluid', 'title' => 'transmedia']); ?>
            <?php //the_post_thumbnail ('large', [ 'class' => 'img-fluid', 'title' => 'transmedia']); ?>
            <?php
            //echo do_shortcode( '[contact-form-7 id="270" title="transmedia-startpage"]');
            ?>
            <?php
        }

        ?>
        <!-- Entry Content
        ============================================= -->
        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col-sm-12 col-md-12">

                    <?php
                    the_content ();
                    ?>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Slider transmedia
    ============================================= -->

    <section id="section4" class="section-slider-posts">

        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col-sm-12 col-md-12">

                    <?php the_field('second-area'); ?>

                    <?php
                        /*echo do_shortcode('[smartslider3 slider=6]');*/
                    ?>

                </div>

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Travel Posts
    ============================================= -->
    <section id="section5" class="section-travel-posts">

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
    <section id="section6" class="section-faqs-posts">

        <div class="container">

            <div class="row mt-5 mb-5">

                <div class="col">

                    <h2 class=""><?php _e('FAQS', 'transmedia'); ?></h2>

                    <?php
                    $categories 		 = get_the_category();
                    //print_r($categories);

                    $rp_query 			 = new WP_Query( array(
                        'posts_per_page' => 6,
                        'orderby'        => 'rand',
                        'post__not_in'	 => array( $post->ID ),
                        'category_name'	 => 'Faqs'
                    ));

                    if( $rp_query->have_posts() ) {
                        while ($rp_query->have_posts() ) {
                            $rp_query->the_post();
                            ?>

                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <!-- <div class="entry-content"><?php //the_excerpt(); ?></div>-->

                            <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>

                </div>

            </div>

        </div>

    </section><!-- #FAQS end -->
    <?php
        }
    }

    ?>

<?php get_footer (); ?>
