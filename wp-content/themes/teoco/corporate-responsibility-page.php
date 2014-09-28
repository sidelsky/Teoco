<?php 
	/*
	Template Name: Corporate responsibility page
	*/
	get_header();
	?>


<!-- Corporate responsibility -->
<section class="page-wrapper__wide rel-pos section">
	<div class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="zflexslider">
					<ul class="slides">
						<li>							
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<!-- post -->
							<h1>
								<?php the_title(); ?>
							</h1>
								<?php the_content(); ?>
							<?php endwhile; ?>
							<!-- post navigation -->
							<?php else: ?>
							<!-- no posts found -->
							<?php endif; ?>
							
							<?php/*
							<div class="dropdown">
							<p>Please complete</p>
							<i class="fa fa-times-circle"></i>
								<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
								<!-- Download losange -->
							</div>
							*/?>

						</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="slider bottom">
	<div class="curve-holder blue"></div>
	<div class="flexslider">
		<ul class="slides">
			<li>
				<?php $image = get_field('image_cr'); ?>
					<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="bg-full-image" />
			</li>
		</ul>
	</div>
</div>					
</section>
 
<?php
get_footer( 'footer.php' );
?>