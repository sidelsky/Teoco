<?php 
	/*
	Template Name: Office locations
	*/
	get_header();
	?>

	<section class="page-wrapper__wide sub-pages section current grey">
		<div class="page-wrapper__wide__inner padding-tb">
			<h1>Office locations</h1>
			<div class="left-col">
				<ul class="side-menu">
					<?php simple_section_nav('before_widget=<li>&after_widget=</li>'); ?>
				</ul>

				<p>For further information</p>

				<a class="losange red" href="/contact-us/contact-us-form/">
					<span class="white">Contact us</span>
				</a>

			</div>

			<div class="right-col">
				<div class="article-section">	
					<?php the_title('<h2>','</h2>'); ?>
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
			</div>
		</div>
	</div>
</section>

<?php
get_footer( 'footer.php' );
?>




