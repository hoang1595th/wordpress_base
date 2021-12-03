<?php 

/*----------  CUSTOM FUNCTION  ----------*/
// get menu array
function wp_get_menu_array($current_menu) {
	$array_menu = wp_get_nav_menu_items($current_menu);
	$menu = array();
	foreach ($array_menu as $m) {
		if (empty($m->menu_item_parent)) {
			$menu[$m->ID] = array();
			$menu[$m->ID]['ID'] = $m->ID;
			$menu[$m->ID]['title'] = $m->title;
			$menu[$m->ID]['url'] = $m->url;
			$menu[$m->ID]['children'] = array();
		}
	}
	$submenu = array();
	foreach ($array_menu as $m) {
		if ($m->menu_item_parent) {
			$submenu[$m->ID] = array();
			$submenu[$m->ID]['ID'] = $m->ID;
			$submenu[$m->ID]['title'] = $m->title;
			$submenu[$m->ID]['url'] = $m->url;
			$menu[$m->menu_item_parent]['children'][$m->ID] = $submenu[$m->ID];
		}
	}
	return $menu;
}

/*----------  REGISTER  ----------*/
// register menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}


/*----------  ENQUEUE SCRIPTS  ----------*/
function enqueue_scripts() {
	wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
}

/*----------  ENQUEUE STYLES  ----------*/

// header style
function eq_header_styles() {
	wp_enqueue_style( 'top', get_template_directory_uri() . '/assets/css/header/top/top_v0.css' );
	wp_enqueue_style( 'search', get_template_directory_uri() . '/assets/css/header/search/search_v0.css' );
}

// common styles
function enqueue_styles() {
	wp_enqueue_style( 'wp-theme', get_stylesheet_uri() );
	wp_enqueue_style( 'theme', get_template_directory_uri() . '/assets/css/theme.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/all.min.css' );
	eq_header_styles();
}


/*----------  ADD_ACTION  ----------*/

add_action( 'init', 'register_my_menus' );
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action( 'wp_enqueue_scripts', 'enqueue_styles');
?>