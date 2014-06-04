				<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="post-title entry-title"><?php the_title(); ?></h1>
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