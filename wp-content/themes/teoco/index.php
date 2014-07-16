<?php //Get the header
get_header();
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_front_page() ) { ?>
		<?php the_title('<h2>','</h2>', true ); ?>
		<?php } else { ?>	
		<?php the_title( '<h1>', '<h1>', true ); ?>
		<?php } ?>
		
		<?php/* the_content(); */?>

		<?php the_content("Continue reading " . the_title('', '', false)); ?>

		<?php/* excerptMyLength('10'); */?>


		<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'myTheme' ), 'after' => '' ) ); ?>
		<?php edit_post_link( __( 'Edit', 'myTheme' ), '', '' ); ?>


		<?php 
			$x=5; 
			while($x<=5)
  			{
  				echo "The number is: $x <br>";
  				$x++;
  			} 
		?>


		<?php
			$cars=array("Volvo","BMW","Toyota");
			sort($cars);

			$clength=count($cars);

			for($x=0; $x<$clength; $x++)
			   {
			   echo $cars[$x];
			   echo "<br>";
			   }
		?>




	</article><!-- #post-## -->
	<?php comments_template( '', true ); ?>
<?php endwhile; ?>

<?php //Get the footer
get_footer();
?>