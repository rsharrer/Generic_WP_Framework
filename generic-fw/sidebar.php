<div class="sidebar"> <!--  the Sidebar -->
			<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?> <?php dynamic_sidebar( 'main-sidebar' ); ?>
			<?php else : ?><p>Drag a widget into your sidebar in the WordPress Admin</p>
			<?php endif; ?>
</div>