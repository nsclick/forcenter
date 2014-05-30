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


class Mantenciones extends FormProcessor{
	
	function send($data){
		
		if(!$this->_postValidation( 'mantenciones-form', 'mt-token' ) ){
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
		
		$excluded = array('mt-token', '_wp_http_referer');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$body .= $key . ': ' . $value;
				$body .= "\n"; 
			}
		}
    
    $email = 'creyes@nsclick.cl';
    		 
    return array(
      'to'      => $email,
      'subject' => 'Solicitud de Agendamiento de Mantención',
      'body'    => $body
    );
  }
  	
}

class Seguros extends FormProcessor{
	
	function send($data){
		
		if(!$this->_postValidation( 'seguros-form', 'sg-token' ) ){
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
		
		$excluded = array('sg-token', '_wp_http_referer');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$body .= $key . ': ' . $value;
				$body .= "\n"; 
			}
		}
    
    $email = 'creyes@nsclick.cl';
    		 
    return array(
      'to'      => $email,
      'subject' => 'Solicitud de Cotización de seguro',
      'body'    => $body
    );
  }
  	
}

class CompraInteligente extends FormProcessor{
	
	function send($data){
		
		if(!$this->_postValidation( 'compra-inteligente-form', 'ci-token' ) ){
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
		
		$excluded = array('ci-token', '_wp_http_referer');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$body .= $key . ': ' . $value;
				$body .= "\n"; 
			}
		}
    
		$email = 'creyes@nsclick.cl';
    		 
		return array(
			'to'      => $email,
			'subject' => 'Solicitud de Información Compra Inteligente',
			'body'    => $body
		);
	}
  	
}


/*
 * Sent to CRM 
 * 
 * */
class Contacto extends FormProcessor{
	
	private $type = 'email';
	
	function send($data){
				
		if(!$this->_postValidation( 'contacto-form', 'co-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		require_once ('vendor/pmh/includes/apipmh/index.php');
		
		$bind = $this->mapData($data);
		
		switch( $data['servicio'] ){
			case 'ventas@forcenter.cl':
				$this->result = $pmhapi->cotizacion_contacto_autos_nuevos($bind);
				break;
			case 'repuestos@forcenter.cl':
				$this->result = $pmhapi->cotizacion_contacto_repuestos($bind);
				break;
			case 'accesorios@forcenter.cl':
				$this->result = $pmhapi->cotizacion_contacto_accesorios($bind);
				break;
			default:
				$email = $this->formatEmail($bind);
				if(!$this->sendEmail($email['to'], $email['subject'], $email['body'])){
					$this->errorMsg = 'Lo sentimos, hubo un error al enviar la comunicación.';
					return false;		
				}
				$this->result = 'Gracias por comunicarse con FORCENTER.';
				return true;
		}
		
		
		$this->type = 'crm';
		if(!$this->result){
			$this->errorMsg = 'Error en el regisro al CRM, Revise los IDs de las Versiones';
			return false;
		}

		if(!$this->result->result){
			$this->errorMsg = $this->result->mensaje;
			return false;
		}
		
		return true;
	}
	
	public function getResult(){
		if($this->type == 'email')
			return json_encode( array('state' => 'ok', 'msg' => $this->result, 'type' => 'email' ) );
		
		$seller = array(
			'name'  	=> $this->result->asignado->nombre_completo,
			'phone' 	=> $this->result->asignado->telefono,
			'cellular' 	=> $this->result->asignado->celular,
			'email' 	=> $this->result->asignado->email,
			'pic' 		=> get_template_directory_uri() . '/camouflage/forcenter/vendor/pmh/includes/fotos/' . $this->result->asignado->foto
		);
		
		return json_encode( array('state' => 'ok', 'seller' => $seller, 'type' => 'crm' ) );
		
	}
	
	/**
	* formatEmail
	*/
	public function mapData($data) {
		$body = "DATOS DEL SOLICITANTE:\n";
		
		$bind = array();
		$excluded = array('co-token', '_wp_http_referer', 'servicio', 'modelo', 'version');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$bind[$key] = $value;
			}
		}
		
		$bind['telefono_casa'] = '';
		
		if(isset($data['version'])){
			//Get the CRM version ID
			$customFields = get_post_meta( $data['version'], 'version-data', true ); 
			$customFields = $customFields[0];
			$bind['vehiculo_id'] = $customFields['id-crm'];
		}
			
		return $bind;
	}

	/**
	* formatEmail
	*/
	public function formatEmail($data) {
		$body = "DATOS DEL SOLICITANTE:\n";
				
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$body .= $key . ': ' . $value;
				$body .= "\n"; 
			}
		}
    
		$email = 'creyes@nsclick.cl';
    		 
		return array(
			'to'      => $email,
			'subject' => 'Solicitud de Contacto',
			'body'    => $body
		);
	}
  
}

