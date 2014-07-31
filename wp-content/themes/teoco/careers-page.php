<?php 
	/*
	Template Name: Careers page
	*/
	get_header();
	?>

	<!-- Company overview -->
	<section class="page-wrapper__wide rel-pos section current">
		<article class="page-wrapper__wide__inner padding-tb-small">
			<div class="article-section">
				<div class="slider top">
					<div class="flexslider">
						<ul class="slides">
							<li>							
								<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
									<!-- post -->
									<h1>
										<?php the_field('subtitle'); ?>
									</h1>
									<?php the_content(); ?>

								<?php endwhile; ?>
								<!-- post navigation -->
							<?php else: ?>
								<!-- no posts found -->
							<?php endif; ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</article>
	<div class="slider bottom">
		<div class="curve-holder blue"></div>
		<div class="flexslider2">
			<ul class="slides">
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/img/Image-2.jpg" alt="image01" class='bg-full-image' />
				</li>
			</ul>
		</div>
	</div>					
</section>


<!--Video - vimeo api-->	
<?php include 'vimeo-video.inc.php' ?>

<!-- Job opportunities -->
<section class="page-wrapper__wide what-we-do-bg section">
	<article class="page-wrapper__wide__inner padding-tb">
		<h1><?php the_field('job_opportunities_title'); ?></h1>
		<?php the_field('job_opportunities_copy'); ?>
		
		<?php/*
		<?php
			$jobs_listings = array(
				//'post__in' => array(8),
				'posts_per_page'   => -1,
				'offset'           => 0,
				'category'         => '',
				'orderby'          => 'post_date',
				'order'            => 'ASC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'job-opportunities',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'post_status'      => 'publish',
				'suppress_filters' => false );
				query_posts($jobs_listings); if ( have_posts() ) while ( have_posts() ) : the_post();
			?>
		 
			<h2><?php the_title(); ?></h2>

			<?php /*
			<ul id="portfolio-terms">
				<li>
					<a href="#" class="all current"><?php _e('All', 'framework'); ?></a><span>/</span>
				</li>
				<?php 
					wp_list_categories(array(
						'title_li' => '', 
						'taxonomy' => 
						'skill-type', 
						'walker' => new Portfolio_Walker(),
						'show_option_none' => ''
					)
				); ?>
			</ul> 
			*/?>

			<?php/*

			<?php the_content(); ?>

			<?php endwhile; wp_reset_query();?>


*/?>
	<div id="content">

	<ul id="portfolio-filter">
	<?php
	$terms = get_terms('locations');
	$count = count($terms);
	echo '<li><a href="#all" title="" data-filter=".all" class="active">All</a></li>';
	if ( $count > 0 ){
		foreach ( $terms as $term ) {
			$termname = strtolower($term->name);
			$termname = str_replace(' ', '-', $termname);
			echo '<li><a href="#'.$termname.'" title="" data-filter=".'.$termname.'">'.$term->name.'</a></li>';
		}
	}
	?>
</ul>


<div id="portfolio-list">
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

/* Insert category name into portfolio-item class */ 
echo '<div class="portfolio-item '. $tax .'">';
//echo '<div class="thumbnail">'. the_post_thumbnail() .'</div>';
echo '<h2>'. the_title() .'</h2>';
echo '<div>'. the_content() .'</div>';
echo '</div>'; 
endwhile; 
?>
 
</div>



------------------------------------------------------------------------------------------


<?php /*
<?php
$terms = get_terms('Locations');
$count = count($terms);
if ( $count > 0 ){
echo '<ul id="projects-filter">';
echo '<li><a href="#" data-filter="*">All</a></li>';
foreach ( $terms as $term ) {
    $termname = strtolower($term->name);  
    $termname = str_replace(' ', '-', $termname);  
    echo '<li><a href="#" data-filter="' . '.' . $termname . '">' . $term->name . '</a></li>';
}
echo '</ul>';
}
?>

<?php 
    $loop = new WP_Query(array('post_type' => 'job-opportunities', 'posts_per_page' => -1));
    $count =0;
?>

*/?>




</article>
</section>










<!-- 

	<div class="boundingBox" id="content">

		<ul id="portfolio-filter">
			<li><a href="#all" title="">All</a></li>
			<li><a href="#design" title="" rel="design">Design</a></li>
			<li><a href="#partner" title="" rel="partner">Agency Partner</a></li>
			<li><a href="#political" title="" rel="political">Political</a></li>
			<li><a href="#university" title="" rel="university">University</a></li>
			<li><a href="#nonprofit" title="" rel="nonprofit">Non-Profit</a></li>
			<li><a href="#business" title="" rel="business">Business</a></li>
			<li><a href="#econdev" title="" rel="econdev">Economic Development</a></li>
			<li><a href="#jquery" title="" rel="jquery">jQuery</a></li>
		</ul>
		
		<ul id="portfolio-list">
						<li style="display: block;" class="business ecommerce partner cms programming jquery search">
								
				<p>
					Saranac
				</p>
			</li>
						<li style="display: block;" class="nonprofit partner cms jquery">
								
				<p>
					Salvation Army of Wake County
				</p>
			</li>
						<li class="business design">
								
				<p>
					Tharrington Smith
				</p>
			</li>
						<li class="nonprofit university design cms jquery video">
								
				<p>
					The Morehead-Cain Scholars Program
				</p>
			</li>
						<li class="political design cms">
								
				<p>
					Josh Mandel for Treasurer
				</p>
			</li>
						<li class="university partner design cms jquery">
								
				<p>
					NC Marine Science
				</p>
			</li>
						<li style="display: block;" class="nonprofit econdev partner cms jquery search">
								
				<p>
					Raleigh Economic Development
				</p>
			</li>
						<li class="political design cms video">
								
				<p>
					Ravenstahl for Mayor
				</p>
			</li>
						<li class="business design cms analytics">
								
				<p>
					Volt Energy
				</p>
			</li>

		</ul>
		
	</div>
	
</div> -->

<?php
get_footer( 'footer.php' );
?>




