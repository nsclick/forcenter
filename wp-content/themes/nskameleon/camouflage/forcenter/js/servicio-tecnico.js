(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#servicio-tecnico-form").validationEngine('attach', {promptPosition:"inline", scroll:false});
		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#servicio-tecnico-form").validationEngine('validate') ){
				
				var queryString = $('#servicio-tecnico-form').formSerialize();
				var formAction = $('#servicio-tecnico-form').attr( 'action' );
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state){
						alert( 'error' );
						return false;
					}
					
					formSuccessResponse( true, 'Error' );
					//setTimeout(function() { $(".enviando p.dos").fadeIn(1500); }, 1500);
				}, "json"); 
				
			}
		});
		
		
	});
})(window, jQuery);
