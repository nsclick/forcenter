(function(window, $, undefined) {
$(document).ready(function() {

	var modals 		= $('.model-modal'),
		open_modals	= $('.open_modal');

	/**
     * Models Modals Handling
     */
    $.each(modals, function(index, modal) {
    	$(modal).dialog({
			autoOpen: false,
			width: 1020,
			modal: true
		});
    });
    
    $(document.body).delegate('.open_modal', 'click', function(ev) {
    	ev.preventDefault();

    	var modelId = $(this).attr('data-model-id');
    	$('#model_modal_' + modelId).dialog('open');
    });

});
})(window, jQuery);
