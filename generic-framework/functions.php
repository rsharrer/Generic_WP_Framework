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
add_action('wp_enqueue_scripts', 'genericfw_styles');
function genericfw_styles() {

	wp_register_style( 'normalize', get_template_directory_uri() . '/stylesheets/normalize.css', '', '3.0.0' );
	wp_register_style( 'skeleton-style', get_template_directory_uri() . '/stylesheets/skeleton.css', '', '1.2');
	wp_register_style( 'skeleton-base', get_template_directory_uri() . '/stylesheets/base.css' , '', '1.2');
	
	wp_enqueue_style( 'normalize' );
	wp_enqueue_style( 'style', get_stylesheet_uri(), array( 'skeleton-base', 'skeleton-style' ), '0.9.80' );
	wp_enqueue_style( 'skeleton-style' );
	wp_enqueue_style( 'skeleton-base' );
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	wp_enqueue_script('fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', array('jquery'), '', TRUE); 
	wp_enqueue_script('fitvids-settings', get_template_directory_uri() . '/js/FitVids.js', array(), '', TRUE);
}

add_action( 'wp_head', create_function( '',
	'echo \'<!--[if lt IE 9]><script src="'.get_template_directory_uri().'/js/html5shiv.js"></script><![endif]-->\';'
	) );

function genericfw_editor_styles() {
	add_editor_style( 'stylesheets/editor-style.css' );
}
add_action( 'init', 'genericfw_editor_styles' );

add_action( 'after_setup_theme', 'genericfw_setup' );
function genericfw_setup(){
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_theme_support('post-thumbnails');
	add_theme_support( 'automatic-feed-links' );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );
}

// Menus
add_action( 'after_setup_theme', 'genericfw_menus' );
function genericfw_menus() {
	register_nav_menus(
		array(
			'primary_nav' => ( 'Primary Menu' ),
			'footer_nav' => ( 'Footer Menu' )
			)
		);
}

function fallback_menu(){
	if ( is_user_logged_in() ) {echo '<div class="error"><div class="genericon genericon-warning"></div> <strong>No Menu Assigned.</strong> <a href="'.$url = admin_url().'nav-menus.php" class="btn round">Go to Menus</a></div>';}
}

// Make shortcodes with in widgets
add_filter( 'widget_text', 'do_shortcode' );

// Sidebar
function genericfw_widgets() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'main-sidebar',
		'description' => 'Widgets for the main sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
		));
}
add_action( 'widgets_init', 'genericfw_widgets' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';