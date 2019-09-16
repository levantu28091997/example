<?php

class Exam_widget extends WP_Widget {
	// setup widget name
	public function __construct(){
		parent::__construct(
			'exam_widget', //ID
			'Anhtu', //Name
			array( 'description' => 'Mô tả của widget', )
		);
	}

	// form
	public function form($instance){
		parent::form($instance);

		$default = array(
				'title' => 'Full Name'
		);

		$instance = wp_parse_args( (array) $instance, $default);

		$title = esc_attr( $instance['title'] );


		echo "nhập tiêu đề <input type='text' class='widefat' name='".$this->get_field_name('title')."' value='".$title."'></input>";
	}

	// save form
	public function update($new_instance, $old_instance){

	}

	// show widget
	public function widget( $args, $instance){

	}

}

function register_exam_widget(){
	register_widget('Exam_widget');
}
add_action('widgets_init','register_exam_widget');