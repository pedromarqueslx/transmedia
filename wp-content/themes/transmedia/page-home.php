<?php
/*
* Template Name: Page-Home
*/
get_header ('home');?>

    <!-- Content Start Page
    ============================================= -->

    <div class="section-start-page">

        <!-- Page Content
        ============================================= -->
        <?php //echo do_shortcode( '[traveldestinationmenu]' ); ?>

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

    </div><!-- #content end -->

    <?php
    }
}
?>

<?php get_footer (); ?>
