<?php get_header(); ?>




<section class="page-wrapper__wide what-we-do-bg section grey">
	<div class="page-wrapper__wide__inner padding-tb">
 
<?php if (have_posts()) : ?>

<?php
	$mySearch =& new WP_Query("s=$s & showposts=-1");
	$NumResults = $mySearch->post_count;
?>

<h1>Search results</h1>

<div class="left-col">
	&nbsp;
</div>


<div class="article-section">
<div id="showing">Showing <strong><?php wp_pagenavi(); ?></strong> of <strong><?php echo $NumResults; ?></strong> results for <strong>'<?php the_search_query(); ?>'</strong></div>

<?php while (have_posts()) : the_post(); ?>

	<div class="post">
		<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
		<?php/* <p><?php the_time('l, F jS, Y') ?></p> */?>
		<?php excerptMyLength('22'); ?>
		<?php/*
			<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
		*/?>
	</div>

<?php endwhile; ?>
</div>

<footer class="pagenavi search">
	<?php wp_pagenavi(); ?>
</footer>

<?php/*
	<div class="navigation">
		<div><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
*/?>

<?php else : ?>
<div class="left-col">
	&nbsp;
</div>

<div class="article-section">
	<h2>We are very sorry</h2>
	<h3><strong>The term<span style="color:grey; font-style: italic;">'<?php the_search_query(); ?>'</span> was not found</strong></h3>
	<p>Please try a new search term or use the main navigation to find what your're looking for.</p>
</div>

<?php endif; ?>
</div>
</section>

<?php get_footer(); ?>
