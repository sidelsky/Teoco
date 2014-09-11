<?php 
	/*
	Template Name: Office locations
	*/
	get_header();
	?>

	<section class="page-wrapper__wide sub-pages section current grey">
		<div class="page-wrapper__wide__inner padding-tb">
			<?php if(is_page('contact-us-form')) : ?>
				<?php the_title('<h1>','</h1>'); ?>
			<?php else : ?>
				<h1>Office locations</h1>
			<?php endif; ?>

				
			<div class="left-col">
				<?php if(is_page('contact-us-form')) : ?>
	 			 
				<p>See our office locations</p>
				<a class="losange red" href="/contact-us/">
					<span class="white">Locations</span>
				</a>
				<?php else : ?>
 				<ul class="side-menu">
					<?php simple_section_nav('before_widget=<li>&after_widget=</li>'); ?>
				</ul>
				<p>For further information</p>
				<a class="losange red" href="/contact-us/contact-us-form/">
					<span class="white">Contact us</span>
				</a>
				<?php endif; ?>
			</div>

			<div class="right-col">
				<div class="article-section">	
					<?php if(is_page('contact-us-form')) : ?>
						<h2>&nbsp;</h2>
					<?php else : ?>
						<?php the_title('<h2>','</h2>'); ?>
					<?php endif; ?>


					<?php if( have_rows('office_locations') ): ?>
						<?php while( have_rows('office_locations') ): the_row(); 
						// vars
						$name_and_location_title = get_sub_field('name_and_location_title');
						$address_details = get_sub_field('address_details');
						$is_main_office = get_sub_field('is_main_office');
						?>

						<?php if( $is_main_office ) : ?>

						<h3>Main office</h3>
						<div class="is-main-office">
						<h4><?php echo $name_and_location_title; ?></h4>
						<?php echo $address_details; ?>
						</div>

						<?php else: ?>

						<h4><?php echo $name_and_location_title; ?></h4>
						<?php echo $address_details; ?>	

						<?php endif; ?>	

					<?php endwhile; wp_reset_query();?>
				<?php endif; ?>
				
				<?php if(is_page('contact-us-form')) : ?>
					<div class="office-locations">
						<?php echo do_shortcode("[gravityform id=3 title=false description=false ajax=true]"); ?>
					</div>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<?php
get_footer( 'footer.php' );
?>




