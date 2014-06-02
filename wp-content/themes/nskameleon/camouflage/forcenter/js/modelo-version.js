(function(window, $, undefined) {
	$(document).ready(function() {
			
		$( "select[name='modelo']" ).change( function (e){
			
			var modelo_id = $( this ).val();
			load_versions(modelo_id);
			
		} );
		
	});
	
	function load_versions(model){

		$( "select[name='version']" ).empty();
		
		var list = versions[model];

		if(typeof list == 'undefined')
			return false;
		
		$( "select[name='version']" ).append('<option value="">Seleccione Versión</option>');
		$.each( list, function( key, value ) {
			var html = '<option value="' + key + '">' + value + '</option>';
			$( "select[name='version']" ).append(html);
		});
	}
		
})(window, jQuery);

