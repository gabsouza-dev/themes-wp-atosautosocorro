<?php

if ( ! function_exists( 'atosautosocorro_setup' ) ) :
	function atosautosocorro_setup() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'atosautosocorro' ),
				'menu-2' => __( 'Secondary', 'atosautosocorro' ),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'atosautosocorro_setup' );

add_filter('show_admin_bar','__return_false');


require get_template_directory() . '/assets/controller/custom_theme-scripts.php';

require get_template_directory() . '/assets/controller/custom_post-type.php';


function remove_theme_menu(){
	remove_menu_page( 'edit.php' );
	remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_theme_menu' );

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Atos Auto Socorro',
		'menu_title'	=> 'Atos Auto Socorro',
		'menu_slug' 	=> 'theme-geral',
		'capability'	=> 'edit_posts',
		'icon_url' => 'dashicons-smiley',
		'redirect'		=> false
	));
}

function get_section($page, $name) {
	include_once get_template_directory() . '/page-inc/'.$page.'/'.$name.'.php';
}