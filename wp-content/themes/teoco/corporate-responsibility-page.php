<?php 
	/*
	Template Name: Corporate responsibility page
	*/
	get_header();
	?>


<!-- Corporate responsibility -->
<section class="page-wrapper__wide rel-pos section">
	<article class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="flexslider">
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
							
							<div class="dropdown">
							<p>Please complete</p>
							<i class="fa fa-times-circle"></i>
								<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
								<!-- Download losange -->
							</div>

							<a class="losange" id="download" data-scroll data-options="easing: easeOutQuad" href="#latest">
								<span class="orange">Download</span>
							</a>

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
 

 

<?php
get_footer( 'footer.php' );
?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->
<? the_title(); ?>
<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>?>