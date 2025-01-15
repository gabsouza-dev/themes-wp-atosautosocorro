<?php

function banner_post_type() {
	$labels = array(
		'name'                  => 'Banner',
		'singular_name'         => 'Banner',
		'menu_name'             => 'Banner',
		'name_admin_bar'        => 'Banner',
		'archives'              => 'Banner arquivados',
		'attributes'            => 'Atributos do Banner',
		'parent_item_colon'     => 'Banner pai:',
		'all_items'             => 'Todos os Banner',
		'add_new_item'          => 'Adicionar novo Banner',
		'add_new'               => 'Adicionar novo',
		'new_item'              => 'Novo Banner',
		'edit_item'             => 'Editar Banner',
		'update_item'           => 'Atualizar Banner',
		'view_item'             => 'Ver Banner',
		'view_items'            => 'Ver Banner',
		'search_items'          => 'Procurar Banner',
		'not_found'             => 'Não encontrado',
		'not_found_in_trash'    => 'Não encontrado no lixo',
		'featured_image'        => 'Imagem destacada',
		'set_featured_image'    => 'Definir imagem destacada',
		'remove_featured_image' => 'Remover imagem destacada',
		'use_featured_image'    => 'Use como imagem destacada',
		'insert_into_item'      => 'Inserir no banner',
		'uploaded_to_this_item' => 'Enviado para este banner',
		'items_list'            => 'Lista de banner',
		'items_list_navigation' => 'Navegação da lista de banner',
		'filter_items_list'     => 'Filtrar lista de banner',
	);
	$rewrite = array(
		'slug'                  => 'banner',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'banner',
		'labels'                => $labels,
		'supports'              => array( 'title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
		'show_in_rest'          => true

	);
	register_post_type( 'banner', $args );
}
add_action( 'init', 'banner_post_type', 0 );

