(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#servicio-tecnico-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#servicio-tecnico-form").validationEngine('validate') ){
				
				var queryString = $('#servicio-tecnico-form').formSerialize();
				var formAction = $('#servicio-tecnico-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
					nsclick.fn.formtrack('/servicio-tecnico/exito');
					formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
					return true;
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);
