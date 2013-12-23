	<footer id="footer" class="container">
		<div class="sixteen columns">
			<div id="footer_menu" class="align-left">
				 <?php wp_nav_menu( array('theme_location' => 'footer_nav' , 'menu_id' => 'footer_nav' , 'fallback_cb' => 'fallback_menu' , 'container' => false )); ?>
			</div>
			<div class="copyright align-right"> &copy; Copyright <?php echo date("Y"); ?>

</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script>
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $("#main").fitVids();
  });

    $(window).ready(function () {
		$('#primary_nav').ReSmenu({ maxWidth: 767 });
    });
</script>
</body>
</html>