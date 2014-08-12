<?php 
	/*
	Template Name: Success page
	*/
	get_header();
	?>


	<!-- Our success -->
	<?php if (get_field('success_title')) : ?>
	<section class="page-wrapper__wide section current">
		<div class="page-wrapper__wide__inner padding-tb">
			
			<div class="left-col">
				<h1><?php the_field('success_title'); ?></h1>
				<?php the_field('success_content'); ?>
			</div>

			<div class="right-col success">

				<!-- Images -->
				<?php if( have_rows('success',25) ): ?>

					<?php while( have_rows('success',25) ): the_row(); 
							// vars
					$icon = get_sub_field('icon');
					$icon_2 = get_sub_field('icon_2');
					$icon_3 = get_sub_field('icon_3');

					$txt = get_sub_field('text');
					$txt_2 = get_sub_field('text_2');
					$txt_3 = get_sub_field('text_3');

					$link = get_sub_field('link');
					$link_2 = get_sub_field('link_2');
					$link_3 = get_sub_field('link_3');
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
					</div>	
				<?php endwhile; wp_reset_query();?>
			<?php endif; ?>
		</div>
	</div>
</section>
<?php endif; ?>	



<!-- Success stories -->
<?php if (get_field('success_stories_title')) : ?>

<section class="page-wrapper__wide section">
	<div class="page-wrapper__wide__inner padding-tb success">
		
		<div class="left-col">
			<h1><?php the_field('success_stories_title'); ?></h1>
			<?php the_field('success_stories_content'); ?>
		</div>

		<div class="right-col success-stories">

			<!-- Images -->
			<?php if( have_rows('success_stories_icons',25) ): ?>
				
				<?php while( have_rows('success_stories_icons',25) ): the_row(); 
				// vars
				$icons = get_sub_field('icons');
				$title = get_sub_field('title');
				$solution_product_name = get_sub_field('solution_product_name');
				$text = get_sub_field('text');
				?>
				<ul>
					
					<li class="products">
						<div class="image-wrapper toggle">
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
				</div>

			<?php endwhile; wp_reset_query();?>
		<?php endif; ?>
</div>
</section>
<?php endif; ?>	


<!-- Awards -->
<?php if (get_field('award_title')) : ?>	 
	<section class="page-wrapper__wide section">
		<div class="page-wrapper__wide__inner padding-tb success">
			
			<div class="left-col">
				<h1><?php the_field('award_title'); ?></h1>
				<?php the_field('award_content'); ?>
			</div>

			<div class="right-col success">

				<!-- Images -->
				<?php if( have_rows('awards',25) ): ?>

					<?php while( have_rows('awards',25) ): the_row(); 
							// vars
					$icon = get_sub_field('icon');
					$icon_2 = get_sub_field('icon_2');
					$icon_3 = get_sub_field('icon_3');

					$txt = get_sub_field('text');
					$txt_2 = get_sub_field('text_2');
					$txt_3 = get_sub_field('text_3');
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
					</ul>

					<div class="logo-copy-wrapper">
						<div class="content">
							<?php echo $txt; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

						<div class="content">
							<?php echo $txt_2; ?>
							<div class="icon-link">
								<i class='fa fa-chevron-circle-up'></i>
							</div>
						</div>

						<div class="content">
							<?php echo $txt_3; ?>
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