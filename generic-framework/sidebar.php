<div class="sidebar"> <!--  the Sidebar -->
			<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?> <?php dynamic_sidebar( 'main-sidebar' ); ?>
			<?php elseif ( is_user_logged_in() ): ?>
			<p>Drag a widget into your sidebar in the WordPress Admin</p>
			<?php else : ?>
			<?php endif; ?>
</div>