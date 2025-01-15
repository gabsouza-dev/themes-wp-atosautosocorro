<?php

function atosautosocorro_enqueue_scripts() {
		wp_enqueue_style(
			'plugins', 
			get_template_directory_uri().
			'/assets/css/plugins.css',
				array(), 
				null, false 
		);
		wp_enqueue_style(
			'style', 
			get_template_directory_uri().
			'/assets/css/style.css',
				array(), 
				null, false 
		);
		wp_enqueue_style(
			'owl.carousel', 
			get_template_directory_uri().
			'/assets/css/owl.carousel.min.css',
				array(), 
				null, false 
		);
		wp_enqueue_script(
			'plugins', 
			get_template_directory_uri() . 
			'/assets/js/plugins.min.js',  
				array(), 
				null, true
		);
		wp_enqueue_script(
			'main', 
			get_template_directory_uri() . 
			'/assets/js/main.js',  
				array(), 
				null, true
		);
		wp_enqueue_script(
			'owl.lazyload', 
			get_template_directory_uri() . 
			'/assets/js/owlCarousel/owl.lazyload.js',  
				array(), 
				null, true
		);
		wp_enqueue_script(
			'owl.video', 
			get_template_directory_uri() . 
			'/assets/js/owlCarousel/owl.video.js',  
				array(), 
				null, true
		);
	
		
}
add_action('wp_enqueue_scripts', 'atosautosocorro_enqueue_scripts', 1000);
 