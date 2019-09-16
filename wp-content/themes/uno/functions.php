<?php
/**
 @ Khai báo hằng giá trị
   @ THEME_URL = lay duong dan thu muc theme
   @ CORE = lay duong dan thu muc core
**/

define('THEME_URL', get_template_directory() );
define('CORE', THEME_URL."/core");

add_action('after_setup_theme', 'setup_theme');
function setup_theme(){
	$language_folder = THEME_URL.'/languages';
	load_theme_textdomain('tuti', $language_folder);
	add_theme_support( 'automatic_feed_links');
	add_theme_support( 'post-thumbnails');
	add_theme_support( 'post-formats',
	    array(
	       'image',
	       'video',
	       'gallery',
	       'quote',
	       'link'
	    )
	);
	// Them custom background
	$default_background = array(
		'default-color' => '#222222'
	);
	add_theme_support('custom-background',$default_background);
	add_theme_support( 'title-tag');
	add_theme_support( 'widgets' );

	// Them menu
	register_nav_menu( 'primary_menu', __('Primary Menu','tuti'));

	// Them sidebar

	$sidebar = array(
		'name' => __('Main sidebar','tuti'),
		'id' => 'main_sidebar',
		'description' => __('Default sidebar'),
		'class' => 'main-slidebar',
		'before_title' =>'<h3 class="widgettitle">',
		'after_title' => '</h3>'
	);
	register_sidebar($sidebar);
}

/* Nhung file core/init.php */
require_once(CORE . "/init.php");

/* Khai báo menu */
if( !function_exists('primary_menu')){
	function primary_menu($menu){
		$menu = array(
			'them_location'=> $menu,
			'container'=>'nav',
			'container_class'=> $menu,
		);
		wp_nav_menu($menu);
	}
}