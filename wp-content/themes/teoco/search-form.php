<form action="http://79.170.44.125/teoco.com/" method="get" id="search-form">
 
		<?php /* <label for="search">Search in <?php echo home_url( '/' ); ?></label> */?>
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
		<?php /*<input type="image" alt="Search" src="<?php bloginfo( 'template_url' ); ?>/img/icons/search.png" width="16" /> */?>
 
</form>