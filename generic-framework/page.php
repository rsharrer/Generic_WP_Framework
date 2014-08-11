<?php
// The page template file.
get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?> site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	</main>

	<div id="sidebar" class="<?php echo get_theme_mod( 'genericfw_sidebarwidth', 'five' ); ?> columns <?php echo get_theme_mod( 'genericfw_customsidebarclass' ); ?>" role="complementary">
		<?php get_sidebar(); ?>
	</div>

</div><!-- #primary -->

<?php get_footer(); ?>