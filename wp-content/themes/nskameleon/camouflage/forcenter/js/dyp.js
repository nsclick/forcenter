(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#dyp-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#dyp-form").validationEngine('validate') ){
				
				var queryString = $('#dyp-form').formSerialize();
				var formAction = $('#dyp-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
					nsclick.fn.formtrack('/desabolladura-y-pintura/desabolladura-y-pintura-gracias-enviado');

					formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
					return true;
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);
