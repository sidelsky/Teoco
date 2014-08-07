<?php if(get_field('subtitle')) : 
	the_field('subtitle');
?>
<?php else : ?>
<?php the_title(); ?>
<?php endif; ?>