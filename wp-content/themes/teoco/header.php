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
	<meta name="apple-mobile-web-app-capable" content="yes">

	<title>
		<?php wp_title(); ?>
	</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favico.png">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-2.6.2.min.js"></script>	

	<?php wp_head(); ?>

</head>

<body <?php body_class(''); ?> name="goto-up">

<!--[if lt IE 7]>
	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

	<!-- Page wrapper -->
<div class="page-wrapper">

<?php/*
	<div class="page-wrapper__wide" >
		<div class="page-wrapper__wide__inner">
			<i id="language">
				<img src="<?php bloginfo('template_directory'); ?>/img/language-globe.png" alt="Language select" width="16" height="16">
			</i>
			<?php get_template_part( '/search-form' ); ?>
		</div>

		<?php get_template_part( '/wolf-menu' ); ?>

		<a class="simple-menu" href="#sidr">
			<i class="fa fa-bars"></i>
		</a>
	</div>
*/?>


<div class="page-wrapper__wide detached">
		<div class="page-wrapper__wide__inner">
			<div class="innerbit">
			<i id="language">
				<img src="<?php bloginfo('template_directory'); ?>/img/language-globe.png" alt="Language select" width="16" height="16">
			</i>
			<?php get_template_part( '/search-form' ); ?>
			</div>
		</div>

		<?php get_template_part( '/wolf-menu' ); ?>

		<a class="simple-menu" href="#sidr">
			<i class="fa fa-bars"></i>
		</a>
	</div>

 