<!-- Start header -->
<header id="header">
	<div id="primary">

		<div class="inner">
		<?php wp_nav_menu( array(
		'menu'            => 'Primary navigation', 
		'container'       => 'div',
		'container_class' => 'primary', 
		//'container_id'    => 'menuContainer',
		//'menu_id'         => 'menu',
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

<div id="secondary">
	<div class="page-wrapper__wide__inner" id="forHeight">
		<?php wp_nav_menu( array(
		'menu'            => 'Sub navigation', 
		'container'       => 'div',
		'container_class' => 'menu secondary', 
		//'container_id'    => 'sub-menuContainer',
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
	</div>
</div>

</header>
<!-- End header -->