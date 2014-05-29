<form action="procesador.php" method="post" id="formulary">
	<input type="hidden" name="action" value="contacto">


<div style="display: block;" class="content" id="step-1">
			<h2 class="StepTitle">Ingrese sus Datos</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
				<tbody><tr>
					<td align="center" colspan="3">&nbsp;</td>
				</tr>        
				<tr>
					<td align="right">* RUT :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="rut" id="CotizadorSeccionContactoRut"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoRut"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">* Nombres :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="name" id="CotizadorSeccionContactoNombres"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoNombres"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">* Apellido Paterno :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="apellido_paterno" id="CotizadorSeccionContactoApellidoPaterno"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoApellidoPaterno"></span>&nbsp;</td>
				</tr> 
				<tr>
					<td align="right">Apellido Materno :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="apellido_materno" id="CotizadorSeccionContactoApellidoMaterno"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoApellidoMaterno"></span>&nbsp;</td>
				</tr> 
				<tr>
					<td align="right">* Teléfono :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="phone" id="CotizadorSeccionContactoTelefono"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoTelefono"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">Celular :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="celular" id="CotizadorSeccionContactoCelular"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoCelular"></span>&nbsp;</td>
				</tr>
				<tr>
                    <td align="right">* Email :</td>
                    <td align="left"><input type="text" value="" class="txtBox" name="email" id="CotizadorSeccionContactoEmail"></td>
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoEmail"></span>&nbsp;</td>
          		</tr>
				<tr>
                    <td align="right">* Comuna :</td>
                    <td align="left">
						<select class="txtBox" name="comuna" id="CotizadorSeccionContactoComuna">
							<option selected="selected" value="">Seleccione una comuna</option>
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
						</select>
					</td>
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoComuna"></span>&nbsp;</td>
          		</tr>
                       <tr>
                    <td align="right">* Donde nos Conoció:</td>
                    <td align="left">
						<select class="txtBox" name="donde" id="CotizadorSeccionContactoDonde">
							<option selected="selected" value="">Seleccione una opción</option>
							<option value="Las Ultimas Noticias">Las Ultimas Noticias</option>    
							<option value="Google">Google</option>     
							<option value="Referido">Referido</option> 
                                                        <option value="Volante">Volante</option> 
                                                        <option value="Radio">Radio</option> 
                                                        <option value="Television">Televisión</option> 
                       </select>
					</td>
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoDonde"></span>&nbsp;</td>
             </tr>
				<tr>
					<td align="right">* Servicio:</td>
					<td align="left"><label>
        <select class="txtBox" style="width:300px;" id="CotizadorSeccionContactoServicio" name="servicio">
            <option value="">Seleccione</option>
            <option value="ventas@forcenter.cl">Ventas</option>
            <option value="usados@forcenter.cl">Usados</option>
            <option value="accesorios@forcenter.cl">Accesorios</option>
            <option value="repuestos@forcenter.cl">Repuestos</option>
            <option value="internet@forcenter.cl">Servicio Técnico</option>
            <option value="reservas@forcenter.cl">Mantenciones</option>
            <option value="dyp@forcenter.cl">Desabolladura y Pintura</option>
            <option value="internet@forcenter.cl">Seguros</option>
            <option value="internet@forcenter.cl">Compra Inteligente</option>
            <option value="internet@forcenter.cl">Financiamiento</option>
            <option value="marketing@forcenter.cl">Otro</option>
        </select>
      </label>
   </td>
</tr>
<tr>
                	<td colspan="3">ID modelo y ID Versión solo aplican cuando el servicio es Ventas</td>
                </tr>

<tr>
    <td width="124" align="right">ID Modelo:</td>
    <td align="left"><label>
        <input type="text" class="txtBox" id="CotizadorSeccionContactoModelo" name="modelo">
      </label>    
    </td>
	<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoModelo"></span>&nbsp;</td>
</tr>

<tr>
    <td width="124" align="right">ID Versión:</td>
    <td align="left"><label>
        <input type="text" class="txtBox" id="CotizadorSeccionContactoModelo" name="version">
      </label>    
    </td>
	<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoModelo"></span>&nbsp;</td>
</tr>
<tr>
                	<td width="124" align="right">Comentarios :</td>
                	<td align="left"><textarea cols="40" rows="8" name="mensaje"></textarea></td>
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionContactoComentarios"></span>&nbsp;</td>
                </tr>

<tr>
                	<td colspan="3"><input type="submit" value="Enviar"></td>
                </tr>
                
</tbody></table>
</div>
</form>
