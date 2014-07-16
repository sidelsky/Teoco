<?php
/* Custom code goes below this line. */


//update_option('siteurl','http://79.170.44.100/steventaylorassociates.com/');
//update_option('home','http://79.170.44.100/steventaylorassociates.com/');


/** Tell WordPress to run starkers_setup() when the 'after_setup_theme' hook is run. */
add_action('after_setup_theme', 'myTheme');
if ( ! function_exists('myTheme')) :


// register three menus
	function register_menus() {
		register_nav_menus(
			array(
				'primary-menu' => __('Primary Menu'),
				'secondary-menu' => __('Secondary Menu'),
				'tertiary-menu' => __('Tertiary Menu'),
				//'quaternary-menu' => __('Quaternary Menu')
				)
			);
	}
	add_action('init', 'register_menus');

	//Add excerpt to pages
	add_post_type_support( 'page', 'excerpt' );


//Gravity forms - JavaScript to footer
 

// This theme uses post thumbnails
// if (function_exists('add_theme_support')) {
// 	add_theme_support('post-thumbnails');
//    	//set_post_thumbnail_size(600, 600, true); //the_post_thumbnail('thumb-image-large');
// 	add_image_size('main-thumb', 600, 600, true); 
// 	//add_image_size('thumb-image-small', 140, 80, true);
// 	//add_image_size('thumb-image-large', 300, 170, true);
// 	//add_image_size('slider', 1920, 600, true);
// }


// add_filter( 'wp_get_attachment_image_attributes', 'wpse8170_add_lazyload_to_attachment_image', 10, 2 );
// function wpse8170_add_lazyload_to_attachment_image( $attr, $attachment ) {
//     $attr['data-original'] = $attr['src'];
//     $attr['src'] = 'grey.gif';
//     return $attr;
// }



 //Remove p from excerpt
$myExcerpt = get_the_excerpt();
$tags = array("<p>", "</p>");
$myExcerpt = str_replace($tags, "", $myExcerpt);
echo $myExcerpt;


// This function allows short excerpts with paragraphs
function improved_trim_excerpt($text) {
	global $post;
	if ( '' == $text ) {
		$text = get_the_content('');
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]>', ']]&gt;', $text);
		$text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
		$text = strip_tags($text, '<a> <p>');
		$excerpt_length = 55;
		$words = explode(' ', $text, $excerpt_length + 1);
		if (count($words)> $excerpt_length) {
			array_pop($words);
			array_push($words,'... <p class="readMore"><a href="'. get_permalink($post->ID) . '">' . 'Read more' . '</a></p>');	
			$text = implode(' ', $words);
		}
	}
	return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'improved_trim_excerpt');

/* the_excerpt(); */


// This function allows short excerpts Manually conrolled
function excerptMyLength($num) {
	$limit = $num+1;
	$excerptMyLength = explode(' ', get_the_excerpt(), $limit);
	array_pop($excerptMyLength);
	$excerptMyLength = implode(" ",$excerptMyLength).'...<br><br><a href="'. get_permalink($post->ID) . '" class="btn readMore">' . 'Read more' . '</a>';
	echo $excerptMyLength;
}

/* excerptMyLength('22'); */



endif; /* Custom code goes above this line. */
?>