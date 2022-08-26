<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <script
      src="https://kit.fontawesome.com/59750f7ec4.js"
      crossorigin="anonymous"
    ></script>
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

    <header>
      <div class="header-top">
        <div class="header-logo">
          <a href="<?php echo esc_url(home_url('/'));?>"><?php bloginfo('name');?></a>
					  <?php 
if ( wp_is_mobile() ) {
   echo do_shortcode( ' [responsive_slider_menu]' );
}
?>
        </div>
        <div class="header-searchbar">
          <form>
            <label for="searchQuery">
              <i class="fas fa-search"></i>
            </label>
            <input
              type="search"
              id="searchQuery"
              name="searchQuery"
              placeholder="Find your dream car"
            />
          </form>
        </div>
        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                        <nav class="header-nav-container"  aria-label="<?php esc_attr_e( 'Primary Menu', 'morent' ); ?>">
                             <?php
                                 wp_nav_menu( array(
                                     'theme_location' => 'primary',
                                     'menu_class'     => 'header-nav',
                                    ) );
                             ?>
                         </nav><!-- .main-navigation -->
                     <?php endif; ?>
		  
		  

       

      </div>
    </header>

    <div id="header-menu" class="header-menu col hide_mobile sticky">
                     

                 </div><!-- .site-header-menu -->

