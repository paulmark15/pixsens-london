
	<?php wp_footer(); ?>
	<script type="text/javascript" src="<?php echo get_site_url(); ?>/wp-content/themes/pixsens/js/slick.js"></script>
	<script type="text/javascript">
		if ( jQuery(window).width() < 960) {     
			jQuery(document).ready(function(){
			  jQuery('.slick').slick({
			  });
			});
		}
	</script>
  </body>
</html>