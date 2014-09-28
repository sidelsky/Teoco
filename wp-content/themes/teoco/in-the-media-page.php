<?php 
	/*
	Template Name: In the media page
	*/
	get_header();
	?>

<section class="page-wrapper__wide sub-pages section grey">
		<div class="page-wrapper__wide__inner padding-tb">
			<h1><?php the_title(); ?></h1>
			<div class="left-col">
				<ul class="controls side-menu">
					<?php
					$terms = get_terms('in-the-media-year');
					$count = count($terms);
					echo '<li data-filter="all" class="filter active">All</li>';
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
			 <ul id="Container" class="post-list container news-media-events">
					<?php
					/* 
					Query the post 
					*/
					$args = array(
						'post_type' => 'in_the_media',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); 
					/* 
					Pull category for each unique post using the ID 
					*/
					$terms = get_the_terms( $post->ID, 'in-the-media-year' );	
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
					//$content = apply_filters( 'the_content', get_the_content() );

					$link = get_field('link');
					$date = get_field('date');
					$link_to_document = get_field('link_to_document');
					$description = "DOWNLOAD THE PDF >";

					echo '<li class="mix media '. $tax .'" id="'.$post_id.'" style="display: block;">';?>

 					<span class="the-time">
 						<?php if($date) {
 							echo $date;
 							} else {
 								the_time('j M Y');
 								}?>
					</span>

					<?php the_title('<h2>','</h2>'); ?>

					<?php if($link_to_document) : ?>
						<span class="visit">
							<a href="<?php echo $link_to_document ?>"><?php echo $description ?></a>
						</span>
					<?php endif; ?>

					<?php if($link) : ?>
						<span class="visit">
							<a href="<?php echo $link; ?>">VISIT SITE ></a>
						</span>
					<?php endif; ?>

					<?php	echo '</li>';?>
					<?php endwhile; ?>	
	 <ul>

		 
				
			</div>
		</div>
	</section>

	<?php
	get_footer( 'footer.php' );
	?>




