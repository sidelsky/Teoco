<?php 
	/*
	Template Name: Home page
	*/
	get_header();
	?>

	<section class="page-wrapper__wide">
		<article class="page-wrapper__wide__inner padding-tb">
			<h1>What we do</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto vitae sit consequuntur alias officiis accusantium, totam voluptatibus, commodi porro at odit aliquid deserunt fugiat molestias, voluptates quo sapiente magnam nisi.</p>
			<div class="cols">1</div>
			<div class="cols">2</div>
			<div class="cols">3</div>
			<div class="cols">4</div>
			<div class="cols">5</div>
			<div class="cols">6</div>
			<div class="cols">7</div>
			<div class="cols">8</div>
			<div class="cols">9</div>
			<div class="cols">10</div>
			<div class="cols">11</div>
			<div class="cols">12</div>
		</article>
	</section>


	<section class="page-wrapper__wide rel-pos">
		<article class="page-wrapper__wide__inner padding-tb-small">
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
	</article>

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
						<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />
					</li>
				<?php endwhile; wp_reset_query();?>
			</ul>
		<?php endif; ?>
	</div>
</div>
</section>

<section class="page-wrapper__wide ">
	<article class="page-wrapper__wide__inner padding-tb what-we-do-bg">
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
	</article>
</section>

<section class="page-wrapper__wide rel-pos">
	<article class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="flexslider">
					<ul class="slides">
						<?php
						$args = array(
							'posts_per_page'   => 5,
							'offset'           => 0,
							'category'         => '',
							'orderby'          => 'post_date',
							'order'            => 'ASC',
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
							<h1>
								<?php the_title(); ?>
							</h1>
							<?php the_content(); ?>
						</li>
					<?php endwhile; wp_reset_query();?>
				</ul>
			</div>
		</div>
	</div>
</article>
<div class="slider bottom">
	<div class="curve-holder green"></div>
	<div class="flexslider2">
		<ul class="slides">
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/img/Image-2.jpg" alt="image01" />
			</li>
		</ul>
	</div>
</div>					
</section>


<?php
get_footer( 'footer.php' );
?>