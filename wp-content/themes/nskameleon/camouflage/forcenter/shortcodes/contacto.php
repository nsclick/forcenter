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
									<option>
										12
									</option>
								</select>
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
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
								<div class="divclear">&nbsp;</div>
							</div>
							<div class="select">
								<label for="servicio">Servicio:</label>
								<select name="servicio">
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
