<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="screen-reader-text sr-only" for="s"><?php _x( 'Szukaj:', config('theme.slug') ); ?></label>
  <div class="d-flex">
    <input class="searchform__input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Szukaj', config('theme.slug') ); ?>">
    <button class="searchform__button" >
      <i class="fas fa-search"></i>
      <span class="sr-only"><?php echo esc_attr_x( 'Szukaj', config('theme.slug') ); ?></span>
    </button>
  </div>
</form>
