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
