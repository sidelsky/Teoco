<?php 
	/*
	Template Name: Success page
	*/
	get_header();
	?>

	<!-- Our success -->
	<?php if (get_field('success_title')) : ?>
		<section class="page-wrapper__wide section current grey" id="our-customers">
			<div class="page-wrapper__wide__inner padding-tb">

				<h1><?php the_field('success_title'); ?></h1>
				<?php the_field('success_content'); ?>

				<div class="right-col success padding-tb-small">

					<!-- Images -->
					<?php if( have_rows('success',25) ): ?>

						<?php while( have_rows('success',25) ): the_row(); 
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

							<?php if($icon) : ?>
								<li class="product">
									<div class="image-wrapper">
										<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" class="logo-img" />
									</div>
								</li>
							<?php endif; ?>

							<?php if($icon_2) : ?>
								<li class="product">
									<div class="image-wrapper">
										<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" class="logo-img" />
									</div>
								</li>
							<?php endif; ?>

							<?php if($icon_3) : ?>
								<li class="product">
									<div class="image-wrapper">
										<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" class="logo-img" />
									</div>
								</li>
							<?php endif; ?>

							<?php if($icon_4) : ?>
								<li class="product">
									<div class="image-wrapper">
										<img src="<?php echo $icon_4; ?>" alt="<?php echo $icon_4['alt'] ?>" class="logo-img" />
									</div>
								</li>
							<?php endif; ?>

							<?php if($icon_5) : ?>
								<li class="product">
									<div class="image-wrapper">
										<img src="<?php echo $icon_5; ?>" alt="<?php echo $icon_5['alt'] ?>" class="logo-img" />
									</div>
								</li>
							</ul>
						<?php endif; ?>

						<?php if($txt) : ?>
							<div class="logo-copy-wrapper">
								<div class="content">
									<?php echo $txt; ?>
									<div class="icon-link">
										<i class='fa fa-chevron-circle-up'></i>
										<a href="<?php echo $link; ?>">Visit site ></a>
									</div>
								</div>
							<?php endif; ?>

							<?php if($txt_2) : ?>
								<div class="content">
									<?php echo $txt_2; ?>
									<div class="icon-link">
										<i class='fa fa-chevron-circle-up'></i>
										<a href="<?php echo $link_2; ?>">Visit site ></a>
									</div>
								</div>
							<?php endif; ?>

							<?php if($txt_3) : ?>
								<div class="content">
									<?php echo $txt_3; ?>
									<div class="icon-link">
										<i class='fa fa-chevron-circle-up'></i>
										<a href="<?php echo $link_3; ?>">Visit site ></a>
									</div>
								</div>
							<?php endif; ?>

							<?php if($txt_4) : ?>
								<div class="content">
									<?php echo $txt_4; ?>
									<div class="icon-link">
										<i class='fa fa-chevron-circle-up'></i>
										<a href="<?php echo $link_4; ?>">Visit site ></a>
									</div>
								</div>
							<?php endif; ?>

							<?php if($txt_5) : ?>
								<div class="content">
									<?php echo $txt_5; ?>
									<div class="icon-link">
										<i class='fa fa-chevron-circle-up'></i>
										<a href="<?php echo $link_5; ?>">Visit site ></a>
									</div>
								</div>
							<?php endif; ?>

						</div>	
					<?php endwhile; wp_reset_query();?>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>	



