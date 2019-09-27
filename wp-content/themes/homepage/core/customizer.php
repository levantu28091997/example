<?php

// Add action
add_action('customize_register', 'latest_works');
add_action('customize_register', 'get_in_touch');
add_action('customize_register', 'custom_footer');
add_action('customize_register', 'top_header');

function latest_works($wp_customizer){
	// tao section
	$section = 'works';
	$wp_customizer->add_section($section,array(
		'title' => 'Latest Works Settings',
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

function get_in_touch($wp_customizer){
	$section = 'touch';
	$wp_customizer->add_section($section, array(
		'title' =>'Get In Touch Settings',
		'priority' =>24
	));

	// heading
	$wp_customizer->add_setting($section.'_heading',array(
		'default'=> 'Want to work with us?',
	));
	$wp_customizer->add_control($section.'_heading', array(
		'label' => 'Heading',
		'section'=> $section,
		'type' => 'text'
	));

	// description
	$wp_customizer->add_setting($section.'_des',array(
		'default' => 'Magnis modipsae que voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam.'
	));
	$wp_customizer->add_control($section.'_des', array(
		'label' => 'Description',
		'section' => $section,
		'type' => 'textarea'
	));

	// label button
	$wp_customizer->add_setting($section.'_label',array(
		'default' => 'GET IN TOUCH'
	));
	$wp_customizer->add_control($section.'_label',array(
		'label' => 'Label button',
		'section' => $section,
		'type' => 'text'
	));

	// link button
	$wp_customizer->add_setting($section.'_link', array(
		'default' => 'http://google.com'
	));
	$wp_customizer->add_control($section.'_link', array(
		'label' => 'Link button',
		'section' => $section,
		'type' => 'text'
	));
}


function custom_footer($wp_customizer){
	$section_w = 'footer_w';
	$section_l = 'footer_l';
	$section_g = 'footer_g';
	$section_f = 'footer_f';
	$section_c = 'footer_c';
	$wp_customizer->add_panel('panel', array(
		'title'=> 'Footer Settings'
	));

	// WHO WE ARE
	$wp_customizer->add_section($section_w, array(
		'title' => 'WHO WE ARE',
		'panel' => 'panel',
		'priority' => 22
	));

	$wp_customizer->add_setting($section_w.'_title', array(
		'default' => 'WHO WE ARE'
	));
	$wp_customizer->add_control($section_w.'_title', array(
		'label' => 'Heading',
		'section' => $section_w,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_w.'_info', array(
		'default' => 'Magnis modipsae voloratati andigen daepeditem quiate re porem que aut labor. Laceaque eictemperum quiae sitiorem rest non restibusaes maio es dem tumquam.'
	));
	$wp_customizer->add_control($section_w.'_info', array(
		'label' => 'Description',
		'section'=> $section_w,
		'type' => 'textarea'
	));

	$wp_customizer->add_setting($section_w.'_label', array(
		'default' => 'More about us'
	));
	$wp_customizer->add_control($section_w.'_label', array(
		'label' => 'Label button',
		'section'=> $section_w,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_w.'_link', array(
		'default' => 'http://google.com'
	));
	$wp_customizer->add_control($section_w.'_link', array(
		'label' => 'Label link',
		'section'=> $section_w,
		'type' => 'text'
	));

	// WHO WE ARE
	$wp_customizer->add_section($section_l, array(
		'title' => 'LATEST WORKS',
		'panel' => 'panel',
		'priority' => 23
	));

	$wp_customizer->add_setting($section_l.'_title', array(
		'default' => 'LATEST WORKS'
	));
	$wp_customizer->add_control($section_l.'_title', array(
		'label' => 'Heading',
		'section' => $section_l,
		'type' => 'text'
	));

	// GET IN TOUCH
	$wp_customizer->add_section($section_g, array(
		'title' => 'GET IN TOUCH',
		'panel' => 'panel',
		'priority' => 24
	));

	$wp_customizer->add_setting($section_g.'_title', array(
		'default' => 'GET IN TOUCH'
	));
	$wp_customizer->add_control($section_g.'_title', array(
		'label' => 'Heading',
		'section' => $section_g,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_g.'_des', array(
		'default' => 'Doloreiur quia commolu ptatemp dolupta oreprerum tibusam eumenis et consent accullignis dentibea autem inisita.'
	));
	$wp_customizer->add_control($section_g.'_des', array(
		'label' => 'Description',
		'section' => $section_g,
		'type' => 'textarea'
	));

	$wp_customizer->add_setting($section_g.'_address', array(
		'default' => '84 Street, City, State 24813'
	));
	$wp_customizer->add_control($section_g.'_address', array(
		'label' => 'Address',
		'section' => $section_g,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_g.'_phone', array(
		'default' => '+00 (123) 456 78 90'
	));
	$wp_customizer->add_control($section_g.'_phone', array(
		'label' => 'Phone',
		'section' => $section_g,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_g.'_email', array(
		'default' => 'info@reen.com'
	));
	$wp_customizer->add_control($section_g.'_email', array(
		'label' => 'Email',
		'section' => $section_g,
		'type' => 'text'
	));

	// FREE UPDATES
	$wp_customizer->add_section($section_f, array(
		'title' => 'FREE UPDATES',
		'panel' => 'panel',
		'priority' => 25
	));

	$wp_customizer->add_setting($section_f.'_title', array(
		'default' => 'FREE UPDATES'
	));
	$wp_customizer->add_control($section_f.'_title', array(
		'label' => 'Heading',
		'section' => $section_f,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_f.'_des', array(
		'default' => 'Conecus iure posae volor remped modis aut lor volor accabora incim resto explabo.'
	));
	$wp_customizer->add_control($section_f.'_des', array(
		'label' => 'Description',
		'section' => $section_f,
		'type' => 'textarea'
	));

	// Copyright
	$wp_customizer->add_section($section_c, array(
		'title' => 'COPYRIGHT',
		'panel' => 'panel',
		'priority' => 25
	));

	$wp_customizer->add_setting($section_c.'_copyright', array(
		'default' => '© 2019 REEN. All rights reserved.'
	));
	$wp_customizer->add_control($section_c.'_copyright', array(
		'label' => 'Copyright',
		'section' => $section_c,
		'type' => 'text'
	));
}

function top_header($wp_customizer){
	$section_l = 'top_left';
	$section_r = 'top_right';

	$wp_customizer->add_panel('panel_top', array(
		'title' => 'Heading Settings'
	));

	// LEFT
	$wp_customizer->add_section($section_l, array(
		'title' => 'LEFT',
		'panel' => 'panel_top'
	));
	$wp_customizer->add_setting($section_l.'_email',array(
		'default' => 'info@reen.com'
	));
	$wp_customizer->add_control($section_l.'_email',array(
		'label' => 'Address Email',
		'section'=> $section_l,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_l.'_phone',array(
		'default' => '+00 (123) 456 78 90'
	));
	$wp_customizer->add_control($section_l.'_phone',array(
		'label' => 'Phone Number',
		'section'=> $section_l,
		'type' => 'text'
	));

	// RIGHT
	$wp_customizer->add_section($section_r, array(
		'title' => 'RIGHT',
		'description' => 'Bỏ trống với các tùy chọn không dùng',
		'panel' => 'panel_top'
	));
	$wp_customizer->add_setting($section_r.'_facebook', array(
		'default' => 'http://facebook.com'
	));
	$wp_customizer->add_control($section_r.'_facebook', array(
		'label' => 'Link Facebook',
		'section' => $section_r,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_r.'_google', array(
		'default' => 'http://google.com'
	));
	$wp_customizer->add_control($section_r.'_google', array(
		'label' => 'Link Google+',
		'section' => $section_r,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_r.'_twitter', array(
		'default' => 'http://twitter.com'
	));
	$wp_customizer->add_control($section_r.'_twitter', array(
		'label' => 'Link Twitter',
		'section' => $section_r,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_r.'_pinterest', array(
		'default' => 'http://pinterest.com'
	));
	$wp_customizer->add_control($section_r.'_pinterest', array(
		'label' => 'Link Pinterest',
		'section' => $section_r,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_r.'_behance', array(
		'default' => 'http://behance.com'
	));
	$wp_customizer->add_control($section_r.'_behance', array(
		'label' => 'Link Behance',
		'section' => $section_r,
		'type' => 'text'
	));

	$wp_customizer->add_setting($section_r.'_dribbble', array(
		'default' => 'http://dribbble.com'
	));
	$wp_customizer->add_control($section_r.'_dribbble', array(
		'label' => 'Link Dribbble',
		'section' => $section_r,
		'type' => 'text'
	));
}



