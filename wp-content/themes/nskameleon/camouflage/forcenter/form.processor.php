<?php

include('../../../../../wp-load.php');

class FormProcessor {
	
	protected $errorMsg = '';
	protected $result = '';
	protected $defaultFrom = 'From: forcenter.cl <internet@forcenter.cl>';
	
	protected function _postValidation($contextID, $field){
		if ( ! isset( $_POST[$field] )  || ! wp_verify_nonce( $_POST[$field], $contextID ) ) {
		   return false;
		}
		
		return true;
	}
	
	protected function sendEmail($to, $subject, $message, $headers=NULL){
		$headers[] = $this->defaultFrom;
		return wp_mail( $to, $subject, $message, $headers);
	}
	
	public function getError(){
		return json_encode( array('state' => 'error', 'msg' => $this->errorMsg ) );
	}
	
	public function getResult(){
		return json_encode( array('state' => 'ok', 'msg' => $this->result ) );
	}
	
}

class ServicioTecnico extends FormProcessor{
	
	private $to = 'reservas@forcenter.cl';
	private $headers = array('Cc: cvera@forcenter.cl', 'Cc: cdiaz@forcenter.cl', 'Cc: jmarin@forcenter.cl', 'Cc: fgili@forcenter.cl', 'Cc: develop@nsclick.cl');
	private $subject = 'Solicitud de Agendamiento Servicio Técnico';
	
