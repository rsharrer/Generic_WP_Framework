<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'sproket-framework' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<span class="author-link">By <?php the_author_posts_link(); ?> |</span>
		<span class="cat-links"><?php the_category(', '); ?></span>
		<span class="tags-links"><?php the_tags( ' | ', ', ', '' ); ?></span>
		<span class="align-right readmore-link"><a href="<?php the_permalink(); ?>">Read More &#10095;</a></span>
	</footer><!-- .entry-footer -->

	<?php comments_template(); ?>

</article>