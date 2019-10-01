<?php

if (! class_exists('HomePage_Theme_Options')) {
	class HomePage_Theme_Options{ //class chứa toàn bộ theme option
		// khai báo lại các biến toàn cục Redux Framework có sử dụng để tái sử dụng
		public $args = array();
		public $section = array();
		public $theme;
		public $ReduxFramework;

		// Load Redux Framework
		public function __construst(){
			if ( !class_exists('ReduxFramework')) {
				return;
			}
			if ( true == Redux_Helpers::isTheme(__FILE__) ) {
				$this->initSettings();
			}else{
				add_action( 'plugin_loaded', array( $this, 'initSettings' ), 10);
			}
		}

		public function initSettings(){
			/* set the default argument
				Method này sẽ chứa các thiết lập cơ bản cho trang Option Framework
			*/
			$this->setArguments(
				$theme = wp_get_theme(); // Lưu các đối tượng trả về bởi hàm wp_get_theme() vào biến $theme để làm một số việc tùy thích.
			    $this->args = array(
		            // Các thiết lập cho trang Options
		            'opt_name'  => 'tp_options', // Tên biến trả dữ liệu của từng options, ví dụ: tp_options['field_1']
		            'display_name' => $theme->get( 'Name' ), // Thiết lập tên theme hiển thị trong Theme Options
		            'menu_type'          => 'menu',
			        'allow_sub_menu'     => true,
			        'menu_title'         => __( 'TP Theme Options', 'tuti' ),
			        'page_title'         => __( 'TP Theme Options', 'tuti' ),
			        'dev_mode' => false,
			        'customizer' => true,
			        'menu_icon' => '', // Đường dẫn icon của menu option
			        // Chức năng Hint tạo dấu chấm hỏi ở mỗi option để hướng dẫn người dùng */
			        'hints'              => array(
			            'icon'          => 'icon-question-sign',
			            'icon_position' => 'right',
			            'icon_color'    => 'lightgray',
			            'icon_size'     => 'normal',
			            'tip_style'     => array(
			                'color'   => 'light',
			                'shadow'  => true,
			                'rounded' => false,
			                'style'   => '',
			            ),
			            'tip_position'  => array(
			                'my' => 'top left',
			                'at' => 'bottom right',
			            ),
			            'tip_effect'    => array(
			                'show' => array(
			                    'effect'   => 'slide',
			                    'duration' => '500',
			                    'event'    => 'mouseover',
			                ),
			                'hide' => array(
			                    'effect'   => 'slide',
			                    'duration' => '500',
			                    'event'    => 'click mouseleave',
			                ),
			            ),
			        ) // end Hints
			    )

			);

			/* Đặt vài tab để xem sự thực hiện
				Thiết lập khu vực để hướng dẫn người dùng
			*/
			$this->setHelpTabs(
				$this->args['help_tabs'][] = array(
			        'id'      => 'redux-help-tab-1',
			        'title'   => __( 'Theme Information 1', 'tuti' ),
			        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'tuti' )
			    );
			 
			    $this->args['help_tabs'][] = array(
			        'id'      => 'redux-help-tab-2',
			        'title'   => __( 'Theme Information 2', 'tuti' ),
			        'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'tuti' )
			    );
			 
			    // Set the help sidebar
			    $this->args['help_sidebar'] = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'tuti' );
			);

			// tạo 1 section và fields
			$this->setSections(
				// Home Section
			    $this->sections[] = array(
			        'title'  => __( 'Header', 'tuti' ),
			        'desc'   => __( 'All of settings for header on this theme.', 'tuti' ),
			        'icon'   => 'el-icon-home',
			        'fields' => array()
			    ); // end section
			);

			if ( ! isset($this->args['opt_name'])) {
				return;
			}
			$this->ReduxFramework = new ReduxFramework($this->section,  $this->args);
		}
	}
	// kich hoat  class  HomePage_Theme_Options
	global $reduxConfig;
	$reduxConfig = new HomePage_Theme_Options();
}
