<?php
// The main template file.
get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?> site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	</main>

	<?php get_sidebar(); ?>

</div><!-- #primary -->

<?php get_footer(); ?>