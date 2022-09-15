<?php

/*
Plugin Name: Catalogo de Produtos
Plugin URI: https://www.katiareis.com
Description: Custom post type and taxonomy para Catálogo de Produtos
Version: 1.0.0
Author: Kátia Reis
Author URI: https://www.katiareis.com
*/

// Register Custom Post Type Product
function create_produtos_cpt()
{

	$labels = array(
		'name' => _x('Produtos', 'Post Type General Name', 'textdomain'),
		'singular_name' => _x('Produto', 'Post Type Singular Name', 'textdomain'),
		'menu_name' => _x('Produtos', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Produto', 'Add New on Toolbar', 'textdomain'),
		'archives' => __('Arquivos de Produtos', 'textdomain'),
		'attributes' => __('Atributos de Produtos', 'textdomain'),
		'parent_item_colon' => __('Parent Produtos:', 'textdomain'),
		'all_items' => __('Todos os Produtos', 'textdomain'),
		'add_new_item' => __('Adicionar Novo Produto', 'textdomain'),
		'add_new' => __('Adicionar Novo', 'textdomain'),
		'new_item' => __('Novos Produtos', 'textdomain'),
		'edit_item' => __('Editar Produtos', 'textdomain'),
		'update_item' => __('Atualizar Produtos', 'textdomain'),
		'view_item' => __('Ver Produto', 'textdomain'),
		'view_items' => __('Ver Produtos', 'textdomain'),
		'search_items' => __('Pesquisar Produtos', 'textdomain'),
		'not_found' => __('Produtos não encontrados', 'textdomain'),
		'not_found_in_trash' => __('Produtos não encontrados na lixeira', 'textdomain'),
		'featured_image' => __('Imagem de Destaque', 'textdomain'),
		'set_featured_image' => __('Set featured image', 'textdomain'),
		'remove_featured_image' => __('Remove featured image', 'textdomain'),
		'use_featured_image' => __('Use as featured image', 'textdomain'),
		'insert_into_item' => __('Insert into Product', 'textdomain'),
		'uploaded_to_this_item' => __('Uploaded to this Product', 'textdomain'),
		'items_list' => __('Products list', 'textdomain'),
		'items_list_navigation' => __('Produtos list navigation', 'textdomain'),
		'filter_items_list' => __('Filter Produtos list', 'textdomain'),
	);
	$args = array(
		'label' => __('Produto', 'textdomain'),
		'description' => __('Custom Post Type de Produto', 'textdomain'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-products',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'custom-fields'),
		'taxonomies' => array('catgorias'),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type('produtos', $args);
}
add_action('init', 'create_produtos_cpt', 0);


// Register Taxonomy categoria
function create_categoria_taxonomia()
{

	$labels = array(
		'name'              => _x('Catgorias', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Categoria', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Pesquisar Catgorias', 'textdomain'),
		'all_items'         => __('Todas as categorias', 'textdomain'),
		'parent_item'       => __('Parent categoria', 'textdomain'),
		'parent_item_colon' => __('Parent categoria:', 'textdomain'),
		'edit_item'         => __('Editar categoria', 'textdomain'),
		'update_item'       => __('Atualizar categoria', 'textdomain'),
		'add_new_item'      => __('Adicionar nova categoria', 'textdomain'),
		'new_item_name'     => __('Nome da nova categoria', 'textdomain'),
		'menu_name'         => __('Categorias de Produto', 'textdomain'),
	);
	$args = array(
		'labels' => $labels,
		'description' => __('Products global category', 'textdomain'),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
	);
	register_taxonomy('categorias', array('produtos'), $args);
}
add_action('init', 'create_categoria_taxonomia');
