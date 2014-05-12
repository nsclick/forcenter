<?php
/*
Template Name: Modelos
*/

$post = $wp_query->post;

// Getting metas
$metas = get_post_meta( $post->ID );
/*
$galleryIDs = get_post_meta( $post->ID, 'model-gallery', true ); 
$galleryIDs = explode(',', $galleryIDs[0]['fotos']);

// Getting the gallery images
$gallery = array();
foreach($galleryIDs as $id){
	
	$image = wp_get_attachment_image_src($id, 'full');
	$alt_text = get_post_meta($id , '_wp_attachment_image_alt', true);
	
	$gallery[] = array(
		'src' => $image[0],
		'width' => $image[1],
		'height' => $image[2],
		'title' => $alt_text,
		'alt' => $alt_text
	);

}

// Getting the complementray data
$extra = get_post_meta( $post->ID, 'complementarios', true ); 
$extra = $extra[0];
*/
get_header(); ?>



<?php echo do_shortcode($post->post_content) ?>

<?php get_footer(); ?>
