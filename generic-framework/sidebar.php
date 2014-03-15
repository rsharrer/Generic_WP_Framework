<div class="sidebar"> <!--  the Sidebar -->
			<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?> <?php dynamic_sidebar( 'main-sidebar' ); ?>
			<?php elseif ( is_user_logged_in() ): ?>
			<div class="error"><div class="genericon genericon-warning"></div> <strong>No Widgets Assigned.</strong> <a href="./widgets.php" class="btn round">Go to Widgets</a></div>
			<?php else : ?>
			<?php endif; ?>
</div>