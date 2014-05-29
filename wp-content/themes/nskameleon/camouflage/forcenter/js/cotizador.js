(function(window, $, data, undefined) {
	$(document).ready(function() {
		console.log(data);
		/**
		 * Steps Handling
		 */
		var gotos 	= $('.goto'),
			steps 	= $('.step');

		gotos.click(function(ev) {
			ev.preventDefault();

			var stepToGo 	= $(this).attr('data-go-to'),
				stepToGoEl	= $('#' + stepToGo);

			$(steps).removeClass('activ');
			stepToGoEl.addClass('activ');
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
		var addCarBtn 		= $('#add_car'),
			addAccesoryBtn	= $('#add_accesory'),
			cars			= [],
			accesories		= [];

		addCarBtn.click(function(ev) {
			ev.preventDefault();


		});

		addAccesoryBtn.click(function(ev) {
			ev.preventDefault();


		});

		/**
		 * Test
		 */
		var modelSelectEl 		= $('#model_1'),
			modelSelectEl2		= $('#model_2'),
			versionSelectEl		= $('#version_1'),
			accesorySelectEl	= $('#accesory_1');

		new ModelVersionSelectPopulator(modelSelectEl, versionSelectEl, data.models);
		new ModelAccesorySelectPopulator(modelSelectEl2, accesorySelectEl, data.models);

	});
})(window, jQuery, ns_cotizador_data);