/*
 * Sent to CRM 
 * 
 * */
class Repuestos extends FormProcessor{
	
	function send($data){
				
		if(!$this->_postValidation( 'repuestos-form', 'rp-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		require_once ('vendor/pmh/includes/apipmh/index.php');
		
		$bind = $this->mapData($data);
		
		$this->result = $pmhapi->cotizacion_seccion_repuestos($bind);
										      
		if(!$this->result){
			$this->errorMsg = 'Error en el regisro al CRM, Informe de este error al webmaster';
			return false;
		}

		if(!$this->result->result){
			$this->errorMsg = $this->result->mensaje;
			return false;
		}
		
		return true;
	}
	
	public function getResult(){
		
		$seller = array(
			'name'  	=> $this->result->asignado->nombre_completo,
			'phone' 	=> $this->result->asignado->telefono,
			'cellular' 	=> $this->result->asignado->celular,
			'email' 	=> $this->result->asignado->email,
			'pic' 		=> get_template_directory_uri() . '/camouflage/forcenter/vendor/pmh/includes/fotos/' . $this->result->asignado->foto
		);
		
		return json_encode( array('state' => 'ok', 'seller' => $seller) );
		
	}
	
	/**
	* formatEmail
	*/
	public function mapData($data) {
		$bind = array();
		$excluded = array('rp-token', '_wp_http_referer', 'nomodelo', 'modelo');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$bind[$key] = $value;
			}
		}
		$bind['modelo'] = $data['modelo'] ? $data['modelo'] : $data['nomodelo'];
		$bind['tipo_vehiculo'] = $data['modelo'] ? 'moderno' : 'antiguo';
		
		$bind['telefono_casa'] = $data['celular'];
		
		return $bind;
	}
}


/*
 * Sent to CRM 
 * 
 * */
class Cotizacion extends FormProcessor{
	
	function send($data){
				
		if(!$this->_postValidation( 'coticacion-form', 'ct-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		require_once ('vendor/pmh/includes/apipmh/index.php');
		
		$bind = $this->mapData($data);
		
		if(count($bind['accesorios_id']){
			$bind_a = $bind;
			unset($bind_a['version']);
			$this->result_a = $pmhapi->cotizacion_seccion_accesorios($bind_a);
		}
		if(count($bind['version']){
			$bind_v = $bind;
			unset($bind_v['accesorios_id']);			
			$this->result_a = $pmhapi->cotizacion_seccion_autos_nuevos($bind_v);
		}
								      
		if(!$this->result_a && $this->result_v){
			$this->errorMsg = 'Error en el regisro al CRM, Informe de este error al webmaster';
			return false;
		}

		if(!$this->result_a->result && $this->result_v->result){
			$this->errorMsg = $this->result->mensaje;
			return false;
		}
		
		return true;
	}
	
	public function getResult(){
		
		$seller_a = array(
			'name'  	=> $this->result_a->asignado->nombre_completo,
			'phone' 	=> $this->result_a->asignado->telefono,
			'cellular' 	=> $this->result_a->asignado->celular,
			'email' 	=> $this->result_a->asignado->email,
			'pic' 		=> get_template_directory_uri() . '/camouflage/forcenter/vendor/pmh/includes/fotos/' . $this->result->result_a->foto
		);

		$seller_v = array(
			'name'  	=> $this->result_v->asignado->nombre_completo,
			'phone' 	=> $this->result_v->asignado->telefono,
			'cellular' 	=> $this->result_v->asignado->celular,
			'email' 	=> $this->result_v->asignado->email,
			'pic' 		=> get_template_directory_uri() . '/camouflage/forcenter/vendor/pmh/includes/fotos/' . $this->result->result_v->foto
		);
		
		return json_encode( array('state' => 'ok', 'seller_a' => $seller, 'seller_v' => $seller_v) );
		
	}
	
	/**
	* formatEmail
	*/
	public function mapData($data) {
		$bind = array();
		$excluded = array('ct-token', '_wp_http_referer', 'ids');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$bind[$key] = $value;
			}
		}
		
		//Get the ids
		$versions = $accesories = array();
		$ids = explode($data['ids']);
		foreach($ids as $id){
			$post = get_post($id);
			if($post->post_type == 'version'){
				$customFields = get_post_meta( $id, 'version-data', true ); 
				$customFields = $customFields[0];
				$versions[] = $customFields['id-crm'];
			} else {
				$customFields = get_post_meta ( $id, 'datos-extra-accesorios', true );
				$customFields = $customFields[0];
				$accesories[] = $customFields['numero'];
			}
		}
		
		$bind['telefono_casa'] = $data['celular'];
		$bind['version'] = $versions;
		$bind['accesorios_id'] = $accesories;
	
		return $bind;
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
