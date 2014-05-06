<?php
$post = $wp_query->post;

if($post->post_type == 'modelo'){
	include(ACTIVE_CAMOUFLAGE_PATH.'/modelo-template.php');
} elseif ( $post->post_type == 'version' ) {
	include(ACTIVE_CAMOUFLAGE_PATH.'/version-template.php');	
}
