<?php get_header(); ?>

<section class="page-wrapper__wide rel-pos section grey">
	<article class="page-wrapper__wide__inner padding-tb-small">

	<?php
		$event_date = get_field('event_date');
		$event_date_to = get_field('event_date_to');
		$event_location = get_field('event_location');
		$event_link = get_field('event_link');
		$event_icon = get_field('event_icon');
	?>
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<!-- post -->
				<h1>
					<?php get_template_part( 'title-switch' ); ?>
				</h1>

				<div class="left-col">
					<?php if($event_icon) : ?>
						<div class="img-container">
							<img src="<?php echo $event_icon ?>" alt="<?php echo $event_icon['alt']; ?>" class="thmb">
						</div>
						<?php endif; ?>
						&nbsp;
				</div>

				<div class="article-section">	
				
				<?php if( $event_date ) : ?>
					<p>
					<span class="the-time">
				<?php echo $event_date . $space. '-'. $space . $event_date_to;?>
					</span>
					<span class="the-location">
				<?php echo $space . $event_location; ?>
					</span>
					</p>
				<?php endif; ?>

					<?php the_content(); ?>

					<?php if($event_link) : ?>
						<span class="visit">
							<a href="<?php echo $event_link; ?>">Visit site ></a>
						</span>
					<?php endif; ?>

				<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>

			<footer class="single">
				<nav class="navigation text">
					<div class="link"><?php previous_post_link('< %link', 'Previous') ?></div> &nbsp; | &nbsp; 
					<div class="link"><?php next_post_link('%link >', 'Next') ?>
					</nav>

					<div class="social">
						<span class="text">share</span>
						<?php echo do_shortcode("[addtoany]"); ?>
					</div>

				</footer>

		</div>

<footer class="pagenavi">
	| <a href="/teoco.com/latest/events/">Back to events</a> |
</footer>

</article>				
</section>



<?php
get_footer( 'footer.php' );
?>