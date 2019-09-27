<?php

function create_custom_post_type(){
	$label = array(
		'name' => 'Skills', //ten post type dang so nhieu
		'singular_name' => 'Skills', // ten post type dang so it
	);

	$args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Danh sách các skill', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'custom-fields'
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array(), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => true, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-screenoptions', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
	register_post_type('skill',$args);
}

add_action('init', 'create_custom_post_type');

function get_skills() {
    $args = array(
        'post_type'=> 'skill'
    );    
    
    return get_posts($args);
}


function create_slide(){
    $label = array(
        'name' => 'Slides',
        'singular_name' =>'Slide',
    );

    $args = array(
        'labels' => $label, //Gọi các label trong biến $label ở trên
        'description' => 'Danh sách các slide', //Mô tả của post type
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'revisions',
            'custom-fields',
        ), //Các tính năng được hỗ trợ trong post type
        'taxonomies' => array(), //Các taxonomy được phép sử dụng để phân loại nội dung
        'hierarchical' => true, //Cho phép phân cấp, nếu là false thì post type này giống như Post, true thì giống như Page
        'public' => true, //Kích hoạt post type
        'show_ui' => true, //Hiển thị khung quản trị như Post/Page
        'show_in_menu' => true, //Hiển thị trên Admin Menu (tay trái)
        'show_in_nav_menus' => true, //Hiển thị trong Appearance -> Menus
        'show_in_admin_bar' => true, //Hiển thị trên thanh Admin bar màu đen.
        'menu_position' => 5, //Thứ tự vị trí hiển thị trong menu (tay trái)
        'menu_icon' => 'dashicons-format-gallery', //Đường dẫn tới icon sẽ hiển thị
        'can_export' => true, //Có thể export nội dung bằng Tools -> Export
        'has_archive' => true, //Cho phép lưu trữ (month, date, year)
        'exclude_from_search' => false, //Loại bỏ khỏi kết quả tìm kiếm
        'publicly_queryable' => true, //Hiển thị các tham số trong query, phải đặt true
        'capability_type' => 'post' //
    );
    register_post_type('slide', $args);
}
add_action('init','create_slide');