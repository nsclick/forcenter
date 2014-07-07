(function(window, $, data) {
	$(document).ready(function() {

		var min_price 			= 0,
			max_price 			= Math.ceil(data.max_price/10000000) * (10000000),
			price_from_el 		= $('#minp'),
			price_to_el			= $('#maxp'),
			price_range_el		= $('#slider-range'),
			sorting_el			= $('#sorting'),
			cars_boxes_wrapper 	= $('#showgrid_wrapper')
			cars_boxes			= $('.car_box'),
			cats_search_el 		= $('.family-search'),
			category_selected	= 'vehiculos',
			categories 			= data.families,
			divclear			= $('<div class="divclear">&nbsp;</div>'),
			modals 				= $('.model-modal'),
			open_modals			= $('.open_modal');

		/**
		 * Price Slider
		 */
		price_range_el.slider({
	    	range: 	true,
	    	min: 	0,
	    	max: 	max_price,
	    	step: 	1000000,
	    	values: [ min_price, max_price ],
	    	slide: OnPriceSlide
	    });

	    /**
		 * OnPriceSlide
		 * This function is called each time the slider that filters
		 * the cars by price is changed by the user.
		 */
	    function OnPriceSlide ( event, ui ) {
	    	var min_price_range_value = ui.values[0],
				max_price_range_value = ui.values[1];

			price_from_el.val( StringifyPrice ( min_price_range_value ) );
			price_to_el.val( StringifyPrice ( max_price_range_value ) );

			Search (null, min_price_range_value, max_price_range_value);
	    }

	    /**
	     * Search
	     */
	    function Search ( category, price_min, price_max ) {
	    	category 	= category || category_selected;
	    	price_min 	= price_min || price_range_el.slider('values', 0) || min_price;
	    	price_max 	= price_max || price_range_el.slider('values', 1) || max_price;

	    	var cars_to_show 	= [];
	    	$.each(cars_boxes, function(index, car_box) {
	    		var car_slug 	= $(car_box).attr('data-slug'),
	    			car_price 	= $(car_box).attr('data-price'),
		    		car_cats 	= $(car_box).attr('data-families').split(',');
		    	
		    	if (car_cats.indexOf(category) != -1) {
		    		if (car_price <= price_max && car_price >= price_min ) {
			    		cars_to_show.push(car_slug);
			    	}
		    	}

	    	});

			$('#available-cars').html(cars_to_show.length);
	    	RenderCarsBoxes(cars_to_show);

	    	// Highlight link selected
	    	$('.category-link').removeClass('activ');
	    	$('.category-link[data-slug=' + category + ']').addClass('activ');
	    }

	    /**
	     * SortByPrice
	     */
	    function SortByPrice (order) {
	    	order = !!order ? order : 'min-max'; // From lower to higher by default
			
	    	function ascending_sorting(a, b) {
	    		var price_a = $(a).attr('data-price'),
	    			price_b = $(b).attr('data-price');

	    		return price_a - price_b;
	    	}

	    	function descending_sorting(a, b) {
	    		var price_a = $(a).attr('data-price'),
	    			price_b = $(b).attr('data-price');

	    		return price_b - price_a;
	    	}

	    	switch (order) {
	    		case 'min-max':
	    			return cars_boxes.sort(ascending_sorting);
	    			break;
	    		case 'max-min':
	    			return cars_boxes.sort(descending_sorting);
	    			break;
	    	}
	    }

	    /**
	     * RenderCarsBoxes
	     */
	    function RenderCarsBoxes (cars_slugs) {
	    	if (!cars_slugs || ( typeof(cars_slugs) != typeof([]) ) )
	    		return false;
	    	
	    	$.each(cars_boxes, function(index, car_box) {
		    	var car_slug 	= $(car_box).attr('data-slug'),
		    		car_price 	= $(car_box).attr('data-price'),
		    		show 		= cars_slugs.indexOf(car_slug);

		    	if (show != -1) {
		    		$(car_box).show();
		    	} else {
		    		$(car_box).hide();
		    	}
	    	});

	    	var sorting_order 		= sorting_el.val(),
	    		sorted_cars_boxes 	= SortByPrice ( sorting_order );

	    	cars_boxes_wrapper.empty();
	    	cars_boxes_wrapper.append(sorted_cars_boxes);

	    	/**
	    	 * Fix: Insert a divclear element every five car_boxes
	    	 */
	    	var divclear_counter = 0;
	    	$('#showgrid_wrapper .divclear').remove();
	    	$.each(sorted_cars_boxes, function(index, sorted_car_box) {
	    		if ($(sorted_car_box).css('display') == 'block') {
	    			divclear_counter++;

	    			// Add a divclear element every five elements showed
		    		if (divclear_counter % 5 == 0
		    			&& divclear_counter != (cars_slugs.length) ) {
		    			$(sorted_car_box).after(divclear.clone());
		    		}
	    		}

	    		
	    	});

	    	cars_boxes_wrapper.append(divclear);
	    }

	    /**
	     * Stringify Price
	     */
	    function StringifyPrice (price) {
	    	var price_str 	= price.toString(),
	    		price_str_r = price_str.split('').reverse().join(''),
	    		result 		= '';

	    	for (var i= 0; i < price_str.length; i++) {
	    		if (i%3 == 0 && (i != 0) )  {
	    			result += '.';
	    		}

	    		result += price_str_r[i];
	    	}

	    	result = '$' + result.split('').reverse().join('');
	    	return result;
	    }

	    /**
	     * Filter By Category
	     */
	    cats_search_el.on('click', function(ev) {
	    	ev.preventDefault();

	    	category_selected 	= $(this).attr('data-family');
	    	location.hash 		= category_selected;

	    	Search (category_selected);
	    });

	    /**
	     * Sorting Select Handling
	     */
	    sorting_el.on('change', function() {
	    	var order = $(this).val();
	    	Search();
	    });

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

	    /**
		 * Initialization
		 */
		var initial_min_price_range_value = price_range_el.slider('values', 0),
			initial_max_price_range_value = price_range_el.slider('values', 1);

		$.each(categories, function(index, category) {
			var slug = category.slug
				hash = location.hash.replace('#', '');

			if (hash == slug) {
				category_selected = slug;
			}
		});

		price_from_el.val( StringifyPrice ( initial_min_price_range_value ) );
		price_to_el.val( StringifyPrice ( initial_max_price_range_value ) );

		// Initial search&sorting
		Search();


		/**
		 * Modal&Version Selects Handling
		 */
		var modelSelectEl 	= $('#modelo'),
			versionSelectEl	= $('#version'),
			quotingBtn		= $('#cotizar');

		modelSelectEl.on('change', function() {
			var modelSelectedId = $(this).val();
			
			if (modelSelectedId == '') {
				versionSelectEl.empty();
				return false;
			}

			$.each(data.models, function(index, model) {
				var modelId 	= model.ID;
				
				if (modelId == parseInt(modelSelectedId)) {
					var versions = model.versions;
					
					versionSelectEl.empty();
					var emptySelectVersionOption = $('<option value="">Seleccione una versi&oacute;n</option>');
					versionSelectEl.append(emptySelectVersionOption);

					$.each(versions, function(index, version) {
						var option = $('<option>')
							.attr('value', version.ID)
							.text(version.post_title);

						versionSelectEl.append(option);
					});
				}

			});

		});

		versionSelectEl.on('change', function() {
			var versionSelectedId = $(this).val();

			if (versionSelectedId == '')
				return false;

			quotingBtn.attr('data-quoting-id', versionSelectedId);
		});


	});
})(window, jQuery, nsk_autos_nuevos);
