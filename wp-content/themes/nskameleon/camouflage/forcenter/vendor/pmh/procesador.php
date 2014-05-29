<?php

class formProcesor{
	
	/*
	 * Array Con las respuestas del proceso
	 * ['state'] bool
	 * ['message'] string
	 * */
	private $_response = NULL;
	/*
	 * Envia los datos al CRM*/
	protected function _sendToCrm($data){
	
		//TODO: Esctribir aca el codigo para enviar al CRM
		
		/*	Inicio integracion	*/
/*** ID disponibles para realizar pruebas de cotizaciones de vehiculos: 275-147-156-163-157	*/

		require_once'includes/apipmh/index.php';
		switch($data['action']):
			case'cotizacion':
				$datos_integracion = array('version' => $data['products'], /*	TODO: se deben enviar los ID de los vehículos	*/
										   'rut' => $data['rut'],
										   'nombres' => $data['name'],
										   'apellido_paterno' => $data['apellido_paterno'],
										   'apellido_materno' => $data['apellido_materno'],
										   'telefono_casa' => $data['phone'],
										   'celular' => $data['celular'],
										   'correo_electronico' => $data['email'],
										   'monto_pie' => $data['pie'],
										   'numero_cuotas' => $data['coutas'],
										   'observacion' => $data['mensaje'],
										   'comuna' => $data['comuna'],
										   'donde_nos_conocio' => $data['donde']);
				$result = $pmhapi->cotizacion_seccion_autos_nuevos($datos_integracion);
				var_dump($result);
				if($result->result):
					/** TODO: datos del ejecutivo asignado a la cotización
					*	Nombre Ejecutivo: $result->asignado->nombre_completo
					*	Teléfono: $result->asignado->telefono
					*	Celular: $result->asignado->celular
					*	Email: $result->asignado->email
					*	Foto: $result->asignado->foto
					*	Path foto: includes/fotos/
					**/
				else:
					mail('pmh.soporte@gmail.com','Error al recepcionar datos: cotizacion_seccion_autos_nuevos[Forcenter]','Datos: '.json_encode($datos_integracion).' - Error: '.$result->mensaje);
					//TODO: capturar error: echo $result->mensaje;
				endif;
			break;
			case'repuestos':
				$datos_integracion = array('modelo' => $data['seccion_repuestos_modelo'],
										   'tipo_vehiculo' => $data['tipo_vehiculo'],
										   'codigo_vin' => $data['codigo_vin'],
										   'tipo' => $data['tipo'],
										   'comentario' => $data['comentarios'],
										   'rut' => $data['rut'],
										   'nombres' => $data['nombres'],
										   'apellido_paterno' => $data['apellido_paterno'],
										   'apellido_materno' => $data['apellido_paterno'],
										   'telefono_casa' => $data['telefono'],
										   'celular' => $data['celular'],
										   'correo_electronico' => $data['email'],
										   'comuna' => $data['comuna'],
										   'donde_nos_conocio' => $data['donde']);
				$result = $pmhapi->cotizacion_seccion_repuestos($datos_integracion);
				if($result->result):
					/** TODO: datos del ejecutivo asignado a la cotización
					*	Nombre Ejecutivo: $result->asignado->nombre_completo
					*	Teléfono: $result->asignado->telefono
					*	Celular: $result->asignado->celular
					*	Email: $result->asignado->email
					*	Foto: $result->asignado->foto
					*	Path foto: includes/fotos/
					**/
				else:
					mail('pmh.soporte@gmail.com','Error al recepcionar datos: cotizacion_seccion_repuestos[Forcenter]','Datos: '.json_encode($datos_integracion).' - Error: '.$result->mensaje);
					//TODO: capturar error: echo $result->mensaje;
				endif;
			break;
			case'accesorios':
				$datos_integracion = array('accesorios_id' => $data['accesorio'],
										   'cantidad' => $data['cantidad'],
/*
TODO: Faltan campos del cliente y cotizacion

'comentario' => $data['????'],
'rut' => $data['????'],
'nombres' => $data['????'],
'apellido_paterno' => $data['????'],
'apellido_materno' => $data['????'],
'telefono_casa' => $data['????'],
'celular' => $data['????'],
'correo_electronico' => $data['????'],
'comuna' => $data['????'],
'donde_nos_conocio' => $data['????']
*/
										   'comentario' => 'comentarios...',
										   'rut' => '159960447',
										   'nombres' => 'prueba',
										   'apellido_paterno' => 'prueba',
										   'apellido_materno' => 'prueba',
										   'telefono_casa' => 2222222,
										   'celular' => 99999999,
										   'correo_electronico' => 'prueba@prueba.com',
										   'comuna' => 'Santiago',
										   'donde_nos_conocio' => 'Google');
				$result = $pmhapi->cotizacion_seccion_accesorios($datos_integracion);
				if($result->result):
					/** TODO: datos del ejecutivo asignado a la cotización
					*	Nombre Ejecutivo: $result->asignado->nombre_completo
					*	Teléfono: $result->asignado->telefono
					*	Celular: $result->asignado->celular
					*	Email: $result->asignado->email
					*	Foto: $result->asignado->foto
					*	Path foto: includes/fotos/
					**/
				else:
					mail('pmh.soporte@gmail.com','Error al recepcionar datos: cotizacion_seccion_accesorios[Forcenter]','Datos: '.json_encode($datos_integracion).' - Error: '.$result->mensaje);
					//TODO: capturar error: echo $result->mensaje;
				endif;
			break;
			case'contacto':
				if($data['servicio'] == 'ventas@forcenter.cl'):
					$datos_integracion = array('version_id' => $data['version'],
											   'rut' => $data['rut'],
											   'nombres' => $data['name'],
											   'apellido_paterno' => $data['apellido_paterno'],
											   'apellido_materno' => $data['apellido_materno'],
											   'telefono_casa' => $data['phone'],
											   'celular' => $data['celular'],
											   'correo_electronico' => $data['email'],
											   'comentario' => $data['mensaje'],
											   'comuna' => $data['comuna'],
											   'donde_nos_conocio' => $data['donde']);
					$result = $pmhapi->cotizacion_contacto_autos_nuevos($datos_integracion);
					if($result->result):
						/** TODO: datos del ejecutivo asignado a la cotización
						*	Nombre Ejecutivo: $result->asignado->nombre_completo
						*	Teléfono: $result->asignado->telefono
						*	Celular: $result->asignado->celular
						*	Email: $result->asignado->email
						*	Foto: $result->asignado->foto
						*	Path foto: includes/fotos/
						**/
					else:
						mail('pmh.soporte@gmail.com','Error al recepcionar datos: cotizacion_seccion_autos_nuevos[Forcenter]','Datos: '.json_encode($datos_integracion).' - Error: '.$result->mensaje);
						//TODO: capturar error: echo $result->mensaje;
					endif;
				elseif($data['servicio'] == 'repuestos@forcenter.cl'):
					$datos_integracion = array('rut' => $data['rut'],
											   'nombres' => $data['name'],
											   'apellido_paterno' => $data['apellido_paterno'],
											   'apellido_materno' => $data['apellido_materno'],
											   'telefono_casa' => $data['phone'],
											   'celular' => $data['celular'],
											   'correo_electronico' => $data['email'],
											   'comentario' => $data['mensaje'],
											   'comuna' => $data['comuna'],
											   'donde_nos_conocio' => $data['donde']);
					$result = $pmhapi->cotizacion_contacto_repuestos($datos_integracion);
					if($result->result):
						/** TODO: datos del ejecutivo asignado a la cotización
						*	Nombre Ejecutivo: $result->asignado->nombre_completo
						*	Teléfono: $result->asignado->telefono
						*	Celular: $result->asignado->celular
						*	Email: $result->asignado->email
						*	Foto: $result->asignado->foto
						*	Path foto: includes/fotos/
						**/
					else:
						mail('pmh.soporte@gmail.com','Error al recepcionar datos: cotizacion_contacto_repuestos[Forcenter]','Datos: '.json_encode($datos_integracion).' - Error: '.$result->mensaje);
						//TODO: capturar error: echo $result->mensaje;
					endif;
				elseif($data['servicio'] == 'accesorios@forcenter.cl'):
					$datos_integracion = array('rut' => $data['rut'],
											   'nombres' => $data['name'],
											   'apellido_paterno' => $data['apellido_paterno'],
											   'apellido_materno' => $data['apellido_materno'],
											   'telefono_casa' => $data['phone'],
											   'celular' => $data['celular'],
											   'correo_electronico' => $data['email'],
											   'comentario' => $data['mensaje'],
											   'comuna' => $data['comuna'],
											   'donde_nos_conocio' => $data['donde']);
					$result = $pmhapi->cotizacion_contacto_accesorios($datos_integracion);
					if($result->result):
						/** TODO: datos del ejecutivo asignado a la cotización
						*	Nombre Ejecutivo: $result->asignado->nombre_completo
						*	Teléfono: $result->asignado->telefono
						*	Celular: $result->asignado->celular
						*	Email: $result->asignado->email
						*	Foto: $result->asignado->foto
						*	Path foto: includes/fotos/
						**/
					else:
						mail('pmh.soporte@gmail.com','Error al recepcionar datos: cotizacion_seccion_autos_nuevos[Forcenter]','Datos: '.json_encode($datos_integracion).' - Error: '.$result->mensaje);
						//TODO: capturar error: echo $result->mensaje;
					endif;
				endif;
			break;
		endswitch;
		/*	Termino integracion	*/
		
		
		return true;
	}
	
