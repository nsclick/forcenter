(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#mantenciones-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#mantenciones-form").validationEngine('validate') ){
				
				var queryString = $('#mantenciones-form').formSerialize();
				var formAction = $('#mantenciones-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
					nsclick.fn.formtrack('/mantenciones/exito');
					formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
					return true;
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);
