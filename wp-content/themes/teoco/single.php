<?php //Get the header
get_header();
?>

<section class="page-wrapper__wide sub-pages section grey">
	<div class="page-wrapper__wide__inner padding-tb">
		<h1>News</h1>
		<div class="left-col">
			<ul class="side-menu">
				<li>
					<a href="/teoco.com/latest/news/">All</a>
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

			<article class="right-col article-section">

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- post -->
					<span class="the-time">
						<?php the_time('jS F Y') ?>
					</span><br>
					<h2>
						<?php the_title(); ?>
					</h2>
					<?php the_content(); ?>

					<?php echo get_next_posts_link( 'Next' ); ?>
					<?php echo get_previous_posts_link( 'Previous' ); ?>

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
						<!--
							<ul>
								<li>
									<a href="#" class="sc">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="sc">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="sc">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="sc">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="text">Share</li>
							</ul>
						-->
					</div>

				</footer>

			</article>

			<footer class="pagenavi">
					| <a href="http://79.170.44.125/teoco.com/latest/news/">Back to news</a> |
			</footer>

		</div>
	</section>

<?php //Get the footer
get_footer();
?>


