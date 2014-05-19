(function(window, $, undefined) {
	$(document).ready(function() {
		$("#slider-range").slider({
			range : true,
			min : 0,
			max : 500,
			values : [75, 300],
			slide : function(event, ui) {
				$("#minp").val("$" + ui.values[0]);
				$("#maxp").val("$" + ui.values[1]);
			}
		});
		$("#minp").val("$" + $("#slider-range").slider("values", 0));
		$("#maxp").val("$" + $("#slider-range").slider("values", 1));
	});
})(window, jQuery);
