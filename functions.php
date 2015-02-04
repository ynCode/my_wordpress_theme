<?php
	// register menus
	register_nav_menus( array(
		'nav_footer' => 'footer',
		'nav_header' => 'header',
	));

	// change submenu ul class 
	function change_submenu_class($menu) {  
		$menu = preg_replace('/ class="sub-menu"/','/ class="dropdown-menu" /',$menu);  
		return $menu;  
	}
	add_filter('wp_nav_menu','change_submenu_class');  

	// add class dropdown if has submenu
	function menu_set_dropdown( $sorted_menu_items, $args ) {
	    $last_top = 0;
	    foreach ( $sorted_menu_items as $key => $obj ) {
	        // it is a top lv item?
	        if ( 0 == $obj->menu_item_parent ) {
	            // set the key of the parent
	            $last_top = $key;
	        } else {
	            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
	            $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown';
	        }
	    }
	    return $sorted_menu_items;
	}
	add_filter( 'wp_nav_menu_objects', 'menu_set_dropdown', 10, 2 );
?>