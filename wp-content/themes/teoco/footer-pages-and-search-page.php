<?php 
	/*
	Template Name: Footer and search results page
	*/
	get_header();
	?>

	<!-- Corporate responsibility -->
	<section class="page-wrapper__wide rel-pos section">
		<article class="page-wrapper__wide__inner padding-tb-small">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- post -->
					<h1>
						<?php include 'title-switch.inc.php'; ?>
					</h1>
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