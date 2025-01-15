<!doctype html>
<html class="no-js" lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Design: Lógica Digital | Programação: William Scorsoni./>">
	<meta name="viewport"
		content="width=device-width, user-scalable=no, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header>
		<div class="header nav-light align-self-center">
			<div class="container">
				<div class="row">
					<nav class="navbar navbar-expand-xl">
						<a class="navbrand" href="a">
							<img src="<?php the_field('logo', 'option'); ?>" alt="logo" class="logo-header">
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse"
							data-target="#collapsibleNavbar">
							<span class="navbar-toggler-icon"><i class="las la-bars"></i></span>
						</button>
						<?php
						wp_nav_menu(
							array(
								'menu'            => 'Primary',
								'theme_location'  => 'Primary',
								'container_class' => 'collapse navbar-collapse main-menu',
								'container_id'    => 'collapsibleNavbar',
								'menu_class'      => 'navbar-nav ms-lg-auto page-header menu-header',
							)
						);
						// Use shortcodes in form like Landing Page Template.
						echo do_shortcode( '[gtranslate]' );
						?>
					</nav>
				</div>
			</div>
		</div>
	</header>