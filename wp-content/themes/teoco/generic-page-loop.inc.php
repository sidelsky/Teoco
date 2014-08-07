<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<h1>
		<?php include 'title-switch.inc.php'; ?>
	</h1>
	<?php the_content(); ?>

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
	<!-- no posts found -->
<?php endif; ?>