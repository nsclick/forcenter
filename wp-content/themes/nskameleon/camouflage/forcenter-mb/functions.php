<?php

/**
 * Enqueue scripts and styles for the front end.
 *
 */
 
function nsk_fc_scripts() {
	global $wp_query;
	
	//Getting the post to contextualize the scripts
	$post = $wp_query->post;
	
	// Base Forcenter CSS
	wp_enqueue_style( 'forcenter', get_template_directory_uri() . '/camouflage/forcenter-mb/css/forcenter.css', array(), null, 'all' );
	
	// Google fonts
	wp_enqueue_style( 'nsk-theme-googlefonts', esc_url_raw( 'http://fonts.googleapis.com/css?family=Open+Sans:400,700' ), array(), null );
	
	wp_enqueue_style( 'nsk-jquery-ui-styles', get_template_directory_uri() . '/camouflage/forcenter-mb/css/jquery-ui.css', array(), null, 'all' );
	
		
	//Servicio Técnico: Date-picker
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script( 'nsk-date-picker-js', get_template_directory_uri() . '/camouflage/forcenter-mb/js/date-picker.js', array( 'jquery' ), null, true );
	
	//Model post type scripts
	if( $post->post_type == 'modelo' ){
		wp_enqueue_script( 'nsk-modelos-js', get_template_directory_uri() . '/camouflage/forcenter-mb/js/modelos.js', array( 'jquery' ), null, true );
	}
	
	//Versions post type scripts
	// if( $post->post_type == 'version' ){
	// 	wp_enqueue_script( 'nsk-versiones-js', get_template_directory_uri() . '/camouflage/forcenter-mb/js/versiones.js', array( 'jquery' ), null, true );
	// }
	
	// Versions
	wp_register_script( 'nsk-versions-js', get_template_directory_uri() . '/camouflage/forcenter-mb/js/versiones.js', array( 'jquery' ), null, true );
	
}
add_action( 'wp_enqueue_scripts', 'nsk_fc_scripts' ); 
 
/*
 * Loading the shortcodes*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes.php');

/*
 * Loading the widgets*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/widgets.php');

/*
 * forcenter dependence: Loading the custom post and such*/
 require_once (THEME_PATH. '/camouflage/forcenter/custom_posts.php');

