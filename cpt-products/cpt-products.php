<?php

/*
Plugin Name: Products Catalogue
Plugin URI: https://www.katiareis.com
Description: Custom post type and taxonomy for products catalogue
Version: 1.0.0
Author: Kátia Reis
Author URI: https://www.katiareis.com
*/

// Register Custom Post Type Product
function create_product_cpt()
{

	$labels = array(
		'name' => _x('Products', 'Post Type General Name', 'textdomain'),
		'singular_name' => _x('Product', 'Post Type Singular Name', 'textdomain'),
		'menu_name' => _x('Products', 'Admin Menu text', 'textdomain'),
		'name_admin_bar' => _x('Product', 'Add New on Toolbar', 'textdomain'),
		'archives' => __('Product Archives', 'textdomain'),
		'attributes' => __('Product Attributes', 'textdomain'),
		'parent_item_colon' => __('Parent Product:', 'textdomain'),
		'all_items' => __('All Products', 'textdomain'),
		'add_new_item' => __('Add New Product', 'textdomain'),
		'add_new' => __('Add New', 'textdomain'),
		'new_item' => __('New Product', 'textdomain'),
		'edit_item' => __('Edit Product', 'textdomain'),
		'update_item' => __('Update Product', 'textdomain'),
		'view_item' => __('View Product', 'textdomain'),
		'view_items' => __('View Products', 'textdomain'),
		'search_items' => __('Search Product', 'textdomain'),
		'not_found' => __('Not found', 'textdomain'),
		'not_found_in_trash' => __('Not found in Trash', 'textdomain'),
		'featured_image' => __('Featured Image', 'textdomain'),
		'set_featured_image' => __('Set featured image', 'textdomain'),
		'remove_featured_image' => __('Remove featured image', 'textdomain'),
		'use_featured_image' => __('Use as featured image', 'textdomain'),
		'insert_into_item' => __('Insert into Product', 'textdomain'),
		'uploaded_to_this_item' => __('Uploaded to this Product', 'textdomain'),
		'items_list' => __('Products list', 'textdomain'),
		'items_list_navigation' => __('Products list navigation', 'textdomain'),
		'filter_items_list' => __('Filter Products list', 'textdomain'),
	);
	$args = array(
		'label' => __('Product', 'textdomain'),
		'description' => __('Producst Custom Post Type', 'textdomain'),
		'labels' => $labels,
		'menu_icon' => 'dashicons-products',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'trackbacks', 'page-attributes', 'custom-fields'),
		'taxonomies' => array('product_category'),
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
	register_post_type('products', $args);
}
add_action('init', 'create_product_cpt', 0);


// Register Taxonomy category
function create_product_category_taxonomy()
{

	$labels = array(
		'name'              => _x('Products Category', 'taxonomy general name', 'textdomain'),
		'singular_name'     => _x('Product Category', 'taxonomy singular name', 'textdomain'),
		'search_items'      => __('Search Product Category', 'textdomain'),
		'all_items'         => __('All Product Category', 'textdomain'),
		'parent_item'       => __('Parent Product Category', 'textdomain'),
		'parent_item_colon' => __('Parent Product Category:', 'textdomain'),
		'edit_item'         => __('Edit Product Category', 'textdomain'),
		'update_item'       => __('Update Product Category', 'textdomain'),
		'add_new_item'      => __('Add New Product Category', 'textdomain'),
		'new_item_name'     => __('New Product Category Name', 'textdomain'),
		'menu_name'         => __('Product Category', 'textdomain'),
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
	register_taxonomy('product_category', array('products'), $args);
}
add_action('init', 'create_product_category_taxonomy');
