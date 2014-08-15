<?php 
	/*
	Template Name: About us page
	*/
	get_header();
	?>

<!-- Company overview -->
<section class="page-wrapper__wide rel-pos section current">
	<div class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="flexslider">
					<ul class="slides">
						<li>							
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- post -->
							<h1>
								<?php the_field('subtitle'); ?>
							</h1>
							<?php the_content(); ?>

							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
						</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="slider bottom">
	<div class="curve-holder blue"></div>
	<div class="flexslider2">
		<ul class="slides">
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/img/Image-2.jpg" alt="image01" class='bg-full-image' />
			</li>
		</ul>
	</div>
</div>					
</section>


 
<!-- Vision & values -->
<section class="page-wrapper__wide section" id="vision-values">
		<article class="page-wrapper__wide__inner padding-tb">
			
			<?php
				$title = get_field('title');
				$copy = get_field('copy');
				$quote = get_field('quote');
				// $video_cover = get_field('video_cover');
				// $video = get_field('video');
				// $excerpt = get_field('excerpt');
				// $transcript = get_field('transcript');
			?>

			<div class="left-col">
				<h1>
					<?php echo $title; ?>
				</h1>
				<?php echo $copy; ?>
			</div>
			 
			<div class="right-col">
			
				<blockquote>
					<p><?php echo $quote; ?></p>
				</blockquote>

			</div>
			
			<div class="clear"></div>
</article>
</section>

<!--Video - vimeo api-->	
<?php get_template_part('/vimeo-video'); ?>

<!-- Company overview -->
<section class="page-wrapper__wide rel-pos section current">
	<div class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="flexslider">
					<ul class="slides">
						<li>							
							<h1><?php the_field('company_history_title'); ?></h1>
							<?php the_field('company_history_copy'); ?>
						</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="slider bottom">
	<div class="curve-holder red"></div>
	<div class="flexslider2">
		<ul class="slides">
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/img/Image-2.jpg" alt="image01" class='bg-full-image' />
			</li>
		</ul>
	</div>
</div>					
</section>	

<?php
get_footer( 'footer.php' );
?>




