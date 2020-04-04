<?php
//load css
function load_css() {

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
	wp_enqueue_style('bootstrap');


}
add_action('wp_enqueue_scripts','load_css');

function custom_css() {

	wp_register_style('custom_style', get_template_directory_uri() . '/style.css', array(), false, 'all' );
	wp_enqueue_style('custom_style');
 
}
add_action('wp_enqueue_scripts','custom_css');

//load javascript
function load_js() {

	wp_enqueue_script('jquery');
	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
	wp_enqueue_script('bootstrap');
}	
add_action('wp_enqueue_scripts','load_js');

//additional tools
add_theme_support('menus');

//menu



require_once( 'bs4navwalker.php' );