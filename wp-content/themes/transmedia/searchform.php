<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

    <div class="input-group">

        <input type="search" id="<?php echo $unique_id; ?>" class="form-control" name="s"
               value="<?php the_search_query(); ?>"
               placeholder="<?php _e( 'Suche', 'transmedia' ); ?>"/>

        <button type="submit" class="btn btn-search"></button>

    </div>

</form>
