<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<h1>
		<?php get_template_part( '/title-switch' ); ?>
	</h1>
	<?php the_content(); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<!-- no posts found -->
<?php endif; ?>