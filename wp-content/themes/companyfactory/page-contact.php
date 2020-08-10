<?php
/*
* Template Name: Page-Contact
*/
get_header ('');
?>

    <!-- Travel Direction
    ============================================= -->
    <section class="section-travel-direction">

    <div class="container">

        <div class="row mb-5">

            <div class="col-sm-12 col-md-3"></div>

            <div class="col col-sm-12 col-md-6 mt-5 text-center">

                <?php the_field('page-title'); ?>

            <!-- Page Content
            ============================================= -->

            <?php

            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post ();
                    $author_ID = get_the_author_meta ('ID');
                    $author_url = get_author_posts_url ($author_ID);
                    ?>

                    <!-- Entry Page Content
                    ============================================= -->

                    <?php
                    the_content ();
                    ?>

            </div>

            <div class="col-md-3 mt-n4 pl-5 d-none d-sm-none d-md-block">

                <div class="boo">

                    <img src="https://www.webook.ch/wp-content/uploads/2019/06/boo-symbol.svg" alt="webook">

                </div>

               <div class="bubble">

                   <?php the_field('boo-chat'); ?>

               </div>

            </div>

        </div>

    </div>
    <!-- .entry end -->

    </section><!-- #content end -->

        <?php
                }
            }
        ?>

    <script type="text/javascript">

        const Destination = "<?php travel_destination() ?>";

        if (Destination !== '') {
            document.getElementById('your-destination').value = Destination;
        }

        const Name = "<?php travel_name() ?>";

        if (Name !== '') {
            document.getElementById('your-name').value = Name;
        }

    </script>

<?php get_footer (); ?>
