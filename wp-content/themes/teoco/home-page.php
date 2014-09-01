<?php 
	/*
	Template Name: Home page
	*/
	get_header();
	?>

	<!-- Primary slider -->
	<section class="page-wrapper__wide rel-pos section current">
		<div class="page-wrapper__wide__inner padding-tb-small">
			<div class="article-section">
				<div class="slider top">
					<div class="flexslider">
						<!-- Repeat section -->
						<?php if( have_rows('carousel') ): ?>
							<ul class="slides">
								<?php while( have_rows('carousel') ): the_row(); 
								// vars
								$title = get_sub_field('title');
								$text = get_sub_field('text');
								?>
								<li>
									<h1><?php echo $title; ?></h1>
									<?php echo $text; ?>
								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="slider bottom">
		<div class="curve-holder red"></div>
		<div class="flexslider2">
			<?php if( have_rows('carousel_background_image') ): ?>
				<ul class="slides">
					<?php while( have_rows('carousel_background_image') ): the_row(); 
						// vars
					$image = get_sub_field('image');
					?>
					<li>
						<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="bg-full-image" />
					</li>
				<?php endwhile; wp_reset_query();?>
			</ul>
		<?php endif; ?>
	</div>
</div>
</section>

<!-- What we do -->
<section class="page-wrapper__wide what-we-do-bg section">
	<div class="page-wrapper__wide__inner padding-tb">
		<h1>What we do</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto vitae sit consequuntur alias officiis accusantium, totam voluptatibus, commodi porro at odit aliquid deserunt fugiat molestias, voluptates quo sapiente magnam nisi.</p>
		<ul class="blob-buttons padding-tb-small">
			<li>
				<a href="<?php echo get_permalink(22); ?>" class="purple">
					<span>
						<?php echo get_the_title(22); //Calls Solutions heading ?>
						<i class="fa fa-angle-right"></i>
					</span>
				</a>
			</li>
			<li>
				<a href="<?php echo get_permalink(23); ?>" class="blue">
					<span>
						<?php echo get_the_title(23); //Calls Products heading ?>
						<i class="fa fa-angle-right"></i>
					</span>
				</a>
			</li>
		</ul>
	</div>
</section>

<!-- Latest news -->
<?php get_template_part( '/latest-news-slider' ); ?>

<!-- Our success -->
<section class="page-wrapper__wide grey section">
		<div class="page-wrapper__wide__inner padding-tb">
			<div class="left-col">
				<?php
					$args = array(
					'post__in' => array(25),
					'posts_per_page'   => 1,
					'offset'           => 0,
					'category'         => '',
					'orderby'          => 'post_date',
					'order'            => 'ASC',
					'include'          => '',
					'exclude'          => '',
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'page',
					'post_mime_type'   => '',
					'post_parent'      => '',
					'post_status'      => 'publish',
					'suppress_filters' => false );
					query_posts($args); if ( have_posts() ) while ( have_posts() ) : the_post();
				?>
					<h1>
						<?php the_title(); ?>
					</h1>
				<?php the_content(); ?>
			</div>
			<?php endwhile; ?>
			<div class="right-col success">
			
			<?php if( have_rows('success',25) ): ?>
				 <ul>
					<?php while( have_rows('success',25) ): the_row(); 
						// vars
							$icon = get_sub_field('icon');
							$icon_2 = get_sub_field('icon_2');
							$icon_3 = get_sub_field('icon_3');
					?>

						<li class="product">
							<div class="image-wrapper">
								<a href="/success/">
									<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" />
								</a>
							</div>
						</li>

						<li class="product">
							<div class="image-wrapper">
								<a href="/success/">
									<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
								</a>
							</div>
						</li>

						<li class="product">
							<div class="image-wrapper">
								<a href="/success/">
									<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
								</a>
							</div>
						</li>

				<?php endwhile; wp_reset_query();?>
		 </ul>
		<?php endif; ?>
		</div>
		</div>
	</section>

<!-- Latest -->
<?php get_template_part( '/latest-content' ); ?>

<?php
get_footer( 'footer.php' );
?>