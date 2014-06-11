(function(window, $, undefined) {
	$(document).ready(function() {
		
		$("#dialog").button().click(function() {
			$("#dialog-modal").dialog("open");
		});
		
		$("#dialog-modal").dialog({
			autoOpen: false,
			height: 400,
			width: 650,
			modal: true
		});


		$( "#dialog-message" ).dialog({
			modal: true,
			autoOpen: false,
			closeOnEscape: true,
			resizable: false,
			draggable: false,
			buttons: {
				Cerrar: function() {
					$( this ).dialog( "close" );
				}
			}
		});
		
		
		
	});
})(window, jQuery);
