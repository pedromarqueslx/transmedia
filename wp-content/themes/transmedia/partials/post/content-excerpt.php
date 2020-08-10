    <?php
    // get post format gallery and return array
    if( get_post_format()          == 'gallery' ) {
    // false option return html
    $gallery = get_post_gallery( get_the_ID(), false );
    /*
    foreach( $gallery['src'] as $src ) {
        ?>
        <div class="slide">
            <a href="<?php echo $src; ?>">
                <img src="<?php echo $src; ?>">
            </a>
        </div>
        <?php
    }
    */
    ?>

    <?php

    } else if ( get_post_format() == 'video' ) {
        $content                  =   apply_filters( 'the_content', get_the_content() );
        $video                    =   false;

        if( !strpos( $content, 'wp-playlist-script' )) {
            $video                =   get_media_embedded_in_content(
                $content,
                array( 'video', 'object', 'embed', 'iframe' )
            );
        }

        if( $video ){
            echo '<div class="entry-video">';
            echo $video[0];
            echo '</div>';
        }

    } else if ( get_post_format() == 'audio' ){
        $content                  =   apply_filters( 'the_content', get_the_content() );
        $audio                    =   false;

        if( !strpos( $content, 'wp-playlist-script' )) {
            $audio                =   get_media_embedded_in_content(
                $content,
                array( 'audio', 'iframe' )
            );
        }

        if( $audio ){
            echo $audio[0];
        }

    } else if ( has_post_thumbnail() ) {

        ?>
            <div class="mt-2">
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array( 'title' => get_the_title(),'class' => 'img-fluid' )); ?></a>
                <div class="extra-small pt-2"><?php webook_category(); ?>- <?php webook_posted_on(); ?></div>
            </div>
        <?php
    }
    ?>

    <div class="row">

        <div class="col">

            <h2 style="color:#666666"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

            <?php the_excerpt(); ?>

        </div>

    </div>

    <div class="row float-right">

        <div class="col pr-4">

            <a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class=""><?php _e('Weiter', 'transmedia'); ?> &raquo;</a>

        </div>

    </div>
