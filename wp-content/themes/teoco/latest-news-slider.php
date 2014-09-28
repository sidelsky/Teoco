<section class="page-wrapper__wide rel-pos section">
	<div class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="flexslider3">
				<h1>Latest News</h1>
					<ul class="slides">
						<?php
						$args = array(
							//'post__in' => array(8),
							'posts_per_page'   => 3,
							'offset'           => 0,
							'category'         => '',
							'orderby'          => 'post_date',
							'order'            => 'DESC',
							'include'          => '',
							'exclude'          => '',
							'meta_key'         => '',
							'meta_value'       => '',
							'post_type'        => 'post',
							'post_mime_type'   => '',
							'post_parent'      => '',
							'post_status'      => 'publish',
							'suppress_filters' => false );
						query_posts($args); if ( have_posts() ) while ( have_posts() ) : the_post();
						?>
						<li>
						<div class="inner">
								<h2>
									<?php the_title(); ?>
								</h2>
								<?php //Controls the excerpt length via the 'excerpt_length' cutom field within posts. 
									$excerpt_length = get_field('excerpt_length');
									if (get_the_excerpt()) {
										echo the_excerpt();
									} elseif (get_field('excerpt_length') == 22) {
									excerptMyLength($excerpt_length);
									} else {
									excerptMyLength(1);
									}
								?>
								<a href="/teoco.com/latest/news/" class="link-arrows white">
									<i class="fa fa-angle-right green"></i>
								</a>
							</div>							
						</li>
					<?php endwhile; wp_reset_query();?>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="slider bottom">
	<div class="curve-holder green"></div>
	<div class="flexslider4">
		<ul class="slides">
			<li>
				<img src="<?php echo get_field('news_slider_background_image'); ?>" alt="Latest news" class="bg-full-image" />
			</li>
		</ul>
	</div>
</div>					
</section>