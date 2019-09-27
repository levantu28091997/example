<?php

/*
Plugin Name: Meta box
Plugin URI: http://google.com
Author: Tu
Author URI: http://facebook.com/levantu1997
Version: 1.0
Description: Meta box basic. Custom field, Add field, Edit field
Textdomain: tuti
*/

function meta_box(){
	add_meta_box('thong-tin','Thông tin ứng dụng','meta_output','slide');
}
add_action('add_meta_boxes','meta_box');

function meta_output($post){
	wp_nonce_field( 'save_cost_services', 'cost_services_nonce' );
	$link_btn = get_post_meta($post->ID,'_link_btn', true);
	$label_btn = get_post_meta($post->ID,'_label_btn', true);
	wp_nonce_field('save_content', 'content_nonce'); // bảo mật giữ liệu

	echo ('<label for="label_btn" style="width:49%; display:inline-block;">Label button  </label>');
	echo ('<input type="text" id="label_btn" name="label_btn" value="'.$label_btn.'" style="width:50%; display:inline-block;" />');
	echo "</br>";
	echo ('<label for="link_btn" style="width:49%; display:inline-block;">Link button </label>');
	echo ('<input type="text" id="link_btn" name="link_btn" value="'.$link_btn.'" style="width:50%; display:inline-block;" />');
}

function meta_save($post_id){
	// $cost_services_nonce = $_POST['cost_services_nonce'];
 //  // nếu nonce chưa được gán giá trị
 //  if( !isset( $cost_services_nonce ) ) {
 //     return;
 //  }
 //  // nếu giá trị nonce không trùng khớp
 //  if( !wp_verify_nonce( $cost_services_nonce, 'save_cost_services' ) ) {
 //     return;
 //  }

	$link_btn = sanitize_text_field($_POST['link_btn']);
	update_post_meta($post_id, '_link_btn', $link_btn);

	$label_btn = $_POST['label_btn'];
	update_post_meta($post_id, '_label_btn', $label_btn);
}
add_action('save_post', 'meta_save');

