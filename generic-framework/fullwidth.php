<?php
/**
 * Template Name: Full-width
 * Description: A full-width template with no sidebar
 */
get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="sixteen columns site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'page' ); ?>
		<?php endwhile; // end of the loop. ?>
	</main>

</div><!-- #primary -->

<?php get_footer(); ?>