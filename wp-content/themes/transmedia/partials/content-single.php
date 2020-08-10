<?php
/**
 * Template part for displaying posts
 *
 */
?>

    <div id="post-<?php the_ID(); ?>">

        <!-- Entry Image
        ============================================= -->
        <?php
        if ( has_post_thumbnail () ) {
            ?>
            <div class="mt-3 pb-1">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', array( 'title' => get_the_title(),'class' => 'img-fluid' )); ?>
                </a>
            </div>
            <?php
        }
        ?>

        <!-- Entry Meta
        ============================================= -->
        <div class="mt-0 mb-3">
            <?php webook_category_and_tags(); ?><br>
        </div>

        <!-- Entry Title
        ============================================= -->
        <div class="mt-3 mb-5">
            <h1 class="font-weight-bold"><?php the_title(); ?></h1>
            <div class="extra-small"><?php webook_posted_on(); ?></div>
        </div><!-- .entry-title end -->

        <!-- Entry Content
        ============================================= -->
        <div class="mt-1 mb-1">
            <?php
            the_content ();
            wp_link_pages ( array(
                'before' 	=> '<p class="text-center">' . __('Pages:'),
                'after'		=> '</p>',
            ));
            ?>
        </div>
        <!-- .entry end -->
        <p><?php //echo get_field('button_content'); ?></p>
    </div>
