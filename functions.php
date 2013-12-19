<?php
function load_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/stylesheets/skeleton.css');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css');
	wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/stylesheets/layout.css');

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-layout' );

}
add_action('wp_enqueue_scripts', 'load_styles');