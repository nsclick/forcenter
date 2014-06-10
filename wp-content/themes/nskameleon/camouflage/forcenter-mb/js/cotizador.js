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
					
					if(data.type == 'email'){
						formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
						return true;
					}
					
					nsclick.fn.formtrack('/cotizador/enviado-mobile-gracias');
					
					var msgBox = $( '#enviado' );

					$("#step3").hide();
					msgBox.empty();
					msgBox.removeClass('hide');
					msgBox.append( '<h2>Su solicitud ha sido enviada con éxito</h2>' );
					msgBox.append( '<h3>Su solicitud ha sido asignada.</h3>' );
					msgBox.append( '<img src=" ' + data.seller.pic + ' " title="Foto ejecutivo asignado">' );
					msgBox.append( '<p>' + data.seller.name + '</p>');
					msgBox.append( '<p>Teléfono: ' + data.seller.phone + '</p>');
					msgBox.append( '<p>Celular: ' + data.seller.cellular + '</p>');
					msgBox.append( '<p>Email: ' + data.seller.email + '</p>');				
					return true;
					
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);

