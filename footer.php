<?php

	$footer_style = ot_get_option('footer_style');

?>

	<!-- Footer -->
	<div id="footer" class="<?php echo (!$footer_style ? 'footer_light' : '');?>">
		<!-- Footer Map -->

	<!--End  Footer Map -->

		<div class="container">
			<div class="row">
				<div class="sixteen columns">
				<!-- Footer menu -->
					<div <?php echo $nav_extra_style; ?>  class="<?php echo get_theme_mod('main_menu_style'); ?> eight columns alpha skroty">
					<h3>Na <span>skróty</span></h3>
						<?php wp_nav_menu( array(
							'theme_location'=> 'footer_navigation',
							'container_id' 	=> '',
							'container_class'=> boc_cart_in_header() ? "pushed_menu_by_cart" : '',
							'menu_class' 	=> 'menu-menu-footer-container',
							'walker' 		=> new boc_Menu_Walker,
							'fallback_cb'   => 'menuFallBack',
							'items_wrap' => '<ul>%3$s</ul>',
						));?>
					</div>
				<!-- END Footer menu -->
				<div class="eight columns omega skontakt">
					<div class="four columns alpha">
					<h3><span>Szybki</span> kontakt</h3>
					<div class="adres-info">
						<p>tel. / fax. <strong>(71)</strong> 342 25 25 <br>
						tel. 694 399 888 <br>
						tel. 604 545 200</p> 
						<p>email: <a href="mailto:biuro@autoflota-24.pl">biuro@autoflota-24.pl</a></p>
					</div>
						
					</div>
					<div class="four columns omega">
						<p><strong>WROCŁAW</strong><br>
						pl. Solidarności 1/3/5 pok. 236<br>
						53-661 Wrocław</p>

					</div>
					
		    	</div>
		    </div>
		    </div>

			<div class="clear"></div>
		</div>

		<div class="footer_btm">
			<div class="container">
				<div class="row">
					<div class="sixteen columns">

						<div class="eight columns omega copyright">
							Realizacja: <a href="http://www.grupafaro.pl/">GrupaFaro</a>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>
  <!-- Footer::END -->

  <?php wp_footer(); ?>

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/colorbox.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/animate.css" />
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/selectordie.css" rel="stylesheet" type="text/css">
	<link href="<?php bloginfo('template_directory'); ?>/stylesheets/jquery-labelauty.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/redmond/jquery-ui-1.7.1.custom.css" type="text/css" />
	<link rel="Stylesheet" href="<?php bloginfo('template_directory'); ?>/stylesheets/ui.slider.extras.css" type="text/css" />
	<script src="<?php bloginfo('template_directory'); ?>/js/selectordie.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery-labelauty.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.7.1.custom.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/selectToUISlider.jQuery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.colorbox-min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>/js/marquee.js"></script>


	<script src="<?php bloginfo('template_directory'); ?>/js/custom.js"></script>

<script>
	
	jQuery(".wpcf7-form-control-wrap").on('mouseover', function(event){
	    jQuery(this).find('span').hide();
	    //console.log('hover');	    
	});
	jQuery('#auta').click(function() {
		jQuery('#auta option[value="Wybierz samochód"]').attr('hidden', 'hidden');
	});
	jQuery('#odbior').click(function() {
		jQuery('#odbior option[value="Miejsce odbioru"]').attr('hidden', 'hidden');
	});
	jQuery('#zwrot').click(function() {
		jQuery('#zwrot option[value="Miejsce zwrotu"]').attr('hidden', 'hidden');
	});


</script>

</body>
</html>
