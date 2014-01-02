	<footer id="footer" class="container">
		<div class="sixteen columns">
			<div id="footer_menu" class="align-left">
				 <?php wp_nav_menu( array('theme_location' => 'footer_nav' , 'menu_id' => 'footer_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
			</div>
			<div class="copyright align-right">
			Generic Framework WordPress theme, Copyright &copy; 2013 Phil Hoyt
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>