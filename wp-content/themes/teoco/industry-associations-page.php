<?php 
	/*
	Template Name: Industry association page
	*/
	get_header();
	?>

<div class="current"></div>
	<?php 

				// check for rows (parent repeater)
	if( have_rows('group') ): ?>

			<?php 
			// loop through rows (parent repeater)
			while( have_rows('group') ): the_row(); ?>
	<section class="page-wrapper__wide section grey">
		<div class="page-wrapper__wide__inner padding-tb-small">
			<h1><?php the_sub_field('title'); ?></h1>
			<p class="large"><?php the_sub_field('content'); ?></p>
 
			<div class="right-col success">	
			<?php 
			// check for rows (sub repeater)
			if( have_rows('icons') ): ?>

			<?php while( have_rows('icons') ): the_row(); 
						// vars
			$icon = get_sub_field('icon');
			$icon_2 = get_sub_field('icon_2');
			$icon_3 = get_sub_field('icon_3');
			$icon_4 = get_sub_field('icon_4');
			$icon_5 = get_sub_field('icon_5');

			$txt = get_sub_field('text');
			$txt_2 = get_sub_field('text_2');
			$txt_3 = get_sub_field('text_3');
			$txt_4 = get_sub_field('text_4');
			$txt_5 = get_sub_field('text_5');

			$link = get_sub_field('link');
			$link_2 = get_sub_field('link_2');
			$link_3 = get_sub_field('link_3');
			$link_4 = get_sub_field('link_4');
			$link_5 = get_sub_field('link_5');
			?>

			<ul>

				<li class="product">
					<div class="image-wrapper">
						<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" />
					</div>
				</li>

				<li class="product">
					<div class="image-wrapper">
						<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
					</div>
				</li>

				<li class="product">
					<div class="image-wrapper">
						<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
					</div>
				</li>

				<li class="product">
					<div class="image-wrapper">
						<img src="<?php echo $icon_4; ?>" alt="<?php echo $icon_4['alt'] ?>" />
					</div>
				</li>

				<li class="product">
					<div class="image-wrapper">
						<img src="<?php echo $icon_5; ?>" alt="<?php echo $icon_5['alt'] ?>" />
					</div>
				</li>

			</ul>


			<div class="logo-copy-wrapper">

				<div class="content">
					<?php echo $txt; ?>
					<div class="icon-link">
						<i class='fa fa-chevron-circle-up'></i>
						<a href="<?php echo $link; ?>">Visit site ></a>
					</div>
				</div>

				<div class="content">
					<?php echo $txt_2; ?>
					<div class="icon-link">
						<i class='fa fa-chevron-circle-up'></i>
						<a href="<?php echo $link_2; ?>">Visit site ></a>
					</div>
				</div>

				<div class="content">
					<?php echo $txt_3; ?>
					<div class="icon-link">
						<i class='fa fa-chevron-circle-up'></i>
						<a href="<?php echo $link_3; ?>">Visit site ></a>
					</div>
				</div>

				<div class="content">
					<?php echo $txt_4; ?>
					<div class="icon-link">
						<i class='fa fa-chevron-circle-up'></i>
						<a href="<?php echo $link_4; ?>">Visit site ></a>
					</div>
				</div>

				<div class="content">
					<?php echo $txt_5; ?>
					<div class="icon-link">
						<i class='fa fa-chevron-circle-up'></i>
						<a href="<?php echo $link_5; ?>">Visit site ></a>
					</div>
				</div>

			</div>


		<?php endwhile; ?>

	<?php endif; //if( get_sub_field('items') ): ?>

</div>
</div>
</section>
<?php endwhile; // while( has_sub_field('to-do_lists') ): ?>

<?php endif; // if( get_field('to-do_lists') ): ?>






	<?php
	get_footer( 'footer.php' );
	?>