<!doctype html>
<html class="no-js" lang="pt-br">
<head>
  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Design: Lógica Digital | Programação: William Scorsoni./>">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,  minimum-scale=1.0, maximum-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header>
		<div class="header-top">
    	<div class="container">
			<div class="row align-items-center">
				<a class="navbar-brand" href="<?php bloginfo('url');?>">
					<img src="<?php the_field('logo', 'option'); ?>" alt="logo">
				</a>
				<div class="ml-auto">
				<div class="header-top-box">
					<ul>
						<li><img src="<?php bloginfo('template_url');?>/assets/img/icon/tel-b.png" alt="Contate-nos!"></li>
						<li><h5>Contate-nos!</h5><h6><?php the_field('telefones_email','option');?></h6></li>
					</ul>
				</div>
				<div class="header-top-box ">
					<ul>
						<li><img src="<?php bloginfo('template_url');?>/assets/img/icon/mail-b.png" title="Email"></li>
						<li><h5>Email</h5><h6><?php the_field('email_footer','option');?></h6></li>
					</ul>
				</div>
				</div>
			</div>
    	</div>
		</div>

		<div class="header-bottom align-self-center">
			<div class="container">
			<div class="row">
				<nav class="navbar nav-light navbar-expand-lg">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
						<span class="navbar-toggler-icon"><i class="las la-bars"></i></span>
					</button>
					<?php
					wp_nav_menu( array(
						'menu'              => 'Primary',
						'theme_location'    => 'Primary',
						'container_class'   => 'collapse navbar-collapse main-menu',
						'container_id'      => 'collapsibleNavbar',
						'menu_class'        => 'navbar-nav ms-lg-auto page-header menu-header',
						));
					?>
				</nav>
			</div>
			</div>
    	</div>
	</header>

