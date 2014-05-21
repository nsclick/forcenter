(function(window, $, data, undefined) {
	$(document).ready(function() {

		var accesories_boxes_wrapper 	= $('#showgrid_wrapper')
			accesories_boxes			= $('.accesory_box'),
			cats_search_el 				= $('.model-search'),
			result_number_el			= $('#accesories_available_qty'),
			category_selected			= 'accesorios',
			categories 					= data.models,
			divclear					= $('<div class="divclear">&nbsp;</div>');

		/**
	     * Search
	     */
	    function Search ( category ) {
	    	category 	= category || category_selected;

	    	var accesories_to_show 	= [];
	    	$.each(accesories_boxes, function(index, accesory_box) {
	    		var accesory_slug 	= $(accesory_box).attr('data-slug'),
	    			accesory_price 	= $(accesory_box).attr('data-price'),
		    		accesory_cats 	= $(accesory_box).attr('data-models').split(',');
		    	
		    	if (accesory_cats.indexOf(category) != -1) {
		    		accesories_to_show.push(accesory_slug);
		    	}

	    	});

	    	RenderAccesoriesBoxes(accesories_to_show);
			
			// Place number of results
	    	result_number_el.text(accesories_to_show.length);
	    	
	    	// Highlight link selected
	    	$('.model-link').removeClass('activ');
	    	$('.model-link[data-slug=' + category + ']').addClass('activ');
	    }

	    /**
	     * RenderAccesoriesBoxes
	     */
	    function RenderAccesoriesBoxes (accesories_slugs) {
	    	if (!accesories_slugs || ( typeof(accesories_slugs) != typeof([]) ) )
	    		return false;

	    	var divclear_counter = 0;
	    	$.each(accesories_boxes, function(index, accesory_box) {
		    	var accesory_slug 	= $(accesory_box).attr('data-slug'),
		    		show 			= accesories_slugs.indexOf(accesory_slug);

		    	if (show != -1) {
		    		$(accesory_box).show();
		    		divclear_counter++;

		    		// Add a divclear element every five elements showed
		    		if (divclear_counter % 5 == 0
		    			&& divclear_counter != (accesories_slugs.length) ) {
		    			accesories_boxes_wrapper.append(divclear);
		    		}
		    	} else {
		    		$(accesory_box).hide();
		    	}
	    	});

	    	accesories_boxes_wrapper.empty();
	    	accesories_boxes_wrapper.append(accesories_boxes);

	    	/**
	    	 * Fix: Insert a divclear element every five car_boxes
	    	 */
	    	var divclear_counter = 0;
	    	$('#showgrid_wrapper .divclear').remove();
	    	$.each(accesories_boxes, function(index, accesory_box) {
	    		if ($(accesory_box).css('display') == 'block') {
	    			divclear_counter++;

	    			// Add a divclear element every five elements showed
		    		if (divclear_counter % 5 == 0
		    			&& divclear_counter != (accesories_slugs.length) ) {
		    			$(accesory_box).after(divclear.clone());
		    		}
	    		}

	    		
	    	});

	    	accesories_boxes_wrapper.append(divclear);
	    }

	    /**
	     * Filter By Category
	     */
	    cats_search_el.on('click', function(ev) {
	    	ev.preventDefault();

	    	category_selected 	= $(this).attr('data-model');
	    	location.hash 		= category_selected;

	    	Search (category_selected);
	    });

	    // Initial search
		Search();

	});
})(window, jQuery, nsk_accesories);