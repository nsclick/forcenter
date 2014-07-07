(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#contacto-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#contacto-form").validationEngine('validate') ){
				
				var queryString = $('#contacto-form').formSerialize();
				var formAction = $('#contacto-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state || data.state == 'error'){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
//					if(data.state == 'ok'){
//						formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
//						return true;
//					}
					
					nsclick.fn.formtrack('/cotizador/enviado-mobile-gracias');
					
					var msgBox = $( '#enviado' );

					$("#step3").hide();
					msgBox.empty();
					msgBox.removeClass('hide');
					msgBox.append( '<h2>Su solicitud ha sido enviada con éxito</h2>' );
					msgBox.append( '<h3>Su solicitud de cotización de vehículo ha sido asignada a:</h3>' );
					msgBox.append( '<img src=" ' + data.seller_v.pic + ' " title="Foto ejecutivo asignado">' );
					msgBox.append( '<p>' + data.seller_v.name + '</p>');
					msgBox.append( '<p>Teléfono: ' + data.seller_v.phone + '</p>');
					msgBox.append( '<p>Celular: ' + data.seller_v.cellular + '</p>');
					msgBox.append( '<p>Email: ' + data.seller_v.email + '</p>');
					
					$('.showcase').hide();
					$('.image_b').hide();
					$($($('p')[0]).parent()).hide();
					return true;
					
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);

