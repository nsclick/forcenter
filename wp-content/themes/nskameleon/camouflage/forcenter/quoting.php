<?php

/**
 * Session Management
 */
add_action ( 'init', 'ns_start_session' );

function ns_start_session () {
	if ( !session_id() )
		session_start();
}

add_action ( 'wp_login', 'ns_end_session' );
add_action ( 'wp_logout', 'ns_end_session' );

function ns_end_session() {
	session_destroy();
}

/**
 * Ajax Quote Handling
 */
add_action ( 'wp_ajax_ns_quote', 'ns_ajax_quoting' );
add_action ( 'wp_ajax_nopriv_ns_quote', 'ns_ajax_quoting' );

function ns_ajax_quoting ( ) {
	global $wpdb;
	
	$response = array(
		'success'	=> true
	);

	switch ( $_POST['method'] ) {
		case 'add':
			$_SESSION['products'] = $_POST['products'];
			break;
		case 'remove':
			
			break;
	}
	
	$response['products'] 	= isset ( $_SESSION['products'] ) ? $_SESSION['products'] : array();

	echo json_encode ( $response );
	die();
}

?>