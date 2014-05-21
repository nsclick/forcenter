<?php

//[contacto]
function ns_contacto_shortcode( $atts ) {
	ob_start();
	?> 
		<form method="post" accept-charset="utf-8" action="" />
		<div class="cotizador">
			<div id="step3" class="activ servicio">
				<div class="selector">
					<div class="title">
						<h3>Ingrese sus datos</h3>
						<span>Todos los campos son obligatorios.</span>
					</div>
					<div class="producto">
						<div class="details">
							<div class="select">
								<label for="nombres">Nombres:</label>
								<input name="nombres" type="text" />
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="paterno">Apellido paterno:</label>
								<input name="paterno" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="materno">Apellido materno:</label>
								<input name="materno" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="fono">Tel&eacute;fono:</label>
								<input name="fono" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="email">E-mail:</label>
								<input name="email" type="text"/>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="comuna">Comuna:</label>
								<select name="comuna">	
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
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="donde">D&oacute;nde nos conoci&oacute;:</label>
								<select name="donde">
									<option selected="selected" value="">Seleccione una opción</option>
									<option value="Las Ultimas Noticias">Las Ultimas Noticias</option>
									<option value="Google">Google</option>
									<option value="Referido">Referido</option>
									<option value="Volante">Volante</option>
									<option value="Radio">Radio</option>
									<option value="Television">Televisión</option>
								</select>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="servicio">Servicio:</label>
								<select name="servicio">
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
								<div class="divclear">&nbsp;</div>
							</div>
							
							<div class="divclear">&nbsp;</div>
						</div>
						<div class="divclear">&nbsp;</div>
					</div>
				</div>
				<div id="enviado" class="hide">
					<h2>Su mensaje ha sido enviado.</h2>
					<p>Nos comunicaremos a la brevedad.</p>
				</div>
				<div class="link">
					<button id="go3">Enviar<i class="icon-chevron-right"></i></button>
					<div class="divclear">&nbsp;</div>
				</div>
			</div>
		</div>
		</form>
	<?php
return ob_get_clean();
}
add_shortcode( 'contacto', 'ns_contacto_shortcode' );
