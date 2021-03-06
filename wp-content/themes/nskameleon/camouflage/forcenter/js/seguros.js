(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#seguros-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#seguros-form").validationEngine('validate') ){
				
				var queryString = $('#seguros-form').formSerialize();
				var formAction = $('#seguros-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
					nsclick.fn.formtrack('/seguros/seguros-gracias-enviado');
					
					formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
					return true;
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);

