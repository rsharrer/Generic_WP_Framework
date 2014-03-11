<?php get_header(); ?>

	<div id="main" class="container">
		<div id="content" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns">
			<?php get_template_part( 'loop', 'single' ); ?>
		</div>

		<div id="sidebar" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'five' ); ?> columns">
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php get_footer(); ?>