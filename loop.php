			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
					<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<?php the_content(); ?>
					<!--The Meta, Author, Date, Categories and Comments-->   
              		<div class="meta"> 
                    	Date posted: <?php echo get_the_date(); ?>
                  		| Author: <?php the_author_posts_link(); ?>
                  		| <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
                  		<div>Categories: <?php the_category(' '); ?></div>
                  		<div>Tags: <?php the_tags( ' ' ); ?></div>
              		</div>
				</div>

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