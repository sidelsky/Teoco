<?php 
/*
Template Name: Sub page
*/
get_header();
?>


<?php if (is_tree(22)) : ?>
  <section class="page-wrapper__wide section sub-header solution">
  <?php elseif(is_tree(23)) : ?>
    <section class="page-wrapper__wide section sub-header product">
    <?php else : ?>
      <section class="page-wrapper__wide section sub-header">
      <?php endif; ?>
      <article class="page-wrapper__wide__inner">
        <div class="sub-wrapper">
          <div class="sub-title-container">
            <span>
              <h1>
                <?php include 'title-switch.inc.php'; ?>
              </h1>
            </span>
          </div>
          <div class="sub-image-container">
            <span>
              <img src="<?php the_field('icon_image'); ?>">
            </span>
          </div>
        </div>
      </article>
    </section>

    <section class="page-wrapper__wide sub-pages section">
      <div class="page-wrapper__wide__inner padding-tb">
        <h1><?php the_field('job_opportunities_title'); ?></h1>
        <div class="left-col">
          <ul class="side-menu">  
            <?php simple_section_nav('before_widget=<li>&after_widget=</li>'); ?>
          </ul>
          <!--Links -->
          <?php if( have_rows('links') ): ?>
            <ul class="side-menu links">
              <?php while( have_rows('links') ): the_row(); 
              // vars
              $title = get_sub_field('title');
              ?>
              <li class="link">
                  <a href="<?php the_sub_field('link');?>" target="_blank" ><?php echo $title; ?></a>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
      </div>

      <?php if (is_tree(22)) : ?>
      <div class="right-col solution">
      <?php elseif(is_tree(23)) : ?>
      <div class="right-col product">
      <?php else : ?>
      <div class="right-col">
      <?php endif; ?>
        <article>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <?php the_content(); ?>
          <?php endwhile; ?>
          <!-- post navigation -->
        <?php else: ?>
          <!-- no posts found -->
        <?php endif; ?>
      </article>
    </div>
  </div>
</section>

<?php
get_footer( 'footer.php' );
?>