	function send($data){
		
		if(!$this->_postValidation( 'servicio-tecnico-form', 'st-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($this->to, $this->subject, $email, $this->headers)){
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
		return $body;
	}
  	
}

class Mantenciones extends FormProcessor{

	private $to = 'reservas@forcenter.cl';
	private $headers = array('Cc: cvera@forcenter.cl', 'Cc: cdiaz@forcenter.cl', 'Cc: cperez@forcenter.cl', 'Cc: fgili@forcenter.cl', 'Cc: develop@nsclick.cl');
//	private $to = 'creyes@nsclick.cl';
//	private $headers = array('Cc: cesar.cesarreyes@gmail.com');
	private $subject = 'Solicitud de Agendamiento Mantenciones';
	
	function send($data){
		
		if(!$this->_postValidation( 'mantenciones-form', 'mt-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($this->to, $this->subject, $email, $this->headers)){
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
    
		return $body;
	}
  	
}


class Seguros extends FormProcessor{

	private $to = 'internet@forcenter.cl';
	private $headers = array('Cc: gleiva@forcenter.cl', 'Cc: marketing@forcenter.cl', 'Cc: develop@nsclick.cl');
//	private $to = 'creyes@nsclick.cl';
//	private $headers = array('Cc: cesar.cesarreyes@gmail.com');
	private $subject = 'Solicitud de Cotización de Seguro';
		
	function send($data){
		
		if(!$this->_postValidation( 'seguros-form', 'sg-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($this->to, $this->subject, $email, $this->headers)){
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
        		 
		return $body;
	}
  	
}

class CompraInteligente extends FormProcessor{
	
	private $to = 'internet@forcenter.cl';
	private $headers = array('Cc: gleiva@forcenter.cl', 'Cc: marketing@forcenter.cl', 'Cc: develop@nsclick.cl');
//	private $to = 'creyes@nsclick.cl';
//	private $headers = array('Cc: cesar.cesarreyes@gmail.com');
	private $subject = 'Solicitud de información de compra inteligente';

	function send($data){
		
		if(!$this->_postValidation( 'compra-inteligente-form', 'ci-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($this->to, $this->subject, $email, $this->headers)){
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
    
		return $body;
	}
  	
}


/*
 * Sent to CRM 
 * 
 * */
class Contacto extends FormProcessor{
	
	private $type = 'email';
	
//	private $headers = array('Cc: cvera@forcenter.cl', 'Cc: cdiaz@forcenter.cl', 'Cc: cperez@forcenter.cl', 'Cc: fgili@forcenter.cl', 'Cc: develop@nsclick.cl');
	private $headers = array('Cc: gleiva@forcenter.cl', 'Cc: marketing@forcenter.cl', 'Cc: develop@nsclick.cl');
	private $subject = 'Solicitud de Contacto';

	
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
				if(!$this->sendEmail($data['servicio'], $this->subject, $email, $this->headers)){
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
			$bind['version_id'] = $customFields['id-crm'];
		}
			
		return $bind;
	}

	/**
	* formatEmail
	*/
	public function formatEmail($data) {
		$body = "DATOS DEL SOLICITANTE:\n";
		
		foreach ($data AS $key => $value) {
			$body .= $key . ': ' . $value;
			$body .= "\n"; 
		}
    		 
		return $body;
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
	
	private $result_a = null;
	private $result_v = null;
	
	function send($data){
		
		if(!$this->_postValidation( 'coticacion-form', 'ct-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		require_once ('vendor/pmh/includes/apipmh/core/Api.php');
		$pmhapi = new Api();
		
		$bind = $this->mapData($data);
		
		if( count( $bind['version'] ) ) {
			$bind_v = $bind;
			unset($bind_v['accesorios_id']);	
			$bind_v['observacion'] = 'Solicitud desde cotizador del sitio web';
			$this->result_v = $pmhapi->cotizacion_seccion_autos_nuevos($bind_v);
		}
		
		if(count($bind['accesorios_id'])){
			$bind_a = $bind;
			unset($bind_a['version'], $bind_a['monto_pie'], $bind_a['numero_cuotas']);
			for( $x=0; $x < count($bind['accesorios_id']); $x++  ){
				$bind_a['cantidad'][] = 1;
			}
			$bind_a['comentario'] = 'Solicitud desde cotizador del sitio web';
			$this->result_a = $pmhapi->cotizacion_seccion_accesorios($bind_a);
		}
									      
		if(!$this->result_a && !$this->result_v){
			$this->errorMsg = 'Error en el regisro al CRM, Informe de este error al webmaster';
			return false;
		}

		if(!$this->result_a->result && !$this->result_v->result){
			$this->errorMsg = $this->result->mensaje;
			return false;
		}
		
		return true;
	}
	
	public function getResult(){
		$seller_a = $seller_v = NULL;
		
		if( $this->result_a ){
			$seller_a = array(
				'name'  	=> $this->result_a->asignado->nombre_completo,
				'phone' 	=> $this->result_a->asignado->telefono,
				'cellular' 	=> $this->result_a->asignado->celular,
				'email' 	=> $this->result_a->asignado->email,
				'pic' 		=> get_template_directory_uri() . '/camouflage/forcenter/vendor/pmh/includes/fotos/' . $this->result_a->asignado->foto
			);
		}

		if( $this->result_v ){
			$seller_v = array(
				'name'  	=> $this->result_v->asignado->nombre_completo,
				'phone' 	=> $this->result_v->asignado->telefono,
				'cellular' 	=> $this->result_v->asignado->celular,
				'email' 	=> $this->result_v->asignado->email,
				'pic' 		=> get_template_directory_uri() . '/camouflage/forcenter/vendor/pmh/includes/fotos/' . $this->result_v->asignado->foto
			);
		}
		
		return json_encode( array('state' => 'ok', 'seller_a' => $seller_a, 'seller_v' => $seller_v) );
	}
	
	/**
	* formatEmail
	*/
	public function mapData($data) {
		$bind = array();
		$excluded = array('ct-token', '_wp_http_referer', 'car_models', 'car_version', 'accesory_models', 'accesories');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$bind[$key] = $value;
			}
		}
		
		//Get the ids
		$versions = $accesories = array();
		$ids = array();
		if(is_array($data['car_version'])){
			foreach ($data['car_version'] as $id) {
				$customFields 	= get_post_meta( $id, 'version-data', true );
				$customFields 	= $customFields[0];
				if($customFields['id-crm']){
					$versions[]     = $customFields['id-crm'];
				}
			}
		}
		
		if(is_array($data['accesories'])){
			foreach ($data['accesories'] as $id) {
				$customFields 	= get_post_meta ( $id, 'datos-extra-accesorios', true );
				$customFields 	= $customFields[0];
				if( $customFields['id-crm'] ){
					$accesories[]   = $customFields['id-crm'];
				}
			}
		}
		$bind['telefono_casa'] 	= $data['celular'];
		$bind['version'] 		= $versions;
		$bind['accesorios_id'] 	= $accesories;
	
		return $bind;
	}
}

class DyP extends FormProcessor{

	private $to = 'dyp@forcenter.cl';
	private $headers = array('Cc: rpinto@forcenter.cl', 'Cc: lmoreno@forcenter.cl', 'Cc: ainostroza@forcenter.cl', 'Cc: develop@nsclick.cl');
//	private $to = 'creyes@nsclick.cl';
//	private $headers = array('Cc: cesar.cesarreyes@gmail.com');
	private $subject = 'Solicitud de Agendamiento Desabolladura y Pintura';
	
	function send($data){
		
		if(!$this->_postValidation( 'dyp-form', 'dp-token' ) ){
			$this->errorMsg = 'Sorry, your nonce did not verify.';
			return false;
		}
		
		$email = $this->formatEmail($data);
		if(!$this->sendEmail($this->to, $this->subject, $email, $this->headers)){
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
		
		$excluded = array('dp-token', '_wp_http_referer');
		
		foreach ($data AS $key => $value) {
			if(!in_array($key , $excluded)){
				$body .= $key . ': ' . $value;
				$body .= "\n"; 
			}
		}
    		 
		return $body;
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
