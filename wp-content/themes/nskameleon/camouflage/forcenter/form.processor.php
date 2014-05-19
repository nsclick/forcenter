<?php

include('../../../../../wp-load.php');



class FormProcessor {
	
	protected $errorMsg = '';
	protected $result = '';
	
	protected function _postValidation($contextID, $field){
		if ( ! isset( $_POST[$field] )  || ! wp_verify_nonce( $_POST[$field], $contextID ) ) {
		   return false;
		}
		
		return true;
	}
	
	private function sendEmail($to, $subject, $message){
		return wp_mail( $to, $subject, $message );
	}
	
	public function getError(){
		return json_decode( array('state' => 'error', 'msg' => $this->errorMsg ) );
	}
	
	public function getError(){
		return json_decode( array('state' => 'ok', 'msg' => $this->result ) );
	}
	
}

class ServicioTecnico extends FormProcessor{
	
	function send($data){
		
		if(!$this->_postValidation( 'servicio-tecnico-form', 'st-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($to, $subject, $message)){
			$this->errorMsg = 'Lo sentimos, hubo un error al enviar la comunicación.';
			return false;		
		}
		
		$this->result = 'Gracias por comunicarse con FORCENTER.';
		return true;
	
	}
	
	/**
	* formatEmail
	*/
	public function formatEmail($data) {
		$body = '';
    
		foreach ($data AS $key => $field) {
			$body .= $key . ': ' . $field;
			$body .= "\n"; 
		}
    
    $email = 'creyes@nsclick.cl';
    		 
    return array(
      'to'      => $email,
      'subject' => 'Solicitud de Servicio Técnico',
      'body'    => $body
    );
  }
  	
}


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
  public static function create($className = null) {
    
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

$processor = FormFactory::create($action); 
if($processor->send($data))
	$processor->getResult();
else
	$processor->getError();
