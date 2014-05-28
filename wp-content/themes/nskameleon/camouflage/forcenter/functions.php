<?php

/**
 * Enqueue scripts and styles for the front end.
 *
 */
 
function nsk_fc_scripts() {
	global $wp_query;
	
	//Getting the post to contextualize the scripts
	$post = $wp_query->post;
	// echo '<pre>',print_r($post),'</pre>';
	
	// Base Forcenter CSS
	wp_enqueue_style( 'forcenter', get_template_directory_uri() . '/camouflage/forcenter/css/forcenter.css', array(), null, 'all' );
	
	// Google fonts
	wp_enqueue_style( 'nsk-theme-googlefonts', esc_url_raw( 'http://fonts.googleapis.com/css?family=Open+Sans:400,700' ), array(), null );
	
	//Slider para showcases: autos nuevos, autos usados, accesorios
	wp_enqueue_script('jquery-ui-slider');
	
	wp_enqueue_style( 'nsk-jquery-ui-styles', get_template_directory_uri() . '/camouflage/forcenter/css/jquery-ui.css', array(), null, 'all' );
	
	//Common JS script
	wp_enqueue_script( 'nsk-fc-common-js', get_template_directory_uri() . '/camouflage/forcenter/js/common-fs.js', array( 'jquery' ), null, true );
	
	
	//Cotizador y repuestos
	wp_enqueue_script( 'nsk-cotizador-js', get_template_directory_uri() . '/camouflage/forcenter/js/cotizador.js', array( 'jquery' ), null, true );
		
	//Model post type scripts
	if( $post->post_type == 'modelo' ){
		wp_enqueue_script( 'nsk-modelos-js', get_template_directory_uri() . '/camouflage/forcenter/js/modelos.js', array( 'jquery' ), null, true );
	}
	
	//Versions post type scripts
	if( $post->post_type == 'version' ){
		wp_enqueue_script( 'nsk-versiones-js', get_template_directory_uri() . '/camouflage/forcenter/js/versiones.js', array( 'jquery' ), null, true );
	}
	
	// Showcase
	wp_register_script( 'nsk-autos-nuevos-js', get_template_directory_uri() . '/camouflage/forcenter/js/autos_nuevos.js', array( 'jquery' ), null, true );
	
	// Showcase
	wp_register_script( 'nsk-acessories-js', get_template_directory_uri() . '/camouflage/forcenter/js/accesorios.js', array( 'jquery' ), null, true );
		
	// Typemenu (submenú del header)
	wp_enqueue_script( 'nsk-typemenu-js', get_template_directory_uri() . '/camouflage/forcenter/js/typemenu.js', array( 'jquery' ), null, true );

}
add_action( 'wp_enqueue_scripts', 'nsk_fc_scripts' ); 

/*
 * Loading the custom post and such*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/custom_posts.php');
 
/*
 * Loading the shortcodes*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/shortcodes.php');

/*
 * Loading the widgets*/
 require_once (ACTIVE_CAMOUFLAGE_PATH . '/widgets.php');


add_action('init', 'nsk_fc_init');

function nsk_fc_init() {
    add_post_type_support( 'attachment', 'page-attributes' );
}
