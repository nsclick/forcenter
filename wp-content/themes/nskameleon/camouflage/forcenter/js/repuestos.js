(function(window, $, undefined) {
	$(document).ready(function() {
		
		//navigation Handler
		$('#go1').click(function( e ) {
			e.preventDefault();
			
			//var go = true;
			/*if(!$("#modelo").val() && !$("#nomodelo").val()){
				console.log($("#modelo").val());
				if($("#modelo").val()){
					$("#modelo").validationEngine('showPrompt', 'This a custom msg', 'load');
				}
				if($("#nomodelo").val()){
					$("#nomodelo").validationEngine('showPrompt', 'This a custom msg', 'load');
				}
				
				return false;
			}*/
			
			if( !$("input[name='codigo_vin']").validationEngine('validate') && !$("select[name='tipo']").validationEngine('validate') ){
				$('#step1').removeClass('activ');
				$('#step2').addClass('activ');
				$('.tab1').removeClass('activ');
				$('.tab2').addClass('activ');
			}
			
		});
		
		$('#back2').click(function( e ) {
			e.preventDefault();
			
			$('#step1').addClass('activ');
			$('#step2').removeClass('activ');
			$('.tab1').addClass('activ');
			$('.tab2').removeClass('activ');
		});
		
		$('#go2').click(function( e ) {
			e.preventDefault();
			
			$('#step2').removeClass('activ');
			$('#step3').addClass('activ');
			$('.tab2').removeClass('activ');
			$('.tab3').addClass('activ');
		});
		$('#back3').click(function( e ) {
			e.preventDefault();
			
			$('#step2').addClass('activ');
			$('#step3').removeClass('activ');
			$('.tab2').addClass('activ');
			$('.tab3').removeClass('activ');
		});
		
		
		$("#repuestos-form").validationEngine('attach', {promptPosition:"inline", scroll:false});

		
		$('#go3').click(function(e) {
			e.preventDefault();
			
			if( $("#repuestos-form").validationEngine('validate') ){
				
				var queryString = $('#repuestos-form').formSerialize();
				var formAction = $('#repuestos-form').attr( 'action' );
				
				addWaiting($( this ));
				
				$.post( formAction, queryString, function( data ) {
					
					if(!data.state || data.state == 'error'){
						removeWaiting($( '#go3' ));
						formErrorResponse( true, data.msg );
						return false;
					}
					
					nsclick.fn.formtrack('/repuestos/exito');
					
					var msgBox = $( '#enviado' );

					$("#cotizador").hide();
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


