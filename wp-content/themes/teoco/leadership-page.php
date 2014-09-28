<?php 
	/*
	Template Name: Leadership page
	*/
	get_header();
	?>


<!-- Management -->
<section class="page-wrapper__wide section current grey">
	<div class="page-wrapper__wide__inner padding-tb">
		<?php
			$title = get_field('title_m');
			$decription = get_field('description_m');
		?>
	<h1>
		<?php echo $title; ?>
	</h1>

		<div class="left-col">
			<?php echo $decription; ?>
		</div>

		<div class="right-col success">
			<!-- Images -->
				<?php if( have_rows('management_team') ): ?>

					<?php while( have_rows('management_team') ): the_row(); 
							// vars
					$icon = get_sub_field('member');
					$icon_2 = get_sub_field('member_2');
					$icon_3 = get_sub_field('member_3');

					$txt = get_sub_field('members_description');
					$txt_2 = get_sub_field('members_description_2');
					$txt_3 = get_sub_field('members_description_3');

					$name = get_sub_field('name');
					$name_2 = get_sub_field('name_2');
					$name_3 = get_sub_field('name_3');

					$title = get_sub_field('title');
					$title_2 = get_sub_field('title_2');
					$title_3 = get_sub_field('title_3');
					?>
					<ul>
					
					<?php if($icon) : ?>
						<li class="product">
							<div class="image-wrapper"><img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" /></div>
							<h3><?php echo $name; ?></h3>
							<span class="job-title"><?php echo $title; ?></span>
						</li>
					<?PHP endif; ?>
					
					<?php if($icon_2) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
							</div>
							<h3><?php echo $name_2; ?></h3>
							<span class="job-title"><?php echo $title_2; ?></span>
						</li>
					<?PHP endif; ?>
					
					<?php if($icon_3) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
							</div>
							<h3><?php echo $name_3; ?></h3>
							<span class="job-title"><?php echo $title_3; ?></span>
						</li>
					<?PHP endif; ?>
						
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


<!-- Board -->
<section class="page-wrapper__wide section">
	<div class="page-wrapper__wide__inner padding-tb">
	<?php
		$title = get_field('title_b');
		$decription = get_field('description_b');
	?>

	<h1>
		<?php echo $title; ?>
	</h1>
		<div class="left-col">
		<?php echo $decription; ?>
		</div>

		<div class="right-col success">
			<!-- Images -->
				<?php if( have_rows('board') ): ?>

					<?php while( have_rows('board') ): the_row(); 
							// vars
					$icon = get_sub_field('member');
					$icon_2 = get_sub_field('member_2');
					$icon_3 = get_sub_field('member_3');

					$txt = get_sub_field('members_description');
					$txt_2 = get_sub_field('members_description_2');
					$txt_3 = get_sub_field('members_description_3');

					$name = get_sub_field('name');
					$name_2 = get_sub_field('name_2');
					$name_3 = get_sub_field('name_3');

					$title = get_sub_field('title');
					$title_2 = get_sub_field('title_2');
					$title_3 = get_sub_field('title_3');
					?>
					<ul>
						
					<?php if($icon) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" />
							</div>
							<h3><?php echo $name; ?></h3>
							<span class="job-title"><?php echo $title; ?></span>
						</li>
					<?php endif; ?>
					
					<?php if($icon_2) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
							</div>
							<h3><?php echo $name_2; ?></h3>
							<span class="job-title"><?php echo $title_2; ?></span>
						</li>
					<?php endif; ?>
					
					<?php if($icon_3) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
							</div>
							<h3><?php echo $name_3; ?></h3>
							<span class="job-title"><?php echo $title_3; ?></span>
						</li>
					<?php endif; ?>
						
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


<!-- Board -->
<section class="page-wrapper__wide section grey">
	<div class="page-wrapper__wide__inner padding-tb">
	<?php
		$title = get_field('title_bz');
		$decription = get_field('description_bza');
	?>
	<h1>
		<?php echo $title; ?>
	</h1>
		<div class="left-col">
		<?php echo $decription; ?>
		</div>

		<div class="right-col success">
			<!-- Images -->
				<?php if( have_rows('senior_management_team') ): ?>

					<?php while( have_rows('senior_management_team') ): the_row(); 
							// vars
					$icon = get_sub_field('member');
					$icon_2 = get_sub_field('member_2');
					$icon_3 = get_sub_field('member_3');

					$txt = get_sub_field('members_description');
					$txt_2 = get_sub_field('members_description_2');
					$txt_3 = get_sub_field('members_description_3');

					$name = get_sub_field('name');
					$name_2 = get_sub_field('name_2');
					$name_3 = get_sub_field('name_3');

					$title = get_sub_field('title');
					$title_2 = get_sub_field('title_2');
					$title_3 = get_sub_field('title_3');
					?>
					<ul>
						
					<?php if($icon) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" />
							</div>
							<h3><?php echo $name; ?></h3>
							<span class="job-title"><?php echo $title; ?></span>
						</li>
					<?php endif; ?>
					
					<?php if($icon_2) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
							</div>
							<h3><?php echo $name_2; ?></h3>
							<span class="job-title"><?php echo $title_2; ?></span>
						</li>
					<?php endif; ?>
					
					<?php if($icon_3) : ?>
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
							</div>
							<h3><?php echo $name_3; ?></h3>
							<span class="job-title"><?php echo $title_3; ?></span>
						</li>
					<?php endif; ?>
						
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


<?php
get_footer( 'footer.php' );
?>