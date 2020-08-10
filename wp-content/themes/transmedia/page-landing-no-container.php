<?php
/*
* Template Name: Page-Landing-No-Container
*/
get_header ();?>

    <!-- Content Start Page
    ============================================= -->

    <section id="section2" class="section-start-page">
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
    <section id="section22" class="section-start-page" style="display: <?php the_field('section_slider_posts') ?>">
        <?php
        the_field('deine-reiseplattform-kommt-formform')
        ?>
    </section><!-- #content end -->

    <!-- Fun Charts
    ============================================= -->
    <section id="section3" class="cd-section section-fun-charts" style="display: <?php the_field('section_fun_charts') ?>">
        <div class="container">
            <div class="row m-0 p-0">

                <div class="col-md-4 p-5" title="<?php the_field('offerte-anfrage-title'); ?>">
                    <canvas id="offerteanfrage" width="100" height="100" aria-label="<?php the_field('offerte-anfrage-title'); ?>" role="img"></canvas>
                    <h2 class="text-center mt-2"><?php the_field('offerte-anfrage-title'); ?></h2>
                </div>

                <div class="col-md-4 p-5" title="<?php the_field('ferien-buchung-title'); ?>">
                    <canvas id="ferienbuchung" width="100" height="100" aria-label="<?php the_field('ferien-buchung-title'); ?>" role="img"></canvas>
                    <h2 class="text-center mt-2"><?php the_field('ferien-buchung-title'); ?></h2>
                </div>

                <div class="chartClass col-md-4 p-5" title="<?php the_field('aktive-kunden-title'); ?>">
                    <canvas id="aktivekunden" width="100" height="100" aria-label="<?php the_field('aktive-kunden-title'); ?>" role="img"></canvas>
                    <h2 class="text-center mt-2"><?php the_field('aktive-kunden-title'); ?></h2>
                </div>

            </div>
        </div>
    </section>
    <!-- #content end -->

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
                    include( plugin_dir_path( __FILE__ ) . 'includes/front/travel-search.php');
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
                    include( plugin_dir_path( __FILE__ ) . 'includes/front/travel-posts.php');
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
                    include( plugin_dir_path( __FILE__ ) . 'includes/front/travel-faqs.php');
                ?>
            </div>
        </div>
    </section><!-- #FAQS end -->

    <?php
        }
    }
    ?>

    <script type="text/javascript">
        let inView = false;
        function isScrolledIntoView(elem)
        {
            let docViewTop = jQuery(window).scrollTop();
            let docViewBottom = docViewTop + jQuery(window).height();

            let elemTop = jQuery(elem).offset().top;
            let elemBottom = elemTop + jQuery(elem).height();

            return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
        }

        jQuery(window).scroll(function() {
            if (isScrolledIntoView('#section2')) {
                if (inView) { return; }
                inView = true;

                Chart.plugins.register({
                    beforeDraw(chart) {
                        let width        = chart.chart.width,
                            height       = chart.chart.height,
                            ctx          = chart.chart.ctx;

                        ctx.restore();
                        let fontSize     = (height / 100).toFixed(2);
                        ctx.font         = "700 " + fontSize + "em Source Sans Pro";
                        ctx.textBaseline = "middle";
                        ctx.fillStyle    = '#2c6c84';

                        let text         = chart.config.options.elements.center.text,
                            textX        = Math.round((width - ctx.measureText(text).width) / 2),
                            textY        = height / 2;

                        ctx.fillText(text, textX, textY);
                        ctx.save(ferienbuchung, offerteanfrage, aktivekunden);
                    }
                });

                // chart1
                let offerteanfrage = new Chart(document.getElementById('offerteanfrage'), {
                    type: 'doughnut',
                    data: {
                        labels: ["<?php the_field('offerte-anfrage-title'); ?>", "Andere"],
                        datasets: [{
                            data: [<?php the_field('offerte-anfrage'); ?>, <?php the_field('offerte-anfrage-andere'); ?>],
                            backgroundColor: ["#2c6c84", "#d5e3e7"],
                            hoverBackgroundColor: ["#2c6c84", "#d5e3e7"]
                        }]
                    },
                    options: {
                        animation:{duration: 2000},
                        elements: {
                            center: {
                                text: '<?php the_field('offerte-anfrage'); ?>K',
                            }
                        },
                        cutoutPercentage: 82,
                        rotation: Math.PI * 0.22,
                        legend: {
                            display: false
                        }
                    }
                });

                // chart2
                let ferienbuchung = new Chart(document.getElementById('ferienbuchung'), {
                    type: 'doughnut',
                    data: {
                        labels: ["<?php the_field('ferien-buchung-title'); ?>", "Andere"],
                        datasets: [{
                            data: [<?php the_field('ferien-buchung'); ?>, <?php the_field('ferien-buchung-andere'); ?>],
                            backgroundColor: ["#2c6c84", "#d5e3e7"],
                            hoverBackgroundColor: ["#2c6c84", "#d5e3e7"]
                        }]
                    },
                    options: {
                        animation:{duration: 2000},
                        elements: {
                            center: {
                                text: '<?php the_field('ferien-buchung'); ?>K'
                            }
                        },
                        cutoutPercentage: 82,
                        rotation: Math.PI * -2.28,
                        legend: {
                            display: false
                        }
                    }
                });

                // chart3
                let aktivekunden = new Chart(document.getElementById('aktivekunden'), {
                    type: 'doughnut',
                    data: {
                        labels: ["<?php the_field('aktive-kunden-title'); ?>", "Andere"],
                        datasets: [{
                            data: [<?php the_field('aktive-kunden'); ?>, <?php the_field('aktive-kunden-andere'); ?>],
                            backgroundColor: ["#2c6c84", "#d5e3e7"],
                            hoverBackgroundColor: ["#2c6c84", "#d5e3e7"]
                        }]
                    },
                    options: {
                        animation:{duration: 2000},
                        elements: {
                            center: {
                                text: '<?php the_field('aktive-kunden'); ?>K'
                            }
                        },
                        cutoutPercentage: 82,
                        rotation: Math.PI * -1.65,
                        legend: {
                            display: false
                        }
                    }
                });

            } else {
                inView = false;
            }
        });

    </script>

<?php get_footer (); ?>
