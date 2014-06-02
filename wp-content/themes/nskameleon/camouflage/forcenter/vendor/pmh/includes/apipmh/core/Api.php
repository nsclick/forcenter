<?php
class Api extends Config{
    
    function __construct(){
        
    }
    
    function __destruct(){
        
    }
    
	public function consultar($query, $vista){
		define('PROXY_SERVER', $this->system_url.$vista);
		$url = parse_url(PROXY_SERVER);
		$curl_headers['referer'] = 'Referer: '.$this->referer_url;
		$curl_headers['user-agent'] = 'User-Agent: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)';
		$curl_headers['accept'] = 'Accept: text/plain';
		$curl_headers['accept-Language'] = 'Accept-Language: es-CL';
		$curl_headers['accept-encoding:'] = 'Accept-Encoding: <identity>';
		$curl_headers['accept-charset:'] = 'Accept-Charset: utf-8';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, PROXY_SERVER);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $curl_headers);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
		curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
		$result = curl_exec($ch);
		curl_close($ch);
        $datos = explode('text/html', $result, 2);
		return $datos[1];
	}
    
	public function cotizacion_seccion_autos_nuevos($campos){
		$campos = $this->filter_xss($campos);
        $result = $this->consultar(array('campos' => json_encode($campos), 'user' => $this->user, 'pass' => $this->pass), 'add_cotizacion_seccion_autos_nuevos');
        return json_decode($result);
    }
	
	public function cotizacion_seccion_repuestos($campos){
		$campos = $this->filter_xss($campos);
        $result = $this->consultar(array('campos' => json_encode($campos), 'user' => $this->user, 'pass' => $this->pass), 'add_cotizacion_seccion_repuestos');
        return json_decode($result);
    }
	
	public function cotizacion_seccion_accesorios($campos){
		$campos = $this->filter_xss($campos);
        $result = $this->consultar(array('campos' => json_encode($campos), 'user' => $this->user, 'pass' => $this->pass), 'add_cotizacion_seccion_accesorios');
        return json_decode($result);
    }
	
	public function cotizacion_contacto_autos_nuevos($campos){
		$campos = $this->filter_xss($campos);
        $result = $this->consultar(array('campos' => json_encode($campos), 'user' => $this->user, 'pass' => $this->pass), 'add_cotizacion_contacto_autos_nuevos');
        return json_decode($result);
    }
	
	public function cotizacion_contacto_repuestos($campos){
		$campos = $this->filter_xss($campos);
        $result = $this->consultar(array('campos' => json_encode($campos), 'user' => $this->user, 'pass' => $this->pass), 'add_cotizacion_contacto_repuestos');
        return json_decode($result);
    }
	
	public function cotizacion_contacto_accesorios($campos){
		$campos = $this->filter_xss($campos);
        $result = $this->consultar(array('campos' => json_encode($campos), 'user' => $this->user, 'pass' => $this->pass), 'add_cotizacion_contacto_accesorios');
        return json_decode($result);
    }
}
?>
