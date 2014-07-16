<footer class="page-wrapper__wide">
	<section class="page-wrapper__wide__inner padding-tb-small">
		 
		<?php wp_nav_menu( array(
		'menu'            => 'Footer menu', 
		'container'       => 'nav', 
		'container_id'    => 'subMenuContainer',
		'menu_id'         => 'subMenu',
		'container_class' => 'navigation',
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
	
		<div class="social">
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-linkedin"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-youtube"></i>
					</a>
				</li>
			</ul>
		</div>
	</section>
</footer>


<!--End wrapper -->
</div>

<!-- Mobile menu -->

<?php wp_nav_menu( array(
	'menu'            => 'Footer menu', 
	'container'       => 'div', 
	'container_id'    => 'sidr',
	'menu_id'         => 'subMenu',
	'container_class' => 'sidr',
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
	<div id="sidr" class="sidr">
		<ul>
			<li>
				<a href="#">About us</a>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</li>
			<li>
				<a href="#">Solutions</a>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</li>
			<li>
				<a href="#">Products</a>
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
				</ul>
			</li>
			<li>
				<a href="#">Latest</a>
				<ul>
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
	</div>
-->

<ul class="jump">
	<li>
		<a href="#" id="goto-up" class="go-up" id="goto-up">
			<i class="fa fa-angle-up"></i>
		</a>
	</li>
	<li>
		<a href="#" class="go-down" id="goto-down">
			<i class="fa fa-angle-down"></i>
		</a>
	</li>
</ul>	


<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.imagesloaded.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/cbpBGSlideshow.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.touchwipe.1.1.1.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.sidr.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.smoove.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/waypoints.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/froogaloop.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvid.js"></script>
<!--
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
-->
 <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>

<?php //The footer
wp_footer();
?>


<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
		function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
-->

</body>
</html>