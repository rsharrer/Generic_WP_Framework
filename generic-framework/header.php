<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|',true,'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'generic-framework' 	); ?></a>
		<header id="header" class="site-header" role="banner">
			<div class="container">
				<div class="align-left site-logo site-title">
					<!-- This block handles the Site Title and Logo also makes the title an h1 tag on the 	homepave and a div on internal pages -->
					<?php if ( get_theme_mod( 'genericfw_logo' ) ) : ?>
						<?php if(is_home() || is_front_page()) {?>
							<h1 class="remove-bottom remove-top" id="logo">
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr	( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
									<img src='<?php echo esc_url( get_theme_mod( 'genericfw_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
								</a>
							</h1>
						<?php } else { ?>
							<div id="logo" class="remove-bottom remove-top">
								<a href='<?php echo esc_url( home_url( '/' ) ) ; ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='	home'>
									<img src='<?php echo esc_url( get_theme_mod( 'genericfw_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
								</a>
							</div>
						<?php } ?>
					<?php else : ?>
						<?php if(is_home() || is_front_page()) {?>
							<h1 id="blog-title" class="remove-bottom remove-top">
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php bloginfo('name');?>
								</a>
							</h1>
						<?php } else { ?>
							<div id="blog-title" class="remove-bottom remove-top">
								<a href="<?php echo esc_url(home_url('/')); ?>">
									<?php bloginfo('name');?>
								</a>
							</div>
						<?php } ?>
							<h5>
								<?php echo get_bloginfo('description');?>
							</h5>
					<?php endif; ?>
					<!-- End Block -->
				</div>
			</div>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="container">
					<div id="main-navigation" class="sixteen columns">
						<?php wp_nav_menu( array('theme_location' => 'primary_nav' , 'menu_id' => 'primary_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
					</div>
				</div>
			</nav><!-- site-navigation -->
		</header><!-- #header -->
	
		<div id="content" class="site-content">