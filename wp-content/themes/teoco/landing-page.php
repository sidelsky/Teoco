<?php 
/*
Template Name: Landing page
*/
get_header();
?>

<section class="page-wrapper__wide  section">
  <div class="page-wrapper__wide__inner padding-tb">
    <?php
    //$image_icon = get_field('image_icon');
    $args = array(
      'post_type'      => 'page',
      'posts_per_page' => -1,
      'post_parent'    => $post->ID,
      'order'          => 'ASC',
      'orderby'        => 'menu_order'
      );
    $parent = new WP_Query( $args );
    if ( $parent->have_posts() ) : ?>
    <ul class="landing-page">
      <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
        <li id="parent-<?php the_ID(); ?>" class="parent-page">
        <a href="<?php the_permalink(); ?>">
          <div class="lp-content">
            <span>
              <h1>
                <?php include 'title-switch.inc.php'; ?>
              </h1>
              <?php the_excerpt(); ?>
            </span>
          </div>
           <div class="lp-image-container">         
            <img src="<?php the_field('icon_image'); ?>">
          </div>
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
  <?php endif; wp_reset_query(); ?>
</div>
</section>

<?php
get_footer( 'footer.php' );
?>