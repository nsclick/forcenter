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
