<?php
	register_nav_menus( array(
		'nav_footer' => 'footer',
		'nav_header' => 'header',
		)
	);
	$nav_header = array(
		'theme_locale' => 'nav_header',
		'container' => 'nav',
		'menu_class' => 'nav-header',
	);

	$nav_footer = array(
		'theme_location' => '',
		'menu' => '',
		'container' => 'div',
		'container_class' => 'menu-{menu-slug}-container',
		'container_id' => '',
		'menu_class' => 'menu',
		'menu_id' => '',
		'echo' => true,
		'fallback_cb' => 'wp_page_menu',
		'before' => '',
		'after' => '',
		'link_before' => '',
		'link_after' => '',
		'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
		'depth' => 0,
		'walker' => ''
	);

	wp_nav_menu( $nav_footer );
	wp_nav_menu($nav_header);

?>
