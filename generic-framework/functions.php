<?php

/* Table of Content
==================================================
	SETUP
	STYLES AND SCRIPTS
	MENUS
	WIDGETS AND SIDEBARS
	MISC
	INC IMPORTS
*/

// SETUP
function genericfw_setup(){
	if ( ! isset( $content_width ) ) $content_width = 960;
	add_theme_support('post-thumbnails');
	add_theme_support( 'automatic-feed-links' );

	// Enable support for HTML5 markup.
	
}
add_action( 'after_setup_theme', 'genericfw_setup' );

// STYLES AND SCRIPTS

// Register Style
function genericfw_styles() {

	wp_register_style( 'normalize', get_template_directory_uri().'/stylesheets/normalize.css', false, '3.0.0', 'all' );
	wp_enqueue_style( 'normalize' );

	wp_register_style( 'skeleton-style', get_template_directory_uri().'/stylesheets/skeleton.css', false, '1.2', 'all' );
	wp_enqueue_style( 'skeleton-style' );

	wp_register_style( 'skeleton-base', get_template_directory_uri().'/stylesheets/base.css', false, '1.2', 'all' );
	wp_enqueue_style( 'skeleton-base' );

	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

	wp_register_style( 'genericfw', get_stylesheet_uri(), array( 'normalize', 'skeleton-style', 'skeleton-base' ));
	wp_enqueue_style( 'generic_framework', get_stylesheet_uri() );
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'genericfw_styles' );

// Register Script
function genericfw_scripts() {

	wp_register_script( 'fitvids', get_template_directory_uri().'/js/jquery.fitvids.js', array( 'jquery' ), '1.0.3', true );
	wp_enqueue_script( 'fitvids' );

	wp_register_script( 'fitvids-settings', get_template_directory_uri().'/js/FitVids.js', false, false, true );
	wp_enqueue_script( 'fitvids-settings' );

}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'genericfw_scripts' );

add_action( 'wp_head', create_function( '',
	'echo \'<!--[if lt IE 9]><script src="'.get_template_directory_uri().'/js/html5shiv.js"></script><![endif]-->\';'
	) );

function genericfw_editor_styles() {
	add_editor_style( 'stylesheets/editor-style.css' );
}
add_action( 'init', 'genericfw_editor_styles' );

// MENUS
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

// WIDGETS AND SIDEBARS
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

// MISC

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

function numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="pagination"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

// INC IMPORTS

//Load Jetpack compatibility file.
require get_template_directory() . '/inc/jetpack.php';

//Customizer additions.
require get_template_directory() . '/inc/customizer.php';