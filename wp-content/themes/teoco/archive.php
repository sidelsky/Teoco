<?php //Get the header
get_header();
?>

<section class="page-wrapper__wide sub-pages section grey">
	<div class="page-wrapper__wide__inner padding-tb">
		<h1>News</h1>
		<div class="left-col">
			<ul class="side-menu">
				<li>
					<a href="/latest/news/">All</a>
				</li>
				<?php $args = array(
				'type'            => 'yearly',
				'limit'           => '',
				'format'          => 'html', 
				'before'          => '',
				'after'           => '',
				'show_post_count' => false,
				'echo'            => 1,
				'order'           => 'DESC'
			); wp_get_archives( $args ); ?>
			</ul>
		</div>

		<div class="right-col">
			<ul class="post-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
				<a href="<?php the_permalink(); ?>">
					<li>
						<span class="the-time">
							<?php the_time('jS F Y') ?>
						</span>
							<?php the_title('<h2>','</h2>'); ?>
					</li>
				</a>
			
				<?php endwhile; ?>
				<!-- post navigation -->

				<footer class="pagenavi">
					<?php wp_pagenavi(); ?>
				</footer>

				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</ul>
		</div>
	</div>
</section>

<?php //Get the footer
get_footer();
?>


