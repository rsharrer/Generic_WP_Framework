			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="post-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>

					<div class="meta-info"> 
						<div class="align-left">
							By <?php the_author_posts_link(); ?> | 
							<?php echo get_the_date(); ?> |
							<?php the_category(', '); ?><?php the_tags( ' | ', ', ', ' | ' ); ?>
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
					</div>
					<br class="clear" />

				<!-- Commments -->
				<?php
					$disable_comments = get_theme_mod( 'genericfw_postcom' );
						if( $disable_comments != '' ) {
				        	switch ( $disable_comments ) {
				            	case 'yes':
				                break;
				            	case 'no':
				            		comments_template();
				                break;
				        		}
				    		}
				?>

				</article>

			<?php endwhile; ?>

				<div class="navigation">
					<div class="next-posts"><?php next_posts_link(); ?></div>
					<div class="prev-posts"><?php previous_posts_link(); ?></div>
				</div>

			<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>Not Found</h1>
			</div>

			<?php endif; ?>