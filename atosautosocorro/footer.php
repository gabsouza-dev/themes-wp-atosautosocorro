<footer>
	<div class="footer">
		<div class="container footer-wrapper">
			<div class="row">
				<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
					<div class="footer-widget image">
						<img src="<?php the_field('logo_do_footer', 'option'); ?>" alt="Logo" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-12 wow fadeInUp" data-wow-delay="0.4s">
					<div class="footer-widget">
						<h4>Site Map</h4>
						<nav>
							<?php
							wp_nav_menu(
								array(
									'menu' => 'Secondary',
									'theme_location' => 'Secondary',
									'menu_class' => 'footer-menu',
								)
							);
							?>
						</nav>
					</div>
				</div>
				<div class="col-md-12">
					<div class="footer-widget-social">
						<!--a href="<?php // the_field('link_do_facebook', 'option'); ?>" target="_blank"><i
								class="lab la-facebook-f"></i></a-->
						<a href="<?php the_field('link_do_instagram', 'option'); ?>" target="_blank"><i
								class="lab la-instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="copyright">
						<p>© All copyright Reserved</p>
						<p>Developed by <a href="https://www.logicadigital.com.br/" target="_blank"><img
									src="<?php bloginfo('template_url'); ?>/assets/img/logica-digital.png"
									width="100"></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<a href="#0" class="cd-top">Top</a>


<?php wp_footer(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://wa.me/14074583836?text=Hi%20Tom,%20I%20came%20across%20your%20website%20and%20would%20like%20to%20hire%20your%20service!"
	style="position:fixed;width:60px;height:60px;bottom:40px;left:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888;
  z-index:1000;" target="_blank">
	<i style="margin-top:16px" class="fa fa-whatsapp"></i>
</a>

</body>

</html>