<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() or is_archive() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php elseif(is_front_page() or is_home()) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . ( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>

<?php if ( get_post_type() == 'post') : // Only display Excerpts for Search ?>
	<footer class="entry-footer">
		<span class="author-link">By <?php the_author_posts_link(); ?> </span> on <?php the_date('F jS, o', '<span class="date">', ' |</span>'); ?>
		<span class="cat-links"><?php the_category(', '); ?></span>
		<span class="tags-links"><?php the_tags( ' | ', ', ', '' ); ?></span>
		<span class="align-right readmore-link"><a href="<?php the_permalink(); ?>">Read More &#10095;</a></span>
	</footer><!-- .entry-footer -->
<?php endif; ?>

				</article>