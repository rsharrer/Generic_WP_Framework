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

<?php
wp_head(); 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
?>
</head>
<body <?php body_class(); ?>>
	<header id="header" class="container">
		<div class="sixteen columns">
			<div class="align-left">
				<a id="logo" href="<?php echo home_url(); ?>"><?php if(is_home() || is_front_page()) {?> <h1 class="remove-bottom remove-top"><?php bloginfo('name');?></h1> <?php } else { ?> <span class="remove-bottom remove-top"><?php bloginfo('name');?></span> <?php } ?></a>
				<h5><?php echo get_bloginfo('description');?></h5>
			</div>
		</div>
		<nav id="primary_nav_wrap" class="sixteen columns">
			<?php wp_nav_menu( array('theme_location' => 'primary_nav' , 'menu_id' => 'primary_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
		</nav>
	</header>