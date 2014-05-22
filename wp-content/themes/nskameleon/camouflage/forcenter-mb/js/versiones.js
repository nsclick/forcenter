(function(window, $, undefined) {
	$(document).ready(function() {

		var menu_boxes 		= $('.menu_box'),
			back_btns		= $('.menu_box_back'),
			next_btns		= $('.menu_box_next'),
			current_index 	= 0;

		function show(direction) {
			current_index 	+= (direction || 0);

			// Fit current index to valid indices
			if (current_index > (menu_boxes.length - 1)) {
				current_index = 0;
			} else if (current_index < 0) {
				current_index = menu_boxes.length - 1;
			}
			
			menu_boxes.hide();
			$(menu_boxes[current_index]).show();
		}

		back_btns.on('click', function(ev) {
			ev.preventDefault();

			show(-1);
		});

		next_btns.on('click', function(ev) {
			ev.preventDefault();

			show(1);
		});

		// Init
		show(0);

	});
})(window, jQuery);