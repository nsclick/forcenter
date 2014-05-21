<?php

//[repuestos]
function ns_repuestos_shortcode( $atts ) {
	ob_start();
	?> 
		<div class="cotizador repuestos">
			<div class="tab tab1 activ">01. Datos de su veh&iacute;culo<span class="tail">&nbsp;</span></div>
			<div class="tab tab2"><span class="head">&nbsp;</span>02. Ingrese sus datos<span class="tail">&nbsp;</span></div>
			<div class="divclear">&nbsp;</div>
			<div id="step1" class="activ">
				<p>Utilice el siguiente formulario para solicitar una cotizaci&oacute;n por repuestos para su Ford.</p>
				<div class="selector">
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="modelo">Modelo:</label>
								<select name="modelo">
									<option>
										Modelo
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="version">Versi&oacute;n:</label>
								<select name="version">
									<option>
										Versi&oacute;n
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="nomodelo">¿No est&aacute; su modelo?:</label>
								<input name="nomodelo" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="chasis-vin">Chasis o VIN:</label>
								<input name="chasis-vin" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="divclear">&nbsp;</div>
							<div class="select" style="float:none;width:auto">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="go1">Ingrese sus datos <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
				<h4>¿Qué es el VIN o Chasis?</h4>
				<p>(Vehicle Identification Number o Número de identificación del Vehículo)<br />
					Los lugares más comunes para encontrar el # VIN son:<br />
					En el marco de la puerta del lado del conductor. (Algunos casos se ven en el lado del pasajero)<br />
					En el tablero muy cerca al parabrisas.<br />
					En el mismo motor.<br />
					En la columna de dirección.<br />
					En el bracket que soporta el radiador.<br />
					En el arco de rueda de la mano derecha.<br />
					Y principalmente, en el PADRÓN.<br />
				</p>
			</div>
			<div id="step2">
				<div class="selector">
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="rut">RUT:</label>
								<input name="rut" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input name="fono" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="comuna">Comuna:</label>
								<select name="comuna">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="donde">D&oacute;nde nos conoci&oacute;:</label>
								<select name="donde">
									<option>
										12
									</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div class="link">
					<button id="back2"><i class="icon-chevron-left"></i> Volver al paso 1</button>
					<button id="done">Enviar <i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
		</div>	
	<?php
return ob_get_clean();
}
add_shortcode( 'repuestos', 'ns_repuestos_shortcode' );
