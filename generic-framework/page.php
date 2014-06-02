<?php
// The main template file.
get_header(); ?>

<div id="primary" class="container">
	<main id="main" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?> site-main" role="main">
		<?php get_template_part( 'loop', 'page' ); ?>
	</main>

	<?php get_sidebar(); ?>

</div><!-- #primary -->

<?php get_footer(); ?>