<?php

function latest_works($wp_customizer){
	// tao section
	$section = 'works';
	$wp_customizer->add_section($section,array(
		'title' => 'Latest Works',
		'priority' => 25
	));

	//======================= Title ====================
	// tao field setting
	$wp_customizer-> add_setting($section.'_title', array(
		'default' => 'Check out our latest works'
	));

	// tao 1 control de thay doi gia tri field
	$wp_customizer->add_control($section.'_title', array(
		'label' => 'Heading',
		'section' => $section,
		'type' => 'text'
	));

	//======================= Description ====================
	$wp_customizer->add_setting($section.'_des',array(
		'default' => 'Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor.'
	));

	$wp_customizer->add_control($section.'_des', array(
		'label' => 'Description',
		'section' => $section,
		'type' => 'textarea'
	));
}
add_action('customize_register', 'latest_works');


