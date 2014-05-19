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
	
	protected function sendEmail($to, $subject, $message){
		//return true;
		return wp_mail( $to, $subject, $message );
	}
	
	public function getError(){
		return json_encode( array('state' => 'error', 'msg' => $this->errorMsg ) );
	}
	
	public function getResult(){
		return json_encode( array('state' => 'ok', 'msg' => $this->result ) );
	}
	
}

class ServicioTecnico extends FormProcessor{
	
	function send($data){
		
		if(!$this->_postValidation( 'servicio-tecnico-form', 'st-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($email['to'], $email['subject'], $email['body'])){
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
		$body = "DATOS DEL SOLICITANTE:\n";
		
		$excluded = array('st-token', '_wp_http_referer');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$body .= $key . ': ' . $value;
				$body .= "\n"; 
			}
		}
    
    $email = 'creyes@nsclick.cl';
    		 
    return array(
      'to'      => $email,
      'subject' => 'Solicitud de Agendamiento Servicio Técnico',
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
    
    if (!class_exists($className) || !$className) {
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
	die($processor->getResult());
else
	die($processor->getError());
