<?php
// BROWSER DETECTION
add_filter('body_class','browser_body_class');
function browser_body_class($classes) {
	global $is_lynx, $is_gecko, $is_IE, $is_opera, $is_NS4, $is_safari, $is_chrome, $is_iphone;

	if($is_lynx) $classes[] = 'lynx';
	elseif($is_gecko) $classes[] = 'firefox';
	elseif($is_opera) $classes[] = 'opera';
	elseif($is_NS4) $classes[] = 'ns4';
	elseif($is_safari) $classes[] = 'safari';
	elseif($is_chrome) $classes[] = 'chrome';
	elseif($is_IE) $classes[] = 'ie';
	else $classes[] = 'unknown';

	if($is_iphone) $classes[] = 'iphone';
	return $classes;
}

// GET ALL THE STYLES!
function load_theme_styles() {

	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/stylesheets/skeleton.css');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css');
	wp_register_style( 'skeleton-layout', get_template_directory_uri() . '/stylesheets/layout.css');
	wp_register_script( 'local_jquery', get_template_directory_uri() . '/js/jquery-2.0.3.min.js');
	wp_register_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js');
	wp_register_script( 'resmenu', get_template_directory_uri() . '/js/jquery.resmenu.min.js');
	wp_register_script( 'js_features', get_template_directory_uri() . '/js/features.js');

	wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'skeleton-base', 'skeleton-style', 'skeleton-layout' ) );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-base' );
	wp_enqueue_style( 'skeleton-layout' );
	wp_enqueue_script( 'local_jquery' );
	wp_enqueue_script( 'fitvids' );
	wp_enqueue_script( 'resmenu' );
	wp_enqueue_script( 'js_features' , get_template_directory_uri() . '/js/features.js' , array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'load_theme_styles');

// Make shortcodes with in widgets, because... that's annouying.
add_filter( 'widget_text', 'do_shortcode' );

// Featured Image Engaged
add_theme_support('post-thumbnails');

// RSS feed links
add_theme_support( 'automatic-feed-links' );

if ( ! isset( $content_width ) )
	$content_width = 960;

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

add_action( 'init', 'register_my_menus' );
 
function register_my_menus() {
	register_nav_menus(
		array(
			'primary_nav' => __( 'Primary Menu' ),
			'footer_nav' => __( 'Footer Menu' )
		)
	);
}

function fallback_menu(){
    echo 'Please assign a menu in the admin area.';
}