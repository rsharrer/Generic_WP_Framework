<?php
// GET ALL THE STYLES!
function load_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/stylesheets/skeleton.css');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css');
	wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/stylesheets/layout.css');
	wp_register_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js');

	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-layout' );
	wp_enqueue_script( 'fitvids' );

}
add_action('wp_enqueue_scripts', 'load_styles');

//Making jQuery Google API
function modify_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js', false, '1.8.1');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'modify_jquery');

// Make shortcodes with in widgets, because... that's annouying.
add_filter( 'widget_text', 'do_shortcode' );

// Featured Image Engaged
add_theme_support('post-thumbnails');

// Sidebar
register_sidebar( array(
	'name' => 'Sidebar',
	'id' => 'main-sidebar',
	'description' => 'Widgets for the main sidebar.',
	'before_widget' => '<div id="%1$s" class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title' => '<h3 class="sidebar-title">',
	'after_title' => '</h3>'
));