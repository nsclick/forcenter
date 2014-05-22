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
		
		
	});
})(window, jQuery);
