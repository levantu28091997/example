<?php


add_action( 'wp_enqueue_scripts', 'king_enqueue_content');
function king_enqueue_content(){
	$main_css = get_template_directory_uri().'/core/assets/css/';
	$main_js = get_template_directory_uri().'/core/assets/js/';
	$main_slick = get_template_directory_uri().'/core/assets/vendors/slick/';

	// css
	wp_enqueue_style('bootstrap', $main_css.'bootstrap.min.css','4.0','all');
	wp_enqueue_style('themify-icon',$main_css.'themify-icons/themify-icons.css', '1.0', 'all');
	wp_enqueue_style('animation',$main_css.'animate.min.css', '1.0', 'all');
	wp_enqueue_style('slick',$main_slick.'slick.css', '1.0', 'all');
	wp_enqueue_style('slick-theme',$main_slick.'slick-theme.css', '1.0', 'all');
	wp_enqueue_style('main-style',$main_css.'style.css', '1.0', 'all');

	//js
	wp_enqueue_script('king-reset', $main_js.'bootstrap.bundle.min.js', false, '1.1.1', true );
	wp_enqueue_script('jquery', $main_js.'jquery-1.12.4.min.js', false, '1.1.1', true );
	wp_enqueue_script('slickjs', $main_slick.'slick.min.js', false, '1.0', true );
	wp_enqueue_script('mainjs', $main_js.'main.js', false, '1.1', true );
}