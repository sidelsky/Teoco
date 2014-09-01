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
	<article class="page-wrapper__wide__inner padding-tb">
		
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

				<a class="losange red" href="<?php echo $download ?>" target="_blank">
					<span class="white">Download</span>
				</a>

		</div>
		
		<div class="right-col">
			
			<blockquote>
				<p><?php echo $quote; ?></p>
			</blockquote>

		</div>
		
		<div class="clear"></div>
	</article>
</section>

<?php
	get_footer( 'footer.php' );
?>