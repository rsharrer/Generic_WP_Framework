<?php get_header(); ?>

	<div id="main" class="container">
		<div id="content" class="two-thirds column alpha">
			<?php get_template_part( 'loop', 'index' ); ?>
		</div>

		<div id="sidebar" class="one-third column omega">
			Sidebar
		</div>

	</div>

<?php get_footer(); ?>