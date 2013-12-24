<!DOCTYPE html <?php language_attributes(); ?>>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">
<?php
wp_head(); 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
?>
</head>
<body <?php body_class(); ?>>
	<header id="header" class="container">
		<div class="sixteen columns">
			<div class="align-left">
				<a class="logo" href="<?php echo home_url(); ?>"><h1 class="remove-bottom remove-top" style="margin-top: 40px"><?php echo get_bloginfo('name');?></h1></a>
				<h5><?php echo get_bloginfo('description');?></h5>
			</div>
		</div>
		<nav id="primary_nav_wrap" class="sixteen columns">
			<?php wp_nav_menu( array('theme_location' => 'primary_nav' , 'menu_id' => 'primary_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
		</nav>
	</header>