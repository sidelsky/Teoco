<?php 
	/*
	Template Name: Events page
	*/
	get_header();
	?>

	<section class="page-wrapper__wide sub-pages section current grey">
		<div class="page-wrapper__wide__inner padding-tb">
			<h1><?php the_title(); ?></h1>
			<div class="left-col">
				<ul class="controls side-menu">
					<?php
					$terms = get_terms('event-year');
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

				<p>For further information</p>
				<a class="losange red" href="/contact-us/contact-us-form/">
					<span class="white">Contact us</span>
				</a>

			</div>

			<div class="right-col">
			 <ul id="Container" class="post-list container">
					<?php
					/* 
					Query the post 
					*/
					$args = array(
						'post_type' => 'events',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); 
					/* 
					Pull category for each unique post using the ID 
					*/
					$terms = get_the_terms( $post->ID, 'event-year' );	
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

					$event_date = get_field('event_date');
					$event_location = get_field('event_location');
					$event_link = get_field('event_link');
					$event_icon = get_field('event_icon');
					$space = '&nbsp';
					//$event_date = the_field('event_date');

					echo '<div class="section"></div>';	

					echo '<a href="'.$event_link.'" target="_blank">';
					echo '<li class="mix lazy '. $tax .'" id="'.$post_id.'" style="display: block;">';
					echo'<div class="container">'; ?>

					<?php if( $event_date ) : ?>
					<span class="the-time">
					<?php the_field('date_picker'); ?>
					<?php echo $event_date . $space . $space . $event_location; ?>
					</span>
					<?php endif; ?>

					<h2><?php the_title(); ?></h2>
					<?php if($event_link) : ?>
					<span class="visit">Visit site ></span>
					<?php endif; ?>

					<?php echo '</div>'; ?>

					<?php if($event_icon) : ?>
						<div class="img-container">
							<img src="<?php echo $event_icon ?>" alt="<?php echo $event_icon['alt']; ?>" class="thmb">
						</div>
						<?php endif; ?>

					<?php	echo '</li>';?>
					<?php	echo '</a>';?>
					<?php endwhile; ?>	
	 <ul>

		 
				 
			 
			</div>
		</div>
	</section>

	<?php
	get_footer( 'footer.php' );
	?>




