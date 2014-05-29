<!-- la especificicación del formulario debe ser igual -->
<form action="procesador.php" method="post" id="formulary">
<input type="hidden" name="action" value="repuestos">

			<h1>Repuestos</h1>
			<table cellspacing="3" cellpadding="3" align="center">
				<tbody><tr><td align="center" colspan="3">&nbsp;</td></tr>
				<tr>
					<td align="right">* Tipo Vehículo :</td>
					<td align="left">
						<select class="txtBox" name="tipo_vehiculo" id="CotizadorSeccionRepuestosTipoVehiculo">
							<option selected="selected" value="">Seleccione un tipo</option>
                            <option value="moderno">Vigente</option>
							<option value="antiguo">Antiguo</option>
						</select>
					</td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosTipoVehiculo"></span>&nbsp;</td>
				</tr>
                <tr>
					<td align="right">* Modelo :</td>
					<td align="left">
						<div id="ModeloModerno">
							<select class="txtBox" name="seccion_repuestos_modelo" id="CotizadorSeccionRepuestosModelo"><option value="Ford Econoline XL">Ford Econoline XL</option><option value="Ford Econoline XLT">Ford Econoline XLT</option><option value="Ford EcoSport SE 1.6 MT">Ford EcoSport SE 1.6 MT</option><option value="Ford Edge">Ford Edge</option><option value="Ford Escape S 2.5L 4x2">Ford Escape S 2.5L 4x2</option><option value="Ford Expedition ">Ford Expedition </option><option value="Ford Explorer">Ford Explorer</option><option value="Ford F-150 Raptor">Ford F-150 Raptor</option><option value="Ford F-150 RegCab XLT 4x2 3.7L">Ford F-150 RegCab XLT 4x2 3.7L</option><option value="Ford Fiesta Hatch 5 Door SE">Ford Fiesta Hatch 5 Door SE</option><option value="Ford Fiesta Hatch 5 Door Titanium">Ford Fiesta Hatch 5 Door Titanium</option><option value="Ford Fiesta Sedan">Ford Fiesta Sedan</option><option value="Ford Focus HB 5dr SE 2.0L MT">Ford Focus HB 5dr SE 2.0L MT</option><option value="Ford Focus Sedan 4dr SE 2.0L MT">Ford Focus Sedan 4dr SE 2.0L MT</option><option value="Ford Fusion SE 2.0L. Ecoboost">Ford Fusion SE 2.0L. Ecoboost</option><option value="Ford Fusion SE 2.5L. AT">Ford Fusion SE 2.5L. AT</option><option value="Ford Mustang 5.0">Ford Mustang 5.0</option><option value="Ford Ranger Gas XL">Ford Ranger Gas XL</option></select>
						</div>
						<div id="ModeloAntiguo">
							
						</div>
					</td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosModelo"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">* Código Vin:</td>
					<td align="left"><input type="text" value="" class="txtBox" name="codigo_vin" id="CotizadorSeccionRepuestosVin"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosVin"></span>&nbsp;</td>
				</tr> 
				<tr>
					<td align="right">* Tipo Repuesto:</td>
					<td align="left">
						<select class="txtBox" name="tipo" id="CotizadorSeccionRepuestosTipo">
							<option selected="selected" value="">Seleccione un tipo</option>
							<option value="Motor">Motor</option>
							<option value="Carroceria">Carrocería</option>
							<option value="Suspencion">Suspención</option>
							<option value="Transmision">Transmisión</option>
							<option value="No Especificado">Otro</option>
						</select>
					</td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosTipo"></span>&nbsp;</td>
				</tr> 
				<tr>
					<td align="right">Comentario:</td>
					<td align="left"><textarea style="width:300px;height: 80px;" class="txtBox" name="comentarios" id="CotizadorSeccionRepuestosComentarios"></textarea>	</td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosComentarios"></span>&nbsp;</td>
				</tr> 
			</tbody></table>

<table cellspacing="3" cellpadding="3" align="center">
				<tbody><tr>
					<td align="center" colspan="3">&nbsp;</td>
				</tr>        
				<tr>
					<td align="right">* RUT :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="rut" id="CotizadorSeccionRepuestosRut"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosRut"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">* Nombres :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="nombres" id="CotizadorSeccionRepuestosNombres"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosNombres"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">* Apellido Paterno :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="apellido_paterno" id="CotizadorSeccionRepuestosApellidoPaterno"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosApellidoPaterno"></span>&nbsp;</td>
				</tr> 
				<tr>
					<td align="right">Apellido Materno :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="apellido_materno" id="CotizadorSeccionRepuestosApellidoMaterno"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosApellidoMaterno"></span>&nbsp;</td>
				</tr> 
				<tr>
					<td align="right">* Teléfono :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="telefono" id="CotizadorSeccionRepuestosTelefono"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosTelefono"></span>&nbsp;</td>
				</tr>
				<tr>
					<td align="right">Celular :</td>
					<td align="left"><input type="text" value="" class="txtBox" name="celular" id="CotizadorSeccionRepuestosCelular"></td>
					<td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosTelefono"></span>&nbsp;</td>
				</tr>
				<tr>
                    <td align="right">* Email :</td>
                    <td align="left"><input type="text" value="" class="txtBox" name="email" id="CotizadorSeccionRepuestosEmail"></td>
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosEmail"></span>&nbsp;</td>
          		</tr>
				<tr>
                    <td align="right">* Comuna :</td>
                    <td align="left">
						<select class="txtBox" name="comuna" id="CotizadorSeccionRepuestosComuna">
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
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosComuna"></span>&nbsp;</td>
          		</tr>
                     <tr>
                    <td align="right">* Donde nos Conoció:</td>
                    <td align="left">
						<select class="txtBox" name="donde" id="CotizadorSeccionRepuestosDonde">
							<option selected="selected" value="">Seleccione una opción</option>
							<option value="Las Ultimas Noticias">Las Ultimas Noticias</option>    
							<option value="Google">Google</option>     
							<option value="Referido">Referido</option> 
                                                        <option value="Volante">Volante</option> 
                                                        <option value="Radio">Radio</option> 
                                                        <option value="Television">Televisión</option> 
                       </select>
					</td>
                    <td align="left"><span class="SWCampoObligatorio" id="MsgErrorCotizadorSeccionRepuestosDonde"></span>&nbsp;</td>
             </tr>

				<tr>
					<td colspan="3"><input type="submit" value="Enviar"></td>
				</tr> 

             
			</tbody></table>
</form>
