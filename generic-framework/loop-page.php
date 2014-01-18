			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="post-title"><?php the_title(); ?></h1>
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
					<br class="clear" />
					
					<!-- Commments -->
					<?php
						$disable_comments = get_theme_mod( 'genericfw_pagecom' );
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

			<?php else : ?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1>Not Found</h1>
			</div>

			<?php endif; ?>