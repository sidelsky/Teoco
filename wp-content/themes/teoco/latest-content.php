<!-- Latest -->
<section class="page-wrapper__wide rel-pos section">
	<div class="page-wrapper__wide__inner padding-tb-small">
		<div class="article-section">
			<div class="slider top">
				<div class="zflexslider"> <!-- Add if LI is less than 1 change class name 
				if ($('#myElement').length > 1) { 
    			// it exists 
				}
			-->
					<?php if (is_page(34)) {
							$title = get_field('title');
							$copy = get_field('latest');
						} else {
							$title = get_field('title_2');
							$copy = get_field('latest_2');
							$link = get_field('link_2');
						} ?>

					<ul class="slides">
						<li>							
							<h1>
								<?php echo $title; ?>
							</h1>
								<?php echo $copy; ?>


						<?php if(is_page(34)): ?>

								<div class="dropdown">
								<div class="contain">
									<p>Please complete</p>
									<i class="fa fa-times-circle"></i>
								</div>
									<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true]"); ?>
									<!-- Download losange -->
								</div>

								<a class="losange" id="download" data-scroll data-options="easing: easeOutQuad" href="#latest">
									<span class="orange">Download</span>
								</a>

							<?php else: ?>
							
							<a href="<?php echo $link ?>" class="link-arrows white">
								<i class="fa fa-angle-right red"></i>
							</a>

							<?php endif; ?>	
						</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="slider bottom">
<?php if(is_page(34)): ?>
	<div class="curve-holder mustard"></div>
<?php else: ?>
	<div class="curve-holder red"></div>
<?php endif; ?>	
	<div class="flexslider2">
		<ul class="slides">
			<li>
				<img src="<?php bloginfo('template_directory'); ?>/img/Image-2.jpg" alt="image01" class='bg-full-image' />
			</li>
		</ul>
	</div>
</div>					
</section>
 