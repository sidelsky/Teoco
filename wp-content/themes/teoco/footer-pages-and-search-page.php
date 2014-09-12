<?php 
	/*
	Template Name: Footer and search results page
	*/
	get_header();
	?>


 
	<section class="page-wrapper__wide rel-pos section grey">
		<article class="page-wrapper__wide__inner padding-tb-small">
		
				<?php if (is_page('site-map')) : ?>
					<h1>
						<?php get_template_part( 'title-switch' ); ?>
					</h1>

				<div class="left-col">
					&nbsp;
				</div>
					
				<div class="article-section" id="sitemap">
					<?php/* echo do_shortcode("[simple-sitemap]"); */?>
					<ul>
						<?php wp_list_pages('title_li='); ?>
					</ul>
				</div>

				<?php else : ?>	

				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<!-- post -->
					<h1>
						<?php get_template_part( 'title-switch' ); ?>
					</h1>

				<div class="left-col">
					<?php if (is_page('support')) : ?>
						<p>For further information</p>

						<a class="losange red" href="/contact-us/contact-us-form/">
							<span class="white">Contact us</span>
						</a>

					<?php endif; ?>
					&nbsp;	
				</div>

				<div class="article-section">	
					<?php the_content(); ?>
				<?php endwhile; ?>
				<!-- post navigation -->
			<?php else: ?>
				<!-- no posts found -->
			<?php endif; ?>
		</div>
	
	<?php endif; ?>

	</article>				
</section>



<?php
get_footer( 'footer.php' );
?>