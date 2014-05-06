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
		'name' => _x('Modelos', 'nsk_fc_txt') ,
		'singular_name' => _x('Modelo', 'nsk_fc_txt') ,
		'add_new' => _x('Add New', 'nsk_fc_txt') ,
		'add_new_item' => _x('Add New Modelo', 'nsk_fc_txt') ,
		'edit_item' => _x('Edit Modelo', 'nsk_fc_txt') ,
		'new_item' => _x('New Modelo', 'nsk_fc_txt') ,
		'view_item' => _x('View Modelo', 'nsk_fc_txt') ,
		'search_items' => _x('Search Modelos', 'nsk_fc_txt') ,
		'not_found' => _x('No modelos found', 'nsk_fc_txt') ,
		'not_found_in_trash' => _x('No modelos found in Trash', 'nsk_fc_txt') ,
		'parent_item_colon' => _x('Parent Modelo:', 'nsk_fc_txt') ,
		'menu_name' => _x('Modelos', 'nsk_fc_txt') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
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
		'name' => _x('Versiones', 'nsk_fc_txt') , 
		'singular_name' => _x('Versión', 'nsk_fc_txt') ,
		'add_new' => _x('Add New', 'nsk_fc_txt') ,
		'add_new_item' => _x('Add New Versión', 'nsk_fc_txt') ,
		'edit_item' => _x('Edit Versión', 'nsk_fc_txt') ,
		'new_item' => _x('New Versión', 'nsk_fc_txt') ,
		'view_item' => _x('View Versión', 'nsk_fc_txt') ,
		'search_items' => _x('Search Versiones', 'nsk_fc_txt') ,
		'not_found' => _x('No modelos found', 'nsk_fc_txt') ,
		'not_found_in_trash' => _x('No Versión found in Trash', 'nsk_fc_txt') ,
		'parent_item_colon' => _x('Parent Modelo:', 'nsk_fc_txt') ,
		'menu_name' => _x('Versiones', 'nsk_fc_txt') ,
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
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

/**
 * Calls the class on the post edit screen.
 */
function call_custom_post_related() {
    new custom_post_related();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'call_custom_post_related' );
    add_action( 'load-post-new.php', 'call_custom_post_related' );
}

/** 
 * The Class.
 */
class custom_post_related {
	/**
	 * Hook into the appropriate actions when the class is constructed.
	 */
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
	}

	/**
	 * Adds the meta box container.
	 */
	public function add_meta_box( $post_type ) {
            $post_types = array('version');     //limit meta box to certain post types
            if ( in_array( $post_type, $post_types )) {
				add_meta_box(
					'set_related_version_box'
					,__( 'Modelo', 'modelo' )
					,array( $this, 'render_meta_box_content' )
					,$post_type
					,'side'
					,'high'
				);
            }
	}

	/**
	 * Save the meta when the post is saved.
	 *
	 * @param int $post_id The ID of the post being saved.
	 */
	public function save( $post_id ) {
	
		/*
		 * We need to verify this came from the our screen and with proper authorization,
		 * because save_post can be triggered at other times.
		 */

		// Check if our nonce is set.
		if ( ! isset( $_POST['set_related_version_box_nonce'] ) )
			return $post_id;

		$nonce = $_POST['set_related_version_box_nonce'];

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'set_related_version_box' ) )
			return $post_id;

		// If this is an autosave, our form has not been submitted,
                //     so we don't want to do anything.
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;

		// Check the user's permissions.
		if ( 'page' == $_POST['post_type'] ) {

			if ( ! current_user_can( 'edit_page', $post_id ) )
				return $post_id;
	
		} else {

			if ( ! current_user_can( 'edit_post', $post_id ) )
				return $post_id;
		}

		/* OK, its safe for us to save the data now. */

		// Sanitize the user input.
		$modelID = sanitize_text_field( $_POST['related_model'] );

		// Update the meta field.
		update_post_meta( $post_id, '_related_model', $modelID );
	}	

	/**
	 * Render Meta Box content.
	 *
	 * @param WP_Post $post The post object.
	 */
	public function render_meta_box_content( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'set_related_version_box', 'set_related_version_box_nonce' );

		// Use get_post_meta to retrieve an existing value from the database.
		$value = get_post_meta( $post->ID, '_related_model', true );

		//Get the models
		$models = get_models();
		
		// Display the form, using the current value.
		echo '<label for="related_model">';
		_e( 'Modelo', 'nsk_fc_txt' );
		echo '</label> ';
		/*echo '<input type="text" id="related_model" name="related_model"';
                echo ' value="' . esc_attr( $value ) . '" size="25" />';*/
        echo '<select id="related_model" name="related_model">';
		echo '<option value="">Seleecione Modelo</option>';
		foreach($models as $id => $name){
			$selected = ($value == $id) ? 'selected' : '';
			echo '<option value="'. $id .'" ' . $selected . '>' . $name . '</option>';
		}
        echo '</select>';
	}
	
}

function get_models(){
	$type = 'modelo';
	$args=array(
	  'post_type' => $type,
	  'post_status' => 'publish',
	  'posts_per_page' => -1,
	  //'caller_get_posts'=> 1
	);
	$my_query = null;
	$my_query = new WP_Query($args);
	$models = array();
	if( $my_query->have_posts() ) {
		while ($my_query->have_posts()){
			$my_query->the_post();
			$models[get_the_ID()] = get_the_title();
		}
	}
	
	wp_reset_query(); 
	return $models;
}


