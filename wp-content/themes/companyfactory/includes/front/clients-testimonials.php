<div class="carousel-item active">
    <div class="card-deck">

        <?php
        $categories 		  = get_the_category();
        //print_r($categories);
        $rp_query 			  = new WP_Query( array(
            'posts_per_page'  => 3,
            'orderby'         => 'rand',
            'post__not_in'	  => array( $post->ID ),
            'category_name'	  => 'Destinationen'
        ));

        if( $rp_query->have_posts() ) {
            while ($rp_query->have_posts() ) {
                $rp_query->the_post();
                ?>

                <div class="card card-travel-destination h-100">
                    <div>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    </div>

<!--                    <?php
/*                    if ( has_post_thumbnail() ) {
                        */?>
                        <div class="full-width-image">
                            <a href="<?php /*the_permalink(); */?>"><?php /*the_post_thumbnail('full', array( 'title' => get_the_title(),'class' => 'img-fluid' )); */?></a>
                        </div>
                        --><?php
/*                    }
                    */?>

                    <?php the_excerpt(); ?>

                </div>

                <?php
            }
            wp_reset_postdata();
        }
        ?>

    </div>
</div>
