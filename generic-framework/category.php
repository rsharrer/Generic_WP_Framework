<?php get_header(); ?>

	<div id="main" class="container">
		<div id="content" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?>">
			<?php get_template_part( 'loop', 'index' ); ?>
		</div>

		<div id="sidebar" class="<?php echo get_theme_mod( 'genericfw_sidebarwidth', 'five' ); ?> columns <?php echo get_theme_mod( 'genericfw_customsidebarclass' ); ?>">
			<?php get_sidebar(); ?>
		</div>
	</div>

<?php get_footer(); ?>