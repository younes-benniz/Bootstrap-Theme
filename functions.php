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

// tools
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

function custom_logo_setup() {
  		$parameters = array(
				 'height'      => 100,
				 'width'       => 100,
				 'flex-height' => true,
				 'flex-width'  => true,
 					);
 		add_theme_support( 'custom-logo', $parameters );
}
add_action( 'after_setup_theme', 'custom_logo_setup' );


//menu
require_once( 'bs4navwalker.php' );

register_nav_menus(
	array
	(
		'primary' => 'Main menu',
		'Secondary' => 'Footer menu',
	) );

//Register a Custom post type for Carousel 

add_action( 'init', 'custom_bootstrap_slider' );

function custom_bootstrap_slider() {
		$labels = array(
				'name' => _x( 'Slider', 'post type general name'),
				'singular_name' => _x( 'Slide', 'post type singular name'),
				'menu_name' => _x( 'Bootstrap Slider', 'admin menu'),
				'name_admin_bar' => _x( 'Slide', 'add new on admin bar'),
				'add_new' => _x( 'Add New', 'Slide'),
				'add_new_item' => __( 'Name'),
				'new_item' => __( 'New Slide'),
				'edit_item' => __( 'Edit Slide'),
				'view_item' => __( 'View Slide'),
				'all_items' => __( 'All Slide'),
				'featured_image' => __( 'Featured Image', 'text_domain' ),
				'search_items' => __( 'Search Slide'),
				'parent_item_colon' => __( 'Parent Slide:'),
				'not_found' => __( 'No Slide found.'),
				'not_found_in_trash' => __( 'No Slide found in Trash.'),
				);
		$args = array(
				'labels' => $labels,
				'menu_icon' => 'dashicons-star-half',
				'description' => __( 'Description.'),
				'public' => true,
				'publicly_queryable' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'query_var' => true,
				'rewrite' => true,
				'capability_type' => 'post',
				'has_archive' => true,
				'hierarchical' => true,
				'menu_position' => null,
				'supports' => array('title','editor','thumbnail')
				);
register_post_type( 'slider', $args );
}


//image customizing


//add_image_size('The name',height ,width)