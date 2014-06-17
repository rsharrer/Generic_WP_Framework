		</div><!-- #content -->
		
		<footer id="footer" class="site-footer" role="contentinfo">
			<div class="container">
				<div id="footer_menu" class="align-left">
					 <?php wp_nav_menu( array('theme_location' => 'footer_nav' , 'menu_id' => 'footer_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
				</div>
				<div class="align-right">
					<span class="copyright">Copyright &copy; <?php echo date("Y") ?> <?php bloginfo('name');?></span>
				</div>
			</div>
		</footer><!-- #footer -->
	</div><!-- #page -->
	
<?php wp_footer(); ?>

</body>
</html>