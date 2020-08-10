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

    }

    ?>

    <div class="row mr-lg-2 border-bottom box-shadow">

        <div class="col">

            <h3 class="mt-4"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <?php the_excerpt(); ?>

        </div>

    </div>
