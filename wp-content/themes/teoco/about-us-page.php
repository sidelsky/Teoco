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
					<div class="zflexslider">
						<ul class="slides">
							<li>							
								<?php get_template_part( '/generic-page-loop' ); ?>
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
					<?php $image = get_field('image_co'); ?>
					<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="bg-full-image" />
				</li>
			</ul>
		</div>
	</div>					
</section>



<!-- Vision & values -->
<?php get_template_part( '/copy-with-blockquote' ); ?>

<!--Video - vimeo api-->	
<?php/* get_template_part('/vimeo-video'); */?>

<!-- Youtube video -->
<?php get_template_part('/youtube-video'); ?>

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
					<?php $image = get_field('image_his'); ?>
					<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="bg-full-image" />
				</li>
			</ul>
		</div>
	</div>					
</section>	

<?php
get_footer( 'footer.php' );
?>




