<?php get_header();?>

    <main class="main-content">
      <div class="row-cars">
      <?php
$args = array(
    'post_type' => 'cars',
    'posts_per_page' => 9,
	'orderby' => 'date',
            'order' => 'ASC'
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="item-car">
          <h3 class="car-name"><?php the_title(); ?></h3>

          <?php $categories = get_the_category();?>
 
          <?php if ( ! empty( $categories ) ) {?>
        


          <div class="car-category"><?php echo esc_html( $categories[0]->name );?></div> <?php }?>
          <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <img class="car-image" src="<?php echo $image[0]; ?>" />
          <ul class="car-spec">
            <li class="gas-tank"><?php echo get_post_meta($post->ID, 'gas', true); ?></li>
            <li class="car-gear"><?php echo get_post_meta($post->ID, 'gear', true); ?></li>
            <li class="number-seats"><?php echo get_post_meta($post->ID, 'people', true); ?> People</li>
          </ul>
          <div class="bottom-car">
            <div class="price">$<?php echo get_post_meta($post->ID, 'price', true); ?>/<span class="day">day</span></div>
            <button class="rent-now" href="<?php echo get_post_meta($post->ID, 'rent-url', true); ?>">Rent now</button>
          </div>
        </div>
    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
		</div>
       
      
   
      <button class="show-more">Show more car</button>
    </main>
    <footer class="footer">
      <div class="footer-top">
        <div class="footer-logo">
            <a href="#">Morent</a>
            <p>Our vision is to provide convenience<br> and help increase your sales business</p>
        </div>
        <div class="footer-menu">
          <ul class="footer-menu-list">
            <header>About</header>
                <li>How it works</li>
                <li>Featured</li>
                <li>Partnership</li>
                <li>Business Relation</li>
          </ul>
          <ul class="footer-menu-list">
            <header>Community</header>
                <li>Events</li>
                <li>Blog</li>
                <li>Podcast</li>
                <li>Invite a friend</li>
          </ul>
          <ul class="footer-menu-list">
            <header>Socials</header>
                <li>Discord</li>
                <li>Instagram</li>
                <li>Twitter</li>
                <li>Facebook</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
          <div class="copyright">&copy; 2022 MORENT. All rights reserved</div>
          <div class="privacy-policy">Privacy & Policy</div>
          <div class="terms-conditions">Terms & Conditions</div>
      </div>
    </footer>
  </body>
</html>
