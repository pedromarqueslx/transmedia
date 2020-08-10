<?php
/*
* Template Name: Page-Archives
*/
get_header ();?>


    <!-- Page Title
    ============================================= -->
    <!--<section class="section-category-content">-->
    <section class="section-category-travel-posts">

        <div class="container shadow" style="background-color: white">

            <div class="card-columns mb-5 mt-5 pb-5">

            <?php
            $paged = get_query_var('paged') ? get_query_var('paged') : 1;
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'category_name' => '',
                'posts_per_page' => 10,
                'paged' => $paged,
            );
            $arr_posts = new WP_Query( $args );
            if ($arr_posts->have_posts()) :
                while ($arr_posts->have_posts()) : $arr_posts->the_post()
                    ?>

                    <div class="card">
                        <?php
                        get_template_part( 'partials/post/content', 'excerpt-blog' );
                        ?>
                    </div>

                <?php endwhile ?>

            </div>

            <div class="row m-4">

                <div class="col-sm-12 col-md-12 p-4 d-flex justify-content-center">
                    <div class="nav-links">
                    <?php
                    $total_pages = $arr_posts->max_num_pages;
                    if ($total_pages > 1){

                        $current_page = max(1, get_query_var('paged'));

                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => '/page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => __('« '),
                            'next_text'    => __(' »'),
                            'add_args'  => array()
                        ));
                    }
                    ?>
                    </div>
                </div>

                <?php else :
                    get_template_part( 'partials/content', 'none' );
                endif; wp_reset_postdata();?>

            </div>

        </div>

    </div>

</section><!-- #content end -->

<?php get_footer (); ?>


