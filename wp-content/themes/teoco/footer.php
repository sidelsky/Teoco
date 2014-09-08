<footer class="page-wrapper__wide  page-footer">
	<section class="page-wrapper__wide__inner padding-tb-small">
		 
		<?php wp_nav_menu( array(
		'menu'            => 'Footer menu', 
		'container'       => 'nav', 
		'container_id'    => 'subMenuContainer',
		'menu_id'         => 'subMenu',
		'container_class' => 'navigation',
		//'theme_location'  => 'Primary Menu',
		'menu_class'      => 'footer-menu', 
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
						<i class="fa fa-youtube-play"></i>
					</a>
				</li>
			</ul>
		</div>

		<div class="copyright-details">Copyright &copy; 1995 - <?php echo get_the_date(Y); ?> TEOCO Corporation. All rights reserved.</div>	
		
	</section>
</footer>

<!--End wrapper -->
</div>

<!-- Mobile menu -->
<?php wp_nav_menu( array(
		'menu'            => 'Sub navigation', 
		'container'       => 'div',
		//'container_class' => 'menu secondary', 
		'container_id'    => 'sidr',
		//'menu_id'         => 'sub-menu',
		//'menu_class'      => 'secondary', 
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

<ul class="jump">
	<li class='prev'>
		<a href="#" class="display"><span>prev</span><i class="fa fa-angle-up"></i></a>
	</li>

	<li class="next">
		<a href="#" class="display"><span>next</span><i class="fa fa-angle-down"></i></a>
	</li>
</ul>	

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.imagesloaded.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/cbpBGSlideshow.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.touchwipe.1.1.1.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.sidr.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.smoove.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/waypoints.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/froogaloop.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvid.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/js/smooth-scroll.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/js/jquery.lazy.js"></script>

<?php /*
<script src="<?php bloginfo('template_directory'); ?>/js/isotope.js"></script> 
<script src="<?php bloginfo('template_directory'); ?>/js/filterable.js"></script>
 */?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mixitup.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.nicefileinput.js"></script>

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