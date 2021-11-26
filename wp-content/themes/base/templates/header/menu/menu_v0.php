<!-- Header Menu -->
<ul class="navbar-nav">
	<?php
	$menu = wp_get_menu_array('main-menu'); 
	$menu_html = '';
	foreach( $menu as $item ) {
		$menu_html .= '<li class="nav-item">';
		$menu_html .= '<a class="nav-link" href="' . $item['url'] .'">';
		$menu_html .=  $item['title'];
		$menu_html .= '</a>';
		$menu_html .= '</li>';
	}
	echo $menu_html;
	?>					
</ul>