<?php
/**
 * Template Name: Full-width
 * Description: A full-width template with no sidebar
 */
get_header(); ?>

	<div id="main" class="container">
		<div id="content" class="sixteen columns">
			<?php get_template_part( 'loop', 'page' ); ?>
		</div>
	</div>

<?php get_footer(); ?>