	protected function _setResponse($state, $message){
		$this->_response = array(
			'state' => $state,
			'message' => $message
		);
	}
	public function showResponse(){
		echo json_encode($this->_response);
	}
	
	/*
	 * Métodos que deben ser implementados en cada clase hija
	 * */
	//abstract protected _validate($data);
	//abstract public send($data);
	
}

/*
 * Se debe crear una clase de estas por cada formulario y se deben llamar igual al hidden "action" de cada formuario
 * */
class contacto extends formProcesor{
	
	/*
	 * Validación de los datos del formulario
	 * */
	protected function _validate($data){
		
		return true;
	}
	/*
	 * Ejecutador del procesor*/
	public function send($data){
		
		if(!$this->_validate($data)){
			$this->_setResponse(false, 'Error: Formulario incompleto');
			return false;
		}
		
		//TODO: Aca puede ir alguna transformación de datos o mapeo de campos
		
		
		
		if(!$this->_sendToCrm($data)){
			$this->_setResponse(false, 'Error: No se pudo enviar los datos');
			return false;
		}
		
		$this->_setResponse(true, 'Formulario enviado con éxito');
		return true;
	}
}

class cotizacion extends formProcesor{
	
	/*
	 * Validación de los datos del formulario
	 * */
	protected function _validate($data){
		
		return true;
	}
	/*
	 * Ejecutador del procesor*/
	public function send($data){
		
		if(!$this->_validate($data)){
			$this->_setResponse(false, 'Error: Formulario incompleto');
			return false;
		}
		
		//TODO: Aca puede ir alguna transformación de datos o mapeo de campos
		
		if(!$this->_sendToCrm($data)){
			$this->_setResponse(false, 'Error: No se pudo enviar los datos');
			return false;
		}
		
		$this->_setResponse(true, 'Formulario enviado con éxito');
		return true;
	}
}

