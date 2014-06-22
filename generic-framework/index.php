<?php
// The main template file.
get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?> site-main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

			<?php numeric_posts_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</main>

	<?php get_sidebar(); ?>

</div><!-- #primary -->

<?php get_footer(); ?>