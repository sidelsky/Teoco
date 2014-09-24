<?php 
	/*
	Template Name: Latest
	*/
	get_header();
	?>

	<!-- Latest news -->
	<?php get_template_part( '/latest-news-slider' ); ?>

	<!-- Copy with blockquote - In the media -->
	<?php get_template_part( '/copy-with-blockquote' ); ?>

	<!-- Latest -->
	<?php get_template_part( '/latest-content' ); ?>

	<!-- Latest -->
	<section class="page-wrapper__wide section" id="vision-values">
		<div class="page-wrapper__wide__inner padding-tb">

			<?php
			$title = get_field('title_3');
			$copy = get_field('copy_3');
			$quote = get_field('quote_3');
			$download = get_field('download_3');
			?>

			<div class="left-col">
				<h1>
					<?php echo $title; ?>
				</h1>
				<?php echo $copy; ?>

				<?php if ($download) : ?>

				<a href="<?php echo $download ?>" class="link-arrows red" target="_blank">
					<i class="fa fa-angle-right white"></i>
				</a>

				<?php else : ?>	

				<section class="latest-download">
					<div class="dropdown latest">
						<div class="contain">
							<p>Please complete</p>
							<i class="fa fa-times-circle"></i>
						</div>
						<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
						<!-- Download losange -->
					</div>

					<a class="losange red" id="download" data-scroll data-options="easing: easeOutQuad" href="#latest">
						<span class="white">Download</span>
					</a>
				</section>	
				 
				<?php endif; ?>

			</div>

			<div class="right-col">

				<blockquote>
					<p><?php echo $quote; ?></p>
				</blockquote>

			</div>

			<div class="clear"></div>
		</div>
	</section>

	<?php
	get_footer( 'footer.php' );
	?>