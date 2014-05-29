<!-- la especificicación del formulario debe ser igual -->
<form action="procesador.php" method="post" id="formulary">
	<input type="hidden" name="action" value="cotizacion">
	<h1>Productos</h1>
	* ID Producto 1: <input type="text" name="products[]"><br>
	* ID Producto 2: <input type="text" name="products[]"><br>
	* ID Producto 3: <input type="text" name="products[]"><br>
	<hr>
	
	<h1>Financiamiento</h1>
	* Monto Pie: <input type="text" name="pie"> <br>
	* Cuotas: <select name="coutas">
				<option selected="selected" value="">Seleccione Cuotas</option>    
                <option value="0">0</option>      
				<option value="12">12</option>        
				<option value="18">18</option>        
				<option value="24">24</option>        
				<option value="30">30</option>        
				<option value="36">36</option>                  
				<option value="42">42</option>        
				<option value="48">48</option>        
				<option value="54">54</option>        
				<option value="60">60</option>    
			</select>
	<hr>
	
	<h1>Datos del cliente</h1>
	
	* RUT <input type="text" value="" name="rut" id="rut"> <br/>
	* Nombres <input type="text" value="" name="name" id="name"> <br/>
	* Apellido Paterno <input type="text" value="" name="apellido_paterno" id="apellido_paterno"> <br/>
	  Apellido Materno <input type="text" value="" name="apellido_materno" id="apellido_materno"> <br/>
	* Teléfono <input type="text" value="" name="phone" id="phone"> <br/>
	* Celular <input type="text" value="" name="celular" id="celular"> <br/>
	* E-mail <input type="text" value="" name="email" id="email"> <br/>
	* Comuna <select name="comuna" id="comuna">
							<option value="">Seleccione una comuna</option>
							<option value="Regiones">Otras Regiones</option>    
							<option value="Cerrillos">Cerrillos</option>        
							<option value="Cerro Navia">Cerro Navia</option>        
							<option value="Conchalí">Conchalí</option>        
							<option value="El Bosque">El Bosque</option>        
							<option value="Estación Central">Estación Central</option>                  
							<option value="Huechuraba">Huechuraba</option>        
							<option value="Independencia">Independencia</option>        
							<option value="La Cisterna">La Cisterna</option>        
							<option value="La Florida">La Florida</option>    
							<option value="La Granja">La Granja</option>    
							<option value="La Pintana">La Pintana</option>    
							<option value="La Reina">La Reina</option>    
							<option value="Las Condes">Las Condes</option>    
							<option value="Lo Barnechea">Lo Barnechea</option>    
							<option value="Lo Espejo">Lo Espejo</option>    
							<option value="Lo Prado">Lo Prado</option>    
							<option value="Macul">Macul</option>    
							<option value="Maipú">Maipú</option>    
							<option value="Ñuñoa">Ñuñoa</option>    
							<option value="Pedro Aguirre Cerda">Pedro Aguirre Cerda</option>    
							<option value="Peñalolén">Peñalolén</option>    
							<option value="Providencia">Providencia</option>    
							<option value="Pudahuel">Pudahuel</option>    
							<option value="Quilicura">Quilicura</option>    
							<option value="Quinta Normal">Quinta Normal</option>    
							<option value="Recoleta">Recoleta</option>    
							<option value="Renca">Renca</option>    
							<option value="San Joaquín">San Joaquín</option>    
							<option value="San Miguel">San Miguel</option>    
							<option value="San Ramón">San Ramón</option>    
							<option value="Santiago">Santiago</option>    
							<option value="Vitacura">Vitacura</option>    
							<option value="Puente Alto">Puente Alto</option>    
							<option value="Pirque">Pirque</option>    
							<option value="San José de Maipo">San José de Maipo</option>    
							<option value="Colina">Colina</option>    
							<option value="Lampa">Lampa</option>    
							<option value="Tiltil">Til Til</option>    
							<option value="San Bernardo">San Bernardo</option>    
							<option value="Calera de Tango">Calera de Tango</option>    
							<option value="Paine">Paine</option>    
							<option value="Buin">Buin</option>    
							<option value="Talagante">Talagante</option>    
							<option value="El Monte">El Monte</option>    
							<option value="Isla de Maipo">Isla de Maipo</option>    
							<option value="Padre Hurtado">Padre Hurtado</option>    
							<option value="Peñaflor">Peñaflor</option>    
							<option value="Melipilla">Melipilla</option>    
							<option value="María Pinto">María Pinto</option>    
							<option value="Curacaví">Curacaví</option>    
							<option value="Alhué">Alhué</option>    
							<option value="San Pedro">San Pedro</option>
						</select> <br/>
	* Donde nos conoció <select class="txtBox" name="donde">
							<option value="">Seleccione una opción</option>
							<option value="Las Ultimas Noticias">Las Ultimas Noticias</option>    
							<option value="Google">Google</option>     
							<option value="Referido">Referido</option> 
                            <option value="Volante">Volante</option> 
                            <option value="Radio">Radio</option> 
                            <option value="Television">Televisión</option> 
                       </select> <br/>
	  Comentarios <textarea cols="40" rows="8" name="mensaje"></textarea> <br/>

<input type="submit" value="Enviar">
</form>
