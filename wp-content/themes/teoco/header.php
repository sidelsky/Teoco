<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="no-js ie ie6 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 7 ]><html class="no-js ie ie7 lte7 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8 ]><html class="no-js ie ie8 lte8 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9 ]><html class="no-js ie ie9 lte9" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html class="no-js" dir="<?php bloginfo('text_direction'); ?>" <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<!-- Mobile Specific Metas -->
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>
		<?php wp_title(); ?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favico.png">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>	

	
	<?php
		wp_head();
	?>


</head>

<body <?php body_class(''); ?> name="goto-up">

<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page wrapper -->
<div class="page-wrapper">

<header class="page-wrapper__wide menu-background">

<div id="menu-wrapper">
	<div class="menu-wrapper" id="primary">
		<div class="page-wrapper__wide__inner">
		<?php wp_nav_menu( array(
			'menu'            => 'Primary navigation', 
			'container'       => 'nav', 
			'container_id'    => 'menuContainer',
			'menu_id'         => 'menu',
			'container_class' => 'navigation big-menu',
			//'theme_location'  => 'Primary Menu',
			//'menu_class'      => 'four coloumns', 
			//'echo'            => true,
			//'fallback_cb'     => 'wp_page_menu',
			//'before'          => ,
			//'after'           => ,
			//'link_before'     => ,
			//'link_after'      => ,
			//'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			//'depth'           => 0,
			//'walker'          =>  
		)); ?>
		</div>
	</div>
	 
	<div class="menu-wrapper" id="secondary">
		<div class="page-wrapper__wide__inner">
		<?php wp_nav_menu( array(
			'menu'            => 'Sub navigation', 
			'container'       => 'nav', 
			'container_id'    => 'sub-menuContainer',
			'menu_id'         => 'sub-menu',
			'container_class' => 'sub-navigation big-menu',
			//'theme_location'  => 'Primary Menu',
			'menu_class'      => 'under-menu menu', 
			//'echo'            => true,
			//'fallback_cb'     => 'wp_page_menu',
			//'before'          => ,
			//'after'           => ,
			//'link_before'     => ,
			//'link_after'      => ,
			//'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			//'depth'           => 0,
			//'walker'          =>  
		)); ?>
		</div>
	</div>
</div>

</header>