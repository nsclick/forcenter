(function(window, $, data, undefined) {
	$(document).ready(function() {
		/**
		 * Validation
		 */
		var form = $("#cotizador-form");
		form.validationEngine('attach', {promptPosition:"inline", scroll:false});

		/**
		 * Steps Handling
		 */
		var gotos 		= $('.goto'),
			steps 		= $('.step'),
			tabs		= $('.tab'),
			currentTab	= 'step1'; // First by default

		gotos.click(function(ev) {
			ev.preventDefault();

			var stepToGo 	= $(this).attr('data-go-to'),
				stepToGoEl	= $('#' + stepToGo),
				tabToACtive	= $('#tab_' + stepToGo),
				valid 		= true;

			/**
			 * Steps Validation
			 */
			switch (currentTab) {
				case 'step1':
					$.each(form.find('select.version'), function(index, versionInput) {
						if ($(versionInput).validationEngine('validate'))
							valid = false;
					});

					$.each(form.find('select.accesorio'), function(index, accesorioInput) {
						if ($(accesorioInput).validationEngine('validate'))
							valid = false;
					});

					break;
				case 'step2':
					if (
						$('#pie').validationEngine('validate')
						|| $('#cuotas').validationEngine('validate')
					)
						valid = false;

					break;
				// case 'step3':
					// $.each(stepToGoEl.find('input'), function(inputEl) {
					// 	if ($(inputEl).validationEngine('validate'))
					// 		valid = false;
					// });

					// $.each(stepToGoEl.find('select'), function(selectEl) {
					// 	if ($(selectEl).validationEngine('validate'))
					// 		valid = false;
					// });
					break;
			}

			// Only if current tab fields are valids
			if (valid) {
				steps.removeClass('activ');
				tabs.removeClass('activ');
				stepToGoEl.addClass('activ');
				tabToACtive.addClass('activ');
				currentTab = stepToGo;
			}
		});

		/**
		 * Model-Version Selects Populator
		 */
		function ModelVersionSelectPopulator (modelSelectEl, versionSelectEl, models) {
			var emptySelectModelOption = $('<option value="">Seleccione un modelo</option>');
			modelSelectEl.empty();
			modelSelectEl.append(emptySelectModelOption);

			$.each(models, function(index, model) {
				var option = $('<option>')
					.attr('value', model.ID)
					.text(model.post_title);

				modelSelectEl.append(option);
			});

			modelSelectEl.on('change', function() {
				var modelSelectedId = $(this).val();
				
				if (modelSelectedId == '') {
					versionSelectEl.empty();
					return false;
				}

				$.each(models, function(index, model) {
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

		}

		/**
		 * Model-Accesory Selects Populator
		 */
		function ModelAccesorySelectPopulator (modelSelectEl, accesorySelectEl, models) {
			var emptySelectModelOption = $('<option value="">Seleccione un modelo</option>');
			modelSelectEl.empty();
			modelSelectEl.append(emptySelectModelOption);

			$.each(models, function(index, model) {
				if (model.accesories.length > 0) {
					var option = $('<option>')
						.attr('value', model.ID)
						.text(model.post_title);

					modelSelectEl.append(option);
				}
			});

			modelSelectEl.on('change', function() {
				var modelSelectedId = $(this).val();
				
				if (modelSelectedId == '') {
					versionSelectEl.empty();
					return false;
				}

				$.each(models, function(index, model) {
					var modelId 	= model.ID;
					
					if (modelId == parseInt(modelSelectedId)) {
						var accesories = model.accesories;
						
						accesorySelectEl.empty();
						var emptySelectVersionOption = $('<option value="">Seleccione un accesorio</option>');
						accesorySelectEl.append(emptySelectVersionOption);

						$.each(accesories, function(index, accesory) {
							var option = $('<option>')
								.attr('value', accesory.ID)
								.text(accesory.post_title);

							accesorySelectEl.append(option);
						});
					}

				});

			});

		}

		/**
		 * Cloning Boxes Handling
		 */
		var addCarBtn 			= $('#add_car'),
			addAccesoryBtn		= $('#add_accesory'),
			carsWrapper			= $('#cars_wrapper'),
			carBox				= $($('.producto.car')[0]),
			carsCount			= 0,
			carsLimit			= 3,
			accesoriesWrapper	= $('#accesories_wrapper'),
			accesoryBox			= $($('.producto.accesory')[0]),
			accesoriesLimit		= 3,
			accesoriesCount		= 0;

		addCarBtn.click(function(ev) {
			ev.preventDefault();

			addCarBox();
		});

		/**
		 * AddCarBox
		 */
		function addCarBox(version) {
			if (carsCount == carsLimit) {
				return false;
			}

			var clonedCarBox 			= carBox.clone(true,true),
				removeClonedCarBoxBtn	= clonedCarBox.find('.remove'),
				imgEl					= clonedCarBox.find('img'),
				nameEl					= clonedCarBox.find('.name'),
				priceEl					= clonedCarBox.find('.price'),
				modelSelectEl			= clonedCarBox.find('select.modelo'),
				versionSelectEl			= clonedCarBox.find('select.version');

			modelSelectEl.on('change', function() {
				var modelSelectedId = $(this).val();
				
				if (modelSelectedId == '') {
					versionSelectEl.empty();
					return false;
				}

				$.each(data.models, function(index, model) {
					var modelId 	= model.ID;
					
					if (modelId == parseInt(modelSelectedId)) {
						nameEl.text(model.post_title);
						imgEl.attr('src', model.thumbnail.src);
						priceEl.text('');
					}

				});
			});

			var car;
			versionSelectEl.on('change', function() {
				var versionSelectedId = $(this).val();

				if (versionSelectedId == '') {
					return false;
				}

				
				$.each(data.versions, function(index, version) {
					if (version.ID == parseInt(versionSelectedId)) {
						nameEl.text(version.post_title);
						priceEl.text('$' + version.price);
						imgEl.attr('alt', version.post_title)
							.attr('title', version.post_title);

						// Add to quoting.sys
						if (!!car) {
							nsQ.Quoting.removeProduct(car);
						}
						car = new nsQ.Car(version.ID);
						nsQ.Quoting.addProduct(car);
						nsQ.Quoting.saveProducts();
					}
				});

			});

			// Remove
			removeClonedCarBoxBtn.click(function(ev) {
				ev.preventDefault();

				clonedCarBox.remove();
				carsCount--;

				// Remove from quoting.sys
				if (car) {
					nsQ.Quoting.removeProduct(car);
					nsQ.Quoting.saveProducts();
				}
			});

			clonedCarBox.appendTo(carsWrapper);
			ModelVersionSelectPopulator(modelSelectEl, versionSelectEl, data.models);

			carsCount++;

			// Session Car
			if (!!version) {
				modelSelectEl.val( (version.related_model.ID).toString() )
					.trigger('change');

				versionSelectEl.val( (version.ID).toString() )
					.trigger('change');

				nameEl.text(version.post_title);
				priceEl.text('$' + version.price);
				imgEl.attr('src', version.related_model.thumbnail.src)
					.attr('alt', version.post_title)
					.attr('title', version.post_title);
			}
		}

		addAccesoryBtn.click(function(ev) {
			ev.preventDefault();

			addAccesoryBox();
		});

		/**
		 * AddAccesoryBox
		 */
		function addAccesoryBox(accesory) {
			if (accesoriesCount == accesoriesLimit) {
				return false;
			}

			var clonedAccesoryBox 			= accesoryBox.clone(),
				removeClonedAccesoryBoxBtn	= clonedAccesoryBox.find('.remove'),
				imgEl						= clonedAccesoryBox.find('img'),
				nameEl						= clonedAccesoryBox.find('.name'),
				modelSelectEl				= clonedAccesoryBox.find('select.modelo'),
				accesorySelectEl 			= clonedAccesoryBox.find('select.accesorio');

			var accProd;
			accesorySelectEl.on('change', function() {
				var accesorySelectedId = $(this).val();

				if (accesorySelectedId == '') {
					return false;
				}

				$.each(data.accesories, function(index, accesory) {
					if (accesory.ID == parseInt(accesorySelectedId)) {
						nameEl.text(accesory.post_title);
						imgEl.attr('src', accesory.extra.thumbnail.src)
							.attr('alt', accesory.post_title)
							.attr('title', accesory.post_title);

						// Add to quoting.sys
						if (!!accProd) {
							nsQ.Quoting.removeProduct(accProd);
						}
						accProd = new nsQ.Accesory(accesory.ID);
						nsQ.Quoting.addProduct(accProd);
						nsQ.Quoting.saveProducts();
					}
				});

			});

			// Remove
			removeClonedAccesoryBoxBtn.click(function(ev) {
				ev.preventDefault();

				clonedAccesoryBox.remove();
				accesoriesCount--;

				// Remove from quoting.sys
				if (!!accProd) {
					nsQ.Quoting.removeProduct(accProd);
					nsQ.Quoting.saveProducts();
				}
			});

			clonedAccesoryBox.appendTo(accesoriesWrapper);
			ModelAccesorySelectPopulator(modelSelectEl, accesorySelectEl, data.models);

			accesoriesCount++;

			// Session Car
			if (!!accesory) {
				modelSelectEl.val( (accesory.related_model.ID).toString() )
					.trigger('change');

				accesorySelectEl.val( (accesory.ID).toString() )
					.trigger('change');

				nameEl.text(accesory.post_title);
				imgEl.attr('src', accesory.extra.thumbnail.src)
					.attr('alt', accesory.post_title)
					.attr('title', accesory.post_title);
			}
		}

		/**
		 * Request Products in Session and fill forms
		 */
		nsQ.Quoting.requestProducts()
			.done(function(r) {
				if (r.success) {
					$.each(r.products, function(productId, product) {
						
						switch (product.type) {
							case 'Car':
								$.each(data.versions, function(index, version) {
									if (version.ID == productId) {

										// Fill form with version
										addCarBox(version);

									}
								});
								break;
							case 'Accesory':
								$.each(data.accesories, function(index, accesory) {
									if (accesory.ID == productId) {
										addAccesoryBox(accesory);
									}
								});
								break;
						}
					});

				}
			});

		/**
		 * Sending
		 */
		var submitBtn 	= $('#go3'),
			formWrapper	= $('.cotizador'),
			msgBox		= $('#enviado');
			
		submitBtn.click(function(ev) {
			ev.preventDefault();

			if (form.validationEngine('validate')) {
				var queryString = form.formSerialize(),
					formAction 	= form.attr('action');

				addWaiting(submitBtn);

				$.ajax(
					formAction,
					// settings
					{
						data: queryString,
						type: 'POST',
						dataType: 'json'
					}
				)
				.done(function(r) {
					
					if (!r.state || r.state == 'error') {
						removeWaiting(submitBtn);
						formErrorResponse(true, r.msg);
						return false;
					}

					formWrapper.hide();
					msgBox.empty();
					msgBox.removeClass('hide');
					msgBox.append( '<h2>Su solicitud ha sido enviada con &eacute;xito</h2>' );

					if(r.seller_v){
						msgBox.append( '<h3>Su solicitud de cotización de vehículo ha sido asignada a:</h3>' );
						msgBox.append( '<img src=" ' + r.seller_v.pic + ' " title="Foto ejecutivo asignado">' );
						msgBox.append( '<p>' + r.seller_v.name + '</p>');
						msgBox.append( '<p>Tel&eacute;fono: ' + r.seller_v.phone + '</p>');
						msgBox.append( '<p>Celular: ' + r.seller_v.cellular + '</p>');
						msgBox.append( '<p>Email: ' + r.seller_v.email + '</p>');				
						
					}
					
					if(r.seller_a){
						msgBox.append( '<h3>Su solicitud de cotización de accesorio ha sido asignada a:</h3>' );
						msgBox.append( '<img src=" ' + r.seller_a.pic + ' " title="Foto ejecutivo asignado">' );
						msgBox.append( '<p>' + r.seller_a.name + '</p>');
						msgBox.append( '<p>Tel&eacute;fono: ' + r.seller_a.phone + '</p>');
						msgBox.append( '<p>Celular: ' + r.seller_a.cellular + '</p>');
						msgBox.append( '<p>Email: ' + r.seller_a.email + '</p>');
					}
					return true;

				});

			}
		});

	});
})(window, jQuery, ns_cotizador_data);
