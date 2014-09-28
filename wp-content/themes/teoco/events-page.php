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
					$terms = get_terms('event-year', array(
						//'orderby'    => 'name',
						'order'             => 'DESC',
						));
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
				<ul id="Container" class="post-list container news-media-events">
					<?php
					/* 
					Query the post 
					*/
					$args = array(
						'post_type' => 'events',
						'posts_per_page' => -1,
						'orderby' => 'name',
						'order' => 'DESC'
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
					$event_date_to = get_field('event_date_to');
					$event_location = get_field('event_location');
					$event_link = get_field('event_link');
					$event_icon = get_field('event_icon');
					$the_permalink = get_the_permalink();
					//$event_date = the_field('event_date');

					echo '<div class="section"></div>';	

					echo '<li class="mix events '. $tax .'" id="'.$post_id.'" style="display: block;">';
					echo '<a href="'. $the_permalink .'" target="_self">';
					echo'<div class="container">'; ?>

					<?php if( $event_date ) : ?>
						<div class="the-time">
							<?php echo $event_date . " " . '-'. " " . $event_date_to;?>
						</div>
						<div class="the-location">
							<?php echo $event_location; ?>
						</div>
					<?php endif; ?>
					
					<h2><?php the_title(); ?></h2>
					<?php/*
					<?php if($event_link) : ?>
					<span class="visit">Visit site ></span>
					<?php endif; ?>
					*/?>

					<span class="visit">
						Visit site >
					</span>

					<?php echo '</div>'; ?>

					<?php if($event_icon) : ?>
						<div class="img-container">
							<img src="<?php echo $event_icon ?>" alt="<?php echo $event_icon['alt']; ?>" class="thmb">
						</div>
					<?php endif; ?>

					<?php	echo '</a>';?>
					<?php	echo '</li>';?>
					
				<?php endwhile; ?>	
				<ul>
				</div>
			</div>
		</section>

		<?php
		get_footer( 'footer.php' );
		?>




