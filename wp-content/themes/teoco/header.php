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
	
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>	

	
	<?php
		wp_head();
	?>
</head>

<body <?php body_class('loading'); ?> name="goto-up">

<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Page wrapper -->	
<div class="page-wrapper">

<header class="page-wrapper__wide header-background">
	<div class="page-wrapper__wide__inner">
		<i>
			<img src="<?php bloginfo('template_directory'); ?>/img/language-globe.png" alt="Language select" width="16" height="16">
		</i>
		<form>
			<input type="search" name="" value="">
		</form>
	</div>
	<div class="page-wrapper__wide__inner logo-holder">
		<a href="#" class="page-wrapper__wide__inner--logo">
			<img src="<?php bloginfo('template_directory'); ?>/img/teoco.svg" onerror="this.onerror=null; this.src='<?php bloginfo('template_directory'); ?>/img/teoco.png'">
		</a>
		

		<?php wp_nav_menu( array(
		'menu'            => 'Primary Menu', 
		'container'       => 'nav', 
		'container_id'    => 'subMenuContainer',
		'menu_id'         => 'subMenu',
		'container_class' => 'main-navigation big-menu',
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

	<!--
		<nav class="main-navigation big-menu">
			<ul>
				<li>
					<a href="#">About us</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Solutions</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Products</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Latest</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Success</a>
				</li>
				<li>
					<a href="#">Contact us</a>
				</li>
			</ul>
		</nav>
	-->

		<a class="simple-menu" href="#sidr">
			<i class="fa fa-bars"></i>
		</a>
	</div>
</header>

<!--Detached menu -->
<header class="page-wrapper__wide header-background detached">
	<div class="page-wrapper__wide__inner logo-holder">
		<a href="#" class="page-wrapper__wide__inner--logo">
			<img src="<?php bloginfo('template_directory'); ?>/img/teoco.svg" onerror="this.onerror=null; this.src='<?php bloginfo('template_directory'); ?>/teoco.png'">
		</a>

		<nav class="main-navigation small-menu">
			<ul>
				<li>
					<a href="#">About us</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Solutions</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Products</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Latest</a>
					<ul class="sub-menu">
						<li>1</li>
						<li>2</li>
						<li>3</li>
					</ul>
				</li>
				<li>
					<a href="#">Success</a>
				</li>
				<li>
					<a href="#">Contact us</a>
				</li>
			</ul>
		</nav>

		<a class="simple-menu" href="#sidr">
			<i class="fa fa-bars"></i>
		</a>
	</div>
</header>