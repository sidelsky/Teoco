<?php 
	/*
	Template Name: Latest news page
	*/
	get_header();
	?>


<section class="page-wrapper__wide sub-pages section grey">
		<div class="page-wrapper__wide__inner padding-tb">
			<h1>Latest news</h1>
			<div class="left-col">
				<ul class="controls side-menu">
					<?php
					$terms = get_terms('news-year');
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

			<div id="Container" class="right-col container">

			<ul class="post-list">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<li>
					<span class="the-time">
						<?php the_time('jS F Y') ?>
					</span>
					<h2>
						<a href="<?php the_permalink(); ?>">
							<?php the_title(); ?>
						</a>
					</h2>
				</li>
				<?php endwhile; ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif; ?>
			</ul>


			 <ul id="Container" class="post-list container">
					<?php
					/* 
					Query the post 
					*/
					$args = array(
						'post_type' => 'latest_news',
						'posts_per_page' => -1,
						'orderby' => 'post_date',
						'order' => 'ASC'
						);
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post(); 
					/* 
					Pull category for each unique post using the ID 
					*/
					$terms = get_the_terms( $post->ID, 'news-year' );	
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

					//$event_date = get_field('event_date');
					//$event_location = get_field('event_location');
					//$event_link = get_field('event_link');
					//$event_icon = get_field('event_icon');
					//$space = '&nbsp';

					echo '<li class="mix lazy '. $tax .'" id="'.$post_id.'" style="display: block;">';
					echo'<div class="container">'; ?>

 

					<h2><?php the_title(); ?></h2>
 

					<?php echo '</div>'; ?>

					<?php	echo '</li>';?>
					<?php endwhile; ?>	
	 <ul>

		 
				 
			 
			</div>
		</div>
	</section>

<?php //Get the footer
get_footer();
?>


