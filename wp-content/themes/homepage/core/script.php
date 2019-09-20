<?php

define('dir_css', get_template_directory_uri().'/core/assets/css/');
define('dir_js', get_template_directory_uri().'/core/assets/js/');
define('owl', get_template_directory_uri().'/core/assets/vendors/owl/');
define('font', get_template_directory_uri().'/core/assets/fonts/');


if ( !function_exists('add_theme_scripts')) {
	function add_theme_scripts(){
		wp_enqueue_style( 'bootstrap_css', dir_css . 'bootstrap.min.css', array(), '4.3', 'all');
		wp_enqueue_style( 'themify', dir_css . 'bootstrap.min.css', array(), '4.3', 'all');
		wp_enqueue_style( 'animate', font . 'themify-icons/themify-icons.css', array(), '3.5.1', 'all');
		wp_enqueue_style( 'owl_css', owl . 'owl.carousel.min.css', array(), '2.3.4', 'all');
		wp_enqueue_style( 'owl_theme', owl . 'owl.theme.default.css', array(), '2.3.4', 'all');
		wp_enqueue_style( 'main_css', dir_css . 'style.css', array(), '1.0', 'all');

		wp_enqueue_script( 'bootstrap_js', dir_js . 'bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'jquery', dir_js . 'jquery-3.4.1.min.js', array ( 'jquery' ), 3.4, true);
		wp_enqueue_script( 'owl_js', owl . 'owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'main-js', dir_js . 'main.js', array ( 'jquery' ), 1.1, true);
	}
	add_action('wp_enqueue_scripts', 'add_theme_scripts');
}