<?php
function load_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/stylesheets/skeleton.css');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css');
	wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/stylesheets/layout.css');
	//wp_register_style( 'bootstrap-min', get_template_directory_uri() . '/stylesheets/bootstrap.min.css');

	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-layout' );
	//wp_enqueue_style( 'bootstrap-min' );
	//wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'load_styles');