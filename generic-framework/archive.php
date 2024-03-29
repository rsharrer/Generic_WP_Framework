<?php
// Archive template
get_header(); ?>

<div id="primary" class="container content-area">
	<main id="main" class="<?php echo get_theme_mod( 'genericfw_contentwidth', 'eleven' ); ?> columns <?php echo get_theme_mod( 'genericfw_customcontentclass' ); ?> site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
						if ( is_category() ) :
							single_cat_title();

						elseif ( is_tag() ) :
							single_tag_title();

						elseif ( is_author() ) :
							printf( __( 'Author: %s' ), '<span class="vcard">' . get_the_author() . '</span>' );

						elseif ( is_day() ) :
							printf( __( 'Day: %s' ), '<span>' . get_the_date() . '</span>' );

						elseif ( is_month() ) :
							printf( __( 'Month: %s' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format' ) ) . '</span>' );

						elseif ( is_year() ) :
							printf( __( 'Year: %s' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format' ) ) . '</span>' );

						elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
							_e( 'Asides' );

						elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
							_e( 'Galleries' );

						elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
							_e( 'Images' );

						elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
							_e( 'Videos' );

						elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
							_e( 'Quotes' );

						elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
							_e( 'Links' );

						elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
							_e( 'Statuses' );

						elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
							_e( 'Audios' );

						elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
							_e( 'Chats' );

						else :
							_e( 'Archives' );

						endif;
					?>
				</h1>
				<?php
					// Show an optional term description.
					$term_description = term_description();
					if ( ! empty( $term_description ) ) :
						printf( '<div class="taxonomy-description">%s</div>', $term_description );
					endif;
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php numeric_posts_nav(); ?>
			
		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
	</main>

	<div id="sidebar" class="<?php echo get_theme_mod( 'genericfw_sidebarwidth', 'five' ); ?> columns <?php echo get_theme_mod( 'genericfw_customsidebarclass' ); ?>" role="complementary">
		<?php get_sidebar(); ?>
	</div>

</div><!-- #primary -->

<?php get_footer(); ?>