<?php get_header(); ?>

<section class="page-wrapper__wide rel-pos section grey">
	<article class="page-wrapper__wide__inner padding-tb-small">
		
 

			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<h1>
					<?php get_template_part( 'title-switch' ); ?>
				</h1>

				<div class="left-col">
					&nbsp;	
				</div>

				<div class="article-section">	
					<?php the_content(); ?>
				<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</div>

 

</article>				
</section>



<?php
get_footer( 'footer.php' );
?>