
<?php
$categories 		 = get_the_category();
//print_r($categories);

$rp_query 			 = new WP_Query( array(
    'posts_per_page' => 1,
    //'orderby'      => 'rand',
    'post__not_in'	 => array( $post->ID ),
    'category_name'	 => 'Travel-Search-Products'
));

if( $rp_query->have_posts() ) {
    while ($rp_query->have_posts() ) {
        $rp_query->the_post();
        ?>

        <div class="col mt-3 mb-5">

            <?php

            if ( has_post_thumbnail() ) {

                ?>

                <div class="mt-2">

                    <div class="text-center"><?php the_post_thumbnail('full',['class' => 'img-fluid']); ?></div>

                </div>

                <?php
            }
            ?>

            <h3 class="text-center mt-4"><?php the_title(); ?></h3>

            <div class="text-center"><?php echo the_content(); ?></div>

        </div>

        <?php
    }
    wp_reset_postdata();
}
?>