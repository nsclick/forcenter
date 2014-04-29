<?php

define ('THEME_PATH', get_theme_root() . '/nskameleon');
define('ACTIVE_CAMOUFLAGE', 'forcenter');
define('ACTIVE_CAMOUFLAGE_PATH', THEME_PATH. '/camouflage/' . ACTIVE_CAMOUFLAGE);
 
/**
 * Enqueue scripts and styles for the front end.
 *
 */
function nsk_scripts() {
	
	// Stylesheets
	wp_enqueue_style( 'html5reset', get_template_directory_uri() . '/assets/css/html5reset.css', array(), null, 'all' );
	wp_enqueue_style( 'columns', get_template_directory_uri() . '/assets/css/columns.css', array(), null, 'all' );
	wp_enqueue_style( 'nsk-base', get_template_directory_uri() . '/assets/css/nskameleon-base.css', array(), null, 'all' );
	
	// Responsive Stylesheets
	wp_enqueue_style( 'nsk-1024x769', get_template_directory_uri() . '/assets/css/1024.css', array(), null, 'only screen and (max-width: 1024px) and (min-width: 769px)' );
	wp_enqueue_style( 'nsk-768x481', get_template_directory_uri() . '/assets/css/768.css', array(), null, 'only screen and (max-width: 768px) and (min-width: 481px)' );
	wp_enqueue_style( 'nsk-480', get_template_directory_uri() . '/assets/css/480.css', array(), null, 'only screen and (max-width: 480px)' );
}
add_action( 'wp_enqueue_scripts', 'nsk_scripts' ); 

 
/**
 * Load the camoufalge
 * */
 require_once(ACTIVE_CAMOUFLAGE_PATH . '/functions.php');
 
/**
 * Registering menus
 *
 */ 
function register_nsk_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_nsk_menu' );
 
