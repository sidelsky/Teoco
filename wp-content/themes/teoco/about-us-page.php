<?php 
	/*
	Template Name: About us page
	*/
	get_header();
	?>

<!-- Company overview -->
<section class="page-wrapper__wide rel-pos section">
	<article class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="flexslider">
					<ul class="slides">
						<li>							
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- post -->
							<?php the_title('<h1>','</h1>'); ?>
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
</article>
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
				$video_cover = get_field('video_cover');
				$video = get_field('video');
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
			
			<!--Video - vimeo api-->	
			<div class='js-video'>
				<img src="<?php echo $video_cover; ?>" alt="" height='100%' width='100%' id="play-cover" />
				<?php echo "<iframe id='video' src='http://player.vimeo.com/video/$video?api=1&player_id=video' width='100%' height='400' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>" ?> 				
		 	</div>
			
			<div class="video-status">
				<p>Video: <span class="status">...</span></p>
				<!--
					<p><button>Play</button> <button>Pause</button></p>
				-->
			</div>

			<!--End Video - vimeo api-->

		</article>
	</section>

<?php
get_footer( 'footer.php' );
?>




