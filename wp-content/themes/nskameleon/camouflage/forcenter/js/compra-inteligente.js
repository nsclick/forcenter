(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#compra-inteligente-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#compra-inteligente-form").validationEngine('validate') ){
				
				var queryString = $('#compra-inteligente-form').formSerialize();
				var formAction = $('#compra-inteligente-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
					nsclick.fn.formtrack('/compra-inteligente/exito');
					
					formSuccessResponse( $("#step3"), 'Su solicitud ha sido enviada con éxito', 'Gracias por contactarnos' );
					return true;
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);

