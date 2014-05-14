<?php

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


/**
 * Add Autos taxonomy
 *
 */
function add_ctm_family_taxonomies() {
  // Add new "Locations" taxonomy to Posts
  register_taxonomy('familia', 'modelo', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Familias', 'taxonomy general name' ),
      'singular_name' => _x( 'Familia', 'taxonomy singular name' ),
      'search_items' =>  __( 'Buscar Familias' ),
      'all_items' => __( 'Todas las Familias' ),
      'parent_item' => __( 'Familia Padre' ),
      'parent_item_colon' => __( 'Familia Padre:' ),
      'edit_item' => __( 'Modificar Familia' ),
      'update_item' => __( 'Actualizar Familia' ),
      'add_new_item' => __( 'Adicionar Familia' ),
      'new_item_name' => __( 'Nuevo nombre de Familia' ),
      'menu_name' => __( 'Familias' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'familias', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));
}
add_action( 'init', 'add_ctm_family_taxonomies', 0 );


/**
* Inject a post template into the post editor
*
* @see _WP_Editors::editor(), wp_editor()
*
* @param string $content The editor content.
*
* @return string The filtered editor content.
*/
function wpdocs_post_editor_template( $content ) {
// Only return the filtered content if it's empty
if ( empty( $content ) ) {
$template = 'The <code><a href="">NAME</a></code> filter allows you to do X.' . "\n\n";
$template .= 'It is evaluated in <code><a href="">FUNCTION</a></code> in the <a href="">FILE</a> file.' . "\n\n";
$template .= '<code>NAME</code> accepts # argument.' . "\n\n";
$template .= 'Example:' . "\n\n";
$template .= 'View the <a href="">code example on Gist</a>.';
return $template;
} else {
return $content;
}
}
// add_filter( 'the_editor_content', 'wpdocs_post_editor_template' );
