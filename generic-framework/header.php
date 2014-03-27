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
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('|',true,'right'); ?></title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="header" class="container">
		<div class="sixteen columns">
			<div class="align-left">
				<?php if ( get_theme_mod( 'genericfw_logo' ) ) : ?>
					<?php if(is_home() || is_front_page()) {?> <h1 class="remove-bottom remove-top" id="site-title"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'genericfw_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></h1> <?php } else { ?> <div id="site-title" class="remove-bottom remove-top"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'genericfw_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a></div> <?php } ?>
				<?php else : ?>
					<?php if(is_home() || is_front_page()) {?> <h1 class="remove-bottom remove-top" id="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name');?></a></h1> <?php } else { ?> <div id="site-title" class="remove-bottom remove-top"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name');?></a></div> <?php } ?>
					<h5><?php echo get_bloginfo('description');?></h5>
				<?php endif; ?>
			</div>
		</div>
		<div id="primary_nav_wrap" class="sixteen columns">
			<?php wp_nav_menu( array('theme_location' => 'primary_nav' , 'menu_id' => 'primary_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
		</div>
	</div>