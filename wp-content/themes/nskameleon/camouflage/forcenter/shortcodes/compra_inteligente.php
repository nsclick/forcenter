<?php

//[compra_inteligente]
function ns_compra_inteligente_shortcode( $atts ) {
	ob_start();
	?> 
		<form method="post" accept-charset="utf-8" action="" />
		<div class="cotizador">
			<p>La Compra Inteligente es un sistema de financiamiento que puede ser a 24 ó a 36 meses, para las personas que deseen renovar su vehículo cada 2 ó 3 años, aprovechando siempre de disfrutar la mejor vida útil de su automóvil.</p>
			<p>Con la Compra Inteligente puedes disfrutar de múltiples beneficios:COMODIDAD: De disfrutar un auto nuevo cada 2 ó 3 años.SEGURIDAD: De contar con un Valor Futuro Mínimo Garantizado para su auto al cabo de los dos o tres años, eliminando así los riesgos y las incomodidades de la reventa.AHORRO: Por mantener el automóvil durante el mejor período de su vida útil, minimizando los gastos de mantención y reparaciones, beneficiándote de la garantía del fabricante.PROPIEDAD: El vehículo queda a tu nombre desde el primer día.</p>
			<p>¿Cómo funciona?</p>
			<p>Compra Inteligente es un sistema de financiamiento a 24 ó 36 meses, creado para quienes desean renovar su vehículo cada dos o tres años.</p>
			<p>Con Compra Inteligente, sólo tienes que elegir el modelo que más se ajusta a tus necesidades (*) y FORUM te garantiza el valor que, como mínimo, tu automóvil tendrá dentro de dos o tres años. Es lo que se denomina el Valor Futuro Mínimo Garantizado (VFMG) y que equivale a la cuota N° 25 ó 37 de tu crédito. Este valor se resta, junto con el pie inicial, del precio del vehículo, y entonces sólo pagas esta diferencia más el costo del dinero en 24 cuotas mensuales para el caso de 2 años o 36 cuotas para renovar cada 3 años.Al finalizar el contrato eliges entre tres alternativas la que más te convenga: cambiar el auto por uno nuevo, quedarte con él o devolverlo.</p>
			<p>(*) Sólo para vehículos de pasajeros (excluye los vehículos comerciales).</p>
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
								<label for="apellido">Apellido:</label>
								<input name="apellido" type="text"/>
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
							<div class="select" style="float:right">
								<label for="comentarios">Comentarios:</label>
								<textarea name="comentarios"></textarea>
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
add_shortcode( 'compra_inteligente', 'ns_compra_inteligente_shortcode' );
