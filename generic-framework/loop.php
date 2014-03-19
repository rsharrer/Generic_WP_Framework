			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

					<?php $fullorexc = get_theme_mod( 'genericfw_fullorexcerpt' );
								if( $fullorexc != '' ) {
									switch ( $fullorexc ) {
									case 'full':
									the_content();
									break;
									case 'excerpt':
									the_excerpt();
									break;
									}
								}
								else{ the_content(); }
					?>

					<br class="clear" />
					<div class="meta-info"> 
						<div class="align-left">
							By <span class="author"><?php the_author_posts_link(); ?></span> | 
							<?php echo get_the_date(); ?> |
							<span class="postmetadata"><?php the_category(', '); ?><?php the_tags( ' | ', ', ', ' | ' ); ?></span>
							<?php $disable_comments = get_theme_mod( 'genericfw_postcom' );
								if( $disable_comments != '' ) {
									switch ( $disable_comments ) {
									case 'yes':
									break;
									case 'no':
									echo ' | ';
									comments_popup_link('0 Comments', '1 Comment', '% Comments');
									break;
									}
								}
							?>
						</div>
						<div class="align-right"><a href="<?php the_permalink(); ?>">Read More</a></div>
					</div>
				</article>

			<?php endwhile; ?>

				<div class="navigation">
					<div class="next-posts align-right"><?php next_posts_link(); ?></div>
					<div class="prev-posts aligh-left"><?php previous_posts_link(); ?></div>
				</div>

			<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>Not Found</h1>
			</div>

			<?php endif; ?>