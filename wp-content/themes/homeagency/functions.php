<?php

// setting duong dan thu muc
define( 'THEME_URL', get_template_directory() );
define( 'CORE', THEME_URL . "/core" );

// add init.php
require_once (CORE. '/init.php');

// theme setting
if ( !function_exists('theme_settings') ) {
	function theme_settings(){
		// add widget
		add_theme_support( 'widgets' );

		//post thumbnails
		add_theme_support( 'post-thumbnails' );

		// post-format
		add_theme_support( 'post-format',
			array(
			'aside',
			'quote',
			'thumbnails',
			'gallery',
			)
		);

		// title tag
		add_theme_support( 'title-tag' );
	};
	add_action('after_setup_theme', 'theme_settings');
}

// register sidebar
$sidebar = array(
	'name' => __('Main sidebar', 'tuti'),
	'id'   => 'sidebar',
	'description' => __('Widgets in this area will be shown on all posts and pages.', 'tuti'),
	'before_widget' => '<li class="widget-wrapper">',
	'after_widget' => '</li>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
);
register_sidebar($sidebar);
