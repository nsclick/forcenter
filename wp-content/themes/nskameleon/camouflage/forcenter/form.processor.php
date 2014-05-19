<?php
include('../../../../../wp-load.php');

class formProcesor {

}
var_dump($_POST);



/**
 * EmailerFactory
 * @type class
 *
 * 
 */
class FormFactory {
  /**
   * create
   * @arg     string action
   * @arg     array data
   * @return  object
   */
  public static function create($action = null) {
    $className = ucfirst($action) . 'Emailer';
    
    if (!class_exists($className) || !$action) {
      exit (json_encode(array(
        'state' => false,
        'data'  => 'Error: Favor intente de nuevo más tarde.'
      )));
      return false; // Non existing class, throw Error
    }
    
    return new $className();
  }
  
}

/*************************/

$action = isset($_POST['action']) ? $_POST['action'] : null; 
$data   = $_POST;
unset($data['action']);

$formProcesor = FormFactory::create($action); 
$formProcesor->send($data); 

if ( ! isset( $_POST['st-token'] )  || ! wp_verify_nonce( $_POST['st-token'], 'servicio-tecnico-form' ) ) {

   die( json_decode( array('state' => 'error', 'msg' => 'Sorry, your nonce did not verify.') ) );

}
