<?php 
/*
Template Name: Sub page
*/
get_header();
?>
 <section class="page-wrapper__wide what-we-do-bg section">
  <article class="page-wrapper__wide__inner padding-tb">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- post -->
        <h1>
          <?php include 'title-switch.inc.php'; ?>
        </h1>

        <div class="lp-image-container">         
            <img src="<?php the_field('icon_image'); ?>">
        </div>

        <?php the_content(); ?>

      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
        <!-- no posts found -->
    <?php endif; ?>
  </article>
</section>

<?php
  get_footer( 'footer.php' );
?>