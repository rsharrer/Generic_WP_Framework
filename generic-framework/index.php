<?php
// The main template file.
get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?> site-main" role="main">
		<?php get_template_part( 'loop', 'index' ); ?>
	</main>

	<?php get_sidebar(); ?>

</div><!-- #primary -->

<?php get_footer(); ?>