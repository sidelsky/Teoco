<?php 
	/*
	Template Name: Careers page
	*/
	get_header();
	?>

	<!-- Company overview -->
	<section class="page-wrapper__wide rel-pos section current">
		<div class="page-wrapper__wide__inner padding-tb-small">
			<div class="article-section">
				<div class="slider top">
					<div class="zflexslider">
						<ul class="slides">
							<li>
								<?php get_template_part( '/generic-page-loop' ); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="slider bottom">
			<div class="curve-holder blue"></div>
			<div class="flexslider2">
				<ul class="slides">
					<li>
						<?php $image = get_field('image_wc'); ?>
					<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="bg-full-image" />
					</li>
				</ul>
			</div>
		</div>					
	</section>

	<!--Video - vimeo api-->	
	<?php/* get_template_part('/vimeo-video'); */?>

	<!-- Youtube video -->
	<?php get_template_part('/youtube-video'); ?>

	<!-- Job opportunities -->
	<section class="page-wrapper__wide job-opportunities section">
		<div class="page-wrapper__wide__inner padding-small-tb">
			<h1><?php the_field('job_opportunities_title'); ?></h1>
			<div class="left-col">
				<ul class="controls side-menu">
					<?php
					$terms = get_terms('locations');
					$count = count($terms);
					echo '<li data-filter="all" class="filter active">All locations</li>';
					if ( $count > 0 ){
						foreach ( $terms as $term ) {
							$termname = strtolower($term->name);
							$termname = str_replace(' ', '-', $termname);
							echo '<li data-filter=".'.$termname.'" class="filter"><a href="#">'.$term->name.'</a></li>';
						}
					}
				//echo '<li class="sort" data-sort="myorder:asc">Asc</li>';
			 	//echo '<li class="sort" data-sort="myorder:desc">Desc</li>';
					?>
				</ul>
			</div>
			
			<div class="right-col">
				<article class="job-opportunities">
					<?php the_field('job_opportunities_copy'); ?>
				</article>
				<ul id="Container" class="container accordian">
					<?php
					/* 
					Query the post 
					*/
					$args = array(
						'post_type' => 'job-opportunities',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); 
					/* 
					Pull category for each unique post using the ID 
					*/
					$terms = get_the_terms( $post->ID, 'locations' );	
					if ( $terms && ! is_wp_error( $terms ) ) : 

						$links = array();

					foreach ( $terms as $term ) {
						$links[] = $term->name;
					}

					$tax_links = join( " ", str_replace(' ', '-', $links));          
					$tax = strtolower($tax_links);
					else :	
						$tax = '';					
					endif; 
					//Add <p> tags to 'get_the_content()';
					//$career_number = get_field('career_number');
					$post_id = get_the_ID();
					$content = apply_filters( 'the_content', get_the_content() );
					//$content = str_replace( ']]>', ']]&gt;', $content );
					/* Insert category name into portfolio-item class */ 
					echo '<li class="portfolio-item mix accord '. $tax .'" id="'.$post_id.'" style="display: block;">';
					echo '<div class="accord-toggle"><div class="icon-link"><i class="fa fa-chevron-circle-down"></i></div><h3 class="position">'.get_the_title().'</h3><h3 class="location">'.$tax.'</h3></div>';
					echo '<ul class="inner"><li>'.$content.'
					<div class="transcript">
						<div class="icon-link">
						<i class="fa fa-chevron-circle-up up"></i>
							<a href="#" class="toggle">
								<i class="fa fa-chevron-circle-down"></i>&nbsp;&nbsp;APPLY FOR THIS JOB
							</a>
							<div class="toggle-inner">';
								echo '<div class="career-number">'.$post_id.'</div>'; 
								echo do_shortcode('[gravityform id=2 name=Application form title=false description=false ajax=true]');
								echo'<div class="icon-link inner-margin">
								<i class="fa fa-chevron-circle-up"></i>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>';
		echo '</li>';
		endwhile; 
		?>
	</ul>
</div>
</div>
<br>
</section>



<?php
get_footer( 'footer.php' );
?>




