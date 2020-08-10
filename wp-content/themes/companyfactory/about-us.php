<?php
/*
* Template Name: about-us
*/
get_header ();
?>

	<!-- Travel Products
    ============================================= -->
    <section class="section-page">

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
            <?php //the_post_thumbnail ('full', ['sizes' => '100%', 'class' => 'img-fluid', 'title' => 'TravelBoo']); ?>
            <?php //the_post_thumbnail ('large', [ 'class' => 'img-fluid', 'title' => 'TravelBoo']); ?>
            <?php
            //echo do_shortcode( '[contact-form-7 id="270" title="travelboo-startpage"]');
            ?>
            <?php
        }

        ?>
        <!-- Entry Content
        ============================================= -->

        <?php
        the_content ();
        ?>

    </section><!-- #content end -->

    <?php
        }
    }

    ?>

<?php get_footer (); ?>