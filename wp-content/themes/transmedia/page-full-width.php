<?php
/*
* Template Name: Page-Without-Container
*/
get_header ('');

?>

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

        <?php
        }
    }
    ?>

<?php get_footer (); ?>
