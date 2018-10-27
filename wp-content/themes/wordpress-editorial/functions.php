<?php

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

function asset_path($filename) {

	$dist_path = get_template_directory_uri() . 'assets/dist/';
	$directory = dirname($filename) . '/';
	$file = basename($filename);
	static $manifest;

}

function editorial_enqueue_assets() {
	wp_enqueue_style( 'css/main', get_template_directory_uri() . '/assets/dist/styles/main.css', array(), '1.0.1'); 
	wp_enqueue_style( 'css/font-awesome', get_template_directory_uri() . '/assets/dist/styles/font-awesome.min.css', array(), '1.0.0');
	wp_enqueue_script( 'js/jquery', get_template_directory_uri() . '/assets/dist/scripts/jquery.min.js', array(), '3.3.1', true );
	wp_enqueue_script( 'js/skel', get_template_directory_uri() . '/assets/dist/scripts/skel.min.js', array('jquery'), '1.0.1', true );
	wp_enqueue_script( 'js/util', get_template_directory_uri() . '/assets/dist/scripts/util.js', array('jquery'), '1.0.1', true );
	wp_enqueue_script( 'js/main', get_template_directory_uri() . '/assets/dist/scripts/main.js', array('jquery'), '1.0.1', true );
}

add_action( 'wp_enqueue_scripts', 'editorial_enqueue_assets' );

?>