<?php 
function basic_respond() {
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/basicrespond.css', array(), '1.0.0', 'all');
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/basicrespond.js', array(), '1.0.0', false);
}

add_action('wp_enqueue_scripts','basic_respond');

function basic_respond_setup() {
add_theme_support('menus');



register_nav_menu('primary','Primary Header Navigation');
register_nav_menu('secondary','Footer Navigation');
register_nav_menu('left_sidebar','Left Sidebar Navigation');
register_nav_menu('right_sidebar','Right Sidebar Navigation');
}

add_action('init', 'basic_respond_setup');
add_theme_support('custom-background');
$defaults = array(
	'default-image'          => '',
	'width'                  => 1000,
	'height'                 => 240,
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => 'black',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
add_theme_support('post-thumbnails');
?>