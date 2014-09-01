<!-- Vision & values -->
<section class="page-wrapper__wide section" id="vision-values">
	<article class="page-wrapper__wide__inner padding-tb">
		
		<?php
			$title = get_field('title');
			$copy = get_field('copy');
			$quote = get_field('quote');
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