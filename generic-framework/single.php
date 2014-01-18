<?php get_header(); ?>

	<div id="main" class="container">
		<div id="content" class="eleven columns">
			<?php get_template_part( 'loop', 'single' ); ?>
		</div>

		<div id="sidebar" class="five columns">
			<?php get_sidebar(); ?>
		</div>

	</div>

<?php get_footer(); ?>