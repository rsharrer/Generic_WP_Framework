<?php get_header(); ?>

	<div id="main" class="container">
		<div id="content" class="eleven columns">
			<?php get_template_part( 'loop', 'page' ); ?>
		</div>

		<div id="sidebar" class="five columns">
			<?php get_template_part( 'sidebar' ); ?>
		</div>

	</div>

<?php get_footer(); ?>