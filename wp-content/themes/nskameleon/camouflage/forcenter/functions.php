<?php

/**
 * Enqueue scripts and styles for the front end.
 *
 */
 
function nsk_fc_scripts() {
	// Base Forcenter CSS
	wp_enqueue_style( 'forcenter', get_template_directory_uri() . '/camouflage/forcenter/css/forcenter.css', array(), null, 'all' );
	
	// 1024 x 768
	wp_enqueue_style( 'nsk-fc-1024x768', get_template_directory_uri() . '/camouflage/forcenter/css/1024.css', array(), null, 'only screen and (max-width: 1024px) and (min-width: 769px)' );

	// 768 x 481
	wp_enqueue_style( 'nsk-fc-768x481', get_template_directory_uri() . '/camouflage/forcenter/css/768.css', array(), null, 'only screen and (max-width: 768px) and (min-width: 481px)' );

	// 480
	wp_enqueue_style( 'nsk-fc-480', get_template_directory_uri() . '/camouflage/forcenter/css/480.css', array(), null, 'only screen and (max-width: 480px)' );

	// Google fonts
	wp_enqueue_style( 'nsk-theme-googlefonts', esc_url_raw( 'http://fonts.googleapis.com/css?family=Open+Sans:400,700' ), array(), null );
	
	// Scripts
//	wp_enqueue_script( 'twentyfourteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20140319', true );
	//
	//wp_enqueue_script('google-maps', '//maps.googleapis.com/maps/api/js?&sensor=false', array(), '3', true);
}
add_action( 'wp_enqueue_scripts', 'nsk_fc_scripts' ); 
 
/*
 * Loading the shortcodes*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes.php');

/*
 * Loading the widgets*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/widgets.php');


add_action('init', 'register_cpt_modelo');

function register_cpt_modelo()
{
	$labels = array(
		'name' => _x('Modelos', 'modelo') ,
		'singular_name' => _x('Modelo', 'modelo') ,
		'add_new' => _x('Add New', 'modelo') ,
		'add_new_item' => _x('Add New Modelo', 'modelo') ,
		'edit_item' => _x('Edit Modelo', 'modelo') ,
		'new_item' => _x('New Modelo', 'modelo') ,
		'view_item' => _x('View Modelo', 'modelo') ,
		'search_items' => _x('Search Modelos', 'modelo') ,
		'not_found' => _x('No modelos found', 'modelo') ,
		'not_found_in_trash' => _x('No modelos found in Trash', 'modelo') ,
		'parent_item_colon' => _x('Parent Modelo:', 'modelo') ,
		'menu_name' => _x('Modelos', 'modelo') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Modelos Ford',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'page-attributes'
		) ,
		'taxonomies' => array(
			'page-category'
		) ,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'page'
	);
	register_post_type('modelo', $args);
}


add_action('init', 'register_cpt_version');

function register_cpt_version()
{
	$labels = array(
		'name' => _x('Versiones', 'version') ,
		'singular_name' => _x('Versión', 'version') ,
		'add_new' => _x('Add New', 'version') ,
		'add_new_item' => _x('Add New Versión', 'version') ,
		'edit_item' => _x('Edit Versión', 'version') ,
		'new_item' => _x('New Versión', 'version') ,
		'view_item' => _x('View Versión', 'version') ,
		'search_items' => _x('Search Versiones', 'version') ,
		'not_found' => _x('No modelos found', 'version') ,
		'not_found_in_trash' => _x('No Versión found in Trash', 'version') ,
		'parent_item_colon' => _x('Parent Modelo:', 'version') ,
		'menu_name' => _x('Versiones', 'version') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
		'description' => 'Versiones Ford',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			'page-attributes'
		) ,
		'taxonomies' => array(
			'page-category'
		) ,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'has_archive' => true,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => true,
		'capability_type' => 'page'
	);
	register_post_type('version', $args);
}