<!-- Success stories -->
<?php if (get_field('success_stories_title')) : ?>

	<section class="page-wrapper__wide section" id="success-stories">
		<div class="page-wrapper__wide__inner padding-tb success">

			<h1><?php the_field('success_stories_title'); ?></h1>
			<?php the_field('success_stories_content'); ?>

			<div class="right-col success-stories padding-tb-small" id="content">

				<!-- Images -->
				<?php if( have_rows('success_stories_icons',25) ): ?>

					<?php while( have_rows('success_stories_icons',25) ): the_row(); 
				// vars
					$icons = get_sub_field('icons');
					$title = get_sub_field('title');
					$solution_product_name = get_sub_field('solution_product_name');
					$text = get_sub_field('text');
					$solutions_or_products_select = get_sub_field('solutions_or_products');
					?>
					<div class="item">
						<div class="products <?php echo $solutions_or_products_select; ?>">

							<div class="image-wrapper toggle <?php echo $solutions_or_products_select; ?>">
								<img src="<?php echo $icons; ?>" alt="<?php echo $icons['alt'] ?>" />
							</div>

							<div class="title-wrapper">
								<h2><?php echo $title; ?></h2>
								<span class='product-name'><?php echo $solution_product_name; ?></span>
							</div>

							<div class="inner toggle-inner">
								<?php echo $text; ?>
								<div class="icon-link">
									<i class='fa fa-chevron-circle-up'></i>
								</div>
							</div>

						</div>

						<div class="logo-copy-wrapper">
							<div class="content">
								<?php echo $txt; ?>
								<div class="icon-link">
									<i class='fa fa-chevron-circle-up'></i>
									<a href="<?php echo $link; ?>">Visit site ></a>
								</div>
							</div>
						</div>

					</div>


				<?php endwhile; wp_reset_query();?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>	


<!-- Awards -->
<?php if (get_field('award_title')) : ?>	 
	<section class="page-wrapper__wide section grey" id="awards-recognitions">
		<div class="page-wrapper__wide__inner padding-tb success">

			<h1><?php the_field('award_title'); ?></h1>
			<?php the_field('award_content'); ?>

			<div class="right-col success padding-tb-small">

				<!-- Images -->
				<?php if( have_rows('awards') ): ?>

					<?php while( have_rows('awards') ): the_row(); 
					// vars
					$icon_11 = get_sub_field('icon_11');
					$icon_22 = get_sub_field('icon_22');
					$icon_33 = get_sub_field('icon_33');
					$icon_44 = get_sub_field('icon_44');
					$icon_55 = get_sub_field('icon_55');

					$txt_11 = get_sub_field('text_11');
					$txt_22 = get_sub_field('text_22');
					$txt_33 = get_sub_field('text_33');
					$txt_44 = get_sub_field('text_44');
					$txt_55 = get_sub_field('text_55');
					?>
					<ul>
						
						<?php if($icon_11) : ?>
							<li class="product">
								<div class="image-wrapper">
									<img src="<?php echo $icon_11; ?>" alt="<?php echo $icon['alt'] ?>" class="logo-img" />
								</div>
							</li>
						<?php endif; ?>

						<?php if($icon_22) : ?>
							<li class="product">
								<div class="image-wrapper">
									<img src="<?php echo $icon_22; ?>" alt="<?php echo $icon_2['alt'] ?>" class="logo-img" />
								</div>
							</li>
						<?php endif; ?>

						<?php if($icon_33) : ?>
							<li class="product">
								<div class="image-wrapper">
									<img src="<?php echo $icon_33; ?>" alt="<?php echo $icon_3['alt'] ?>" class="logo-img" />
								</div>
							</li>
						<?php endif; ?>

						<?php if($icon_44) : ?>
							<li class="product">
								<div class="image-wrapper">
									<img src="<?php echo $icon_44; ?>" alt="<?php echo $icon_4['alt'] ?>" class="logo-img" />
								</div>
							</li>
						<?php endif; ?>

						<?php if($icon_55) : ?>
							<li class="product">
								<div class="image-wrapper">
									<img src="<?php echo $icon_55; ?>" alt="<?php echo $icon_5['alt'] ?>" class="logo-img" />
								</div>
							</li>
						<?php endif; ?>

					</ul>
					
					<div class="logo-copy-wrapper">

						<div class="content">
							<?php echo $txt_11; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

						<div class="content">
							<?php echo $txt_22; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

						<div class="content">
							<?php echo $txt_33; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

						<div class="content">
							<?php echo $txt_44; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

						<div class="content">
							<?php echo $txt_55; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

					</div>	

				<?php endwhile; wp_reset_query();?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>	

<?php
get_footer( 'footer.php' );
?>