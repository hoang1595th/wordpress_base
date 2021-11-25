<?php 

	function enqueue_scripts() {
		wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.0.min.js');
	}

	function themeslug_enqueue_style() {
	    wp_enqueue_style( 'my-theme', get_stylesheet_uri() );	    
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	}


	add_action('wp_enqueue_scripts', 'enqueue_scripts');
	add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style');
?>