class servicioTecnico extends formProcesor{
	
	/*
	 * Validación de los datos del formulario
	 * */
	protected function _validate($data){
		
		return true;
	}
	/*
	 * Ejecutador del procesor*/
	public function send($data){
		
		if(!$this->_validate($data)){
			$this->_setResponse(false, 'Error: Formulario incompleto');
			return false;
		}
		
		//TODO: Aca puede ir alguna transformación de datos o mapeo de campos
		
		
		
		if(!$this->_sendToCrm($data)){
			$this->_setResponse(false, 'Error: No se pudo enviar los datos');
			return false;
		}
		
		$this->_setResponse(true, 'Formulario enviado con éxito');
		return true;
	}
}

class mantenciones extends formProcesor{
	
	/*
	 * Validación de los datos del formulario
	 * */
	protected function _validate($data){
		
		return true;
	}
	/*
	 * Ejecutador del procesor*/
	public function send($data){
		
		if(!$this->_validate($data)){
			$this->_setResponse(false, 'Error: Formulario incompleto');
			return false;
		}
		
		//TODO: Aca puede ir alguna transformación de datos o mapeo de campos
		
		
		
		if(!$this->_sendToCrm($data)){
			$this->_setResponse(false, 'Error: No se pudo enviar los datos');
			return false;
		}
		
		$this->_setResponse(true, 'Formulario enviado con éxito');
		return true;
	}
}

class repuestos extends formProcesor{
	
	/*
	 * Validación de los datos del formulario
	 * */
	protected function _validate($data){
		
		return true;
	}
	/*
	 * Ejecutador del procesor*/
	public function send($data){
		
		if(!$this->_validate($data)){
			$this->_setResponse(false, 'Error: Formulario incompleto');
			return false;
		}
		
		//TODO: Aca puede ir alguna transformación de datos o mapeo de campos
		
		
		
		if(!$this->_sendToCrm($data)){
			$this->_setResponse(false, 'Error: No se pudo enviar los datos');
			return false;
		}
		
		$this->_setResponse(true, 'Formulario enviado con éxito');
		return true;
	}
}

class accesorios extends formProcesor{
	
	/*
	 * Validación de los datos del formulario
	 * */
	protected function _validate($data){
		
		return true;
	}
	/*
	 * Ejecutador del procesor*/
	public function send($data){
		
		if(!$this->_validate($data)){
			$this->_setResponse(false, 'Error: Formulario incompleto');
			return false;
		}
		
		//TODO: Aca puede ir alguna transformación de datos o mapeo de campos
		
		
		
		if(!$this->_sendToCrm($data)){
			$this->_setResponse(false, 'Error: No se pudo enviar los datos');
			return false;
		}
		
		$this->_setResponse(true, 'Formulario enviado con éxito');
		return true;
	}
}


//Ejecuta la factoria
$action = $_POST['action'];
$procesor = new $action;
$result = $procesor->send($_POST);
$procesor->showResponse();
die();
?>

action	contacto
apellido_materno	Morales
apellido_paterno	Juarez
celular	51236828
comuna	Conchalí
donde	Google
email	cesar.cesarreyes@gmail.com
mensaje	Pruebas
modelo	2
name	benito
phone	51236828
rut	24571694-K
servicio	accesorios@forcenter.cl
version	2

_wp_http_referer	/contacto/
action	Contacto
apellido_materno	Morales
apellido_paterno	Juarez
celular	51236828
co-token	7c875077ca
comentarios	Pruebas
comuna	Lo Espejo
correo_electronico	cesar.cesarreyes@gmail.com
donde_nos_conocio	Las Ultimas Noticias
modelo	308
nombres	Cesar
rut	24571694-K
servicio	accesorios@forcenter.cl
