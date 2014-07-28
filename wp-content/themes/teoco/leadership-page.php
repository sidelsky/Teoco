<?php 
	/*
	Template Name: Leadership page
	*/
	get_header();
	?>


<!-- Our success -->
<section class="page-wrapper__wide section current">
	<article class="page-wrapper__wide__inner padding-tb">

		<div class="left-col">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<h1><?php/* the_field('success_title'); */?>
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
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
						
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" />
							</div>
							<h3><?php echo $name; ?></h3>
							<?php echo $title; ?>
						</li>

						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
							</div>
							<h3><?php echo $name_2; ?></h3>
							<?php echo $title_2; ?>
						</li>

						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
							</div>
							<h3><?php echo $name_3; ?></h3>
							<?php echo $title_3; ?>
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

	</article>
</section>
 

<!-- Our success -->
<section class="page-wrapper__wide section current">
	<article class="page-wrapper__wide__inner padding-tb">

		<div class="left-col">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<h1><?php/* the_field('success_title'); */?>
			<?php the_title(); ?>
		</h1>
		<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
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
						
						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon; ?>" alt="<?php echo $icon['alt'] ?>" />
							</div>
							<h3><?php echo $name; ?></h3>
							<?php echo $title; ?>
						</li>

						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_2; ?>" alt="<?php echo $icon_2['alt'] ?>" />
							</div>
							<h3><?php echo $name_2; ?></h3>
							<?php echo $title_2; ?>
						</li>

						<li class="product">
							<div class="image-wrapper">
								<img src="<?php echo $icon_3; ?>" alt="<?php echo $icon_3['alt'] ?>" />
							</div>
							<h3><?php echo $name_3; ?></h3>
							<?php echo $title_3; ?>
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

	</article>
</section>

 

<?php
get_footer( 'footer.php' );
?>