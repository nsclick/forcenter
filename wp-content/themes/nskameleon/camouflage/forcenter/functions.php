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
	
	// Quoting system
	wp_register_script ( 'nsk-quoting', get_template_directory_uri() . '/camouflage/forcenter/js/quoting.sys.js', array( 'jquery' ), null, true );
	wp_localize_script ( 'nsk-quoting', 'nsk_quoting_data', array(
		'cotizador_page'	=> get_permalink_by_slug ( 'cotizador' ),
		'ajax_url'			=> admin_url( 'admin-ajax.php' )
	));
	wp_enqueue_script ( 'nsk-quoting' );
	
	//Cotizador y repuestos
	wp_register_script( 'nsk-cotizador-js', get_template_directory_uri() . '/camouflage/forcenter/js/cotizador.js', array( 'jquery' ), null, true );
		
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

 /**
  * Quoting Handler
  */
	require_once ( ACTIVE_CAMOUFLAGE_PATH . '/quoting.php' );


add_action('init', 'nsk_fc_init');

function nsk_fc_init() {
    add_post_type_support( 'attachment', 'page-attributes' );
}


/**
* Add (custom field) content to the post's content before WP SEO Analysis.
*
* @param string $content The content of a posts content-field.
*
* @return string The original content plus the value of the postmeta with meta_key '_yoast_postmeta_example'.
*/
function yst_custom_content_analysis( $content ) {
	global $post;
	
	if($post->post_type == 'version'){
		$customFields = get_post_meta( $post->ID, 'version-data', true ); 
		$customFields = $customFields[0];
		$content = ' Diseño: ' . $customFields['diseno'] . '<br/> Motor: ' . $customFields['motor'] . '<br/> Diseño: ' . $customFields['diseno'] . '<br/> Seguridad: ' . $customFields['seguridad'];
	}
	
	if($post->post_type == 'modelo'){
		$extra = get_post_meta( $post->ID, 'complementarios', true ); 
		$extra = $extra[0];
		$content = $extra['descripcion'];	
	}
    
    return $content;
}
 
add_filter( 'wpseo_pre_analysis_post_content', 'yst_custom_content_analysis' );
