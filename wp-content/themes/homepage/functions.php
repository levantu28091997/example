<?php

// set duong dan thu muc
define('THEME_URI', get_template_directory() );
define('CORE', THEME_URI.'/core');

// duong dan file init.php
require_once(CORE."/init.php");
// Option
require_once(get_template_directory() . '/options/option.php');

// thiet lap chieu rong noi dung
if( ! isset($content_width) ){
	$content_width = 620;
}


// setting theme
if ( !function_exists('theme_setting')) {
	function theme_setting(){
		// thiet lap textdomain
		$language_folder = THEME_URI . "/languages";
		load_theme_textdomain('tuti', $language_folder);
		// post-thumbnails
		add_theme_support( 'post-thumbnails' );

		// post-format
		add_theme_support( 'post-format', array(
			'aside',
			'gallary',
			'quote',
			'image',
		) );

		// title tag
		add_theme_support( 'title-tags' );

		// feed link
		add_theme_support( 'automatic-feed-links' );

		// custom bạkgroud
		$default = array(
			'default-image' => '',
			'default-repeat' => 'no-repeat',
			'default-preset' => 'default',
			'default-position-x' => 'left',
			'default-position-y' => 'top',
			'default-size' => 'auto',
			'default-attachment' => 'scroll',
			'default-color' => '',
			'admin-head-callback' => '',
			'admin-preview-callback' => '',
		);
		add_theme_support('custom-background', $default);

		// html5
		add_theme_support('html5', array(
			'comment-list',
			'comment-form',
			'search-form',
			'gallery',
			'caption'
		));

		// widgets
		add_theme_support('widgets');

		// custom logo
		add_theme_support('custom-logo',array(
			'height' => 40,
			'width' => 162,
			'flex-width' => true
		));

		add_theme_support('menus');
		// Thêm menu
		register_nav_menus(
			array(
				'primary-menu'=> __('Primary Menu', 'tuti'),
				'footer-menu' => __('Footer Menu', 'tuti'),
			)
		);

	}
	add_action('after_setup_theme','theme_setting');
}


add_filter( 'get_custom_logo', 'homeagency' );
function homeagency(){
	 $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="custom-logo-link" rel="home" itemprop="url">%2$s</a>',
            esc_url( home_url() ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'oc',
            ) )
        );
    return $html;  
}

// theme option
/*
function add_theme_option(){
	add_theme_page('Theme title setting', 'Theme title setting', 'edit_theme_options', 'test-theme-options', 'theme_option_page');
}
add_action('admin_menu', 'add_theme_option');
add_theme_page("Theme Customization", "Theme Customization", "manage_options", "theme-options", "theme_option_page", null, 99);
function theme_option_page() {
    ?>
    <div class="block">
    	<h2>Theme option</h2>
    	<form action="option.php" method="POST">
			<?php
			// truong cai dat hien thi tren trang
			settings_fields("theme-options-grp");

			//hien thi tat ca cac section cua theme
    		do_settings_sections("theme-options");
    		submit_button();
    		?>
    	</form>
    </div>

    <?php
    	function theme_sections_description(){
    		echo '<p>Theme option section</p>';
    	}
    	function options_callback(){
    		echo "<p>This is new Settings</p>";
    	}

    	// móc 'admin-init' để tạo phần cài đặt với tiều đề "New Theme Options Section"
    	function test_theme_setting(){
    		add_option('first_field_option',1); // thêm tùy chọn vào csdl
    		add_settings_section('first_section','New Theme Options Section','theme_section_description','theme-options');
    		add_settings_field('first_field_option','Test Settings Field','options_callback',
			'theme-options','first_section');// thêm trường vào “first_section”
			register_setting( 'theme-options-grp', 'first_field_option');
    	}
    	add_action('admin_init','test_theme_setting');
    ?>

	<?php	
}
*/

// Theme option
add_action('admin_init','register_settings');
function register_settings(){
	register_setting('my-settings-group', 'phone');
	register_setting('my-settings-group', 'company_address');
}

add_action('admin_menu','my_create_menu');
if(!function_exists('my_create_menu')){
	function my_create_menu(){
		//menu page
		$page = add_menu_page('My Theme option', 'Theme Options', 'manage_options', 'my-optionpage', 'my_settings_page', plugins_url( 'myplugn/images/icon.png' ), 6);

		//call register settings function
		add_action('admin_init','my_create_menu');
	}
}
?>

<?php
if(!function_exists('my_settings_page')){
	function my_settings_page() {
	?>
	<div class="wrap">
		<h2>Theme Settings</h2>
		<form id="landingOptions" method="post" action= "options.php">
		  <?php settings_fields( 'my-settings-group' ); ?>
		  <p><label for="phone">Phone</label><br/>
		  <input type="text" name="phone" value="<?php echo get_option('phone')?>"/></p>
		   
		  <p><label for="company_address">Company Address</label><br/>
		  <textarea name="company_address"><?php echo get_option('company_address')?></textarea></p>
		   
		  <p class="submit">
		  <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		  //hoặc dùng sẵn
		  <?php submit_button(); ?>
		  </p>
		</form>
	</div>
	<?php 
	}
} ?>