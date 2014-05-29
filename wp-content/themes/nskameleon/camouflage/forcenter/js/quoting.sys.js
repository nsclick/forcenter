(function(window, $, data, undefined) {
$(document).ready(function() {
	var topQuotingEl 				= $('#cotizador_btn'),
		topQuotingTotalQtyEl		= $('#cotizador_cant'),
		topQuotingCarQtyEl			= $('#auto_cant'),
		topQuotingAccesoryQtyEl		= $('#accesorio_cant'),
		topQuotingCarCleanEl		= $('#cotizador_limpiar_autos'),
		topQuotingAccesoryCleanEl	= $('#cotizador_limpiar_accesorios'),
		topQuotingBox				= $('#quick_cotizador');

	/**
	 * Quoting
	 */
	var Quoting = {
		products: {},
		counters: {
			Accesory: 	0,
			Car: 		0
		}
	};

	Quoting.getProducts = function() {
		return this.products;
	};

	Quoting.addProduct = function(product) {
		if (!product instanceof Product)
			throw ('Expected object of type Product.');

		if (!this.products.hasOwnProperty(product.postId)) {
			this.products[product.postId] = product;
			
			// Update Top Quoting Box
			return this.updateTopBox();
		}
		return false;
	};

	Quoting.removeProduct = function(product) {
		if (!product instanceof Product)
			throw ('Expected object of type Product.');

		if (this.products.hasOwnProperty(product.postId)) {
			delete(this.products[product.postId]);

			// Update Top Quoting Box
			this.updateTopBox();
		}
		return false;
	};

	Quoting.updateTopBox = function() {
		var self = this;
		
		return this.saveProducts()
			.done(function(r) {
				if (r.success) {
					self.updateCounters();
					topQuotingCarQtyEl.text(self.counters.Car);
					topQuotingAccesoryQtyEl.text(self.counters.Accesory);
					topQuotingTotalQtyEl.text(self.counters.Accesory + self.counters.Car);
				}
			});

	};

	Quoting.updateCounters = function() {
		var self 				= this;
		this.counters.Car 		= 0;
		this.counters.Accesory 	= 0;

		$.each(this.products, function(id, product) {
			switch (product.type) {
				case 'Car':
					self.counters.Car++;
					break;
				case 'Accesory':
					self.counters.Accesory++;
					break;
			}
		});
	};

	Quoting.cleanByType = function(type) {
		var self = this;
		$.each(this.products, function(id, product) {
			if (product.type == type)
				self.removeProduct(product);
		});
	};

	Quoting.cleanCars = function() {
		this.cleanByType('Car');
	};

	Quoting.cleanAccesories = function() {
		this.cleanByType('Accesory');
	};

	Quoting.saveProducts = function() {

		return jQuery.ajax(data.ajax_url, {
			data: {
				products: 	this.products,
				method: 	'add',
				action: 	'ns_quote'
			},
			type: 'post',
			dataType: 'json',
			success: function(r) {
				
			}
		});

	};

	Quoting.requestProducts = function() {
		return jQuery.ajax(data.ajax_url, {
			data: {
				action: 	'ns_quote'
			},
			type: 'post',
			dataType: 'json'
		});
	};

	/**
 	 * Product
	 */
	function Product(postId) {
		this.postId = postId;
	};

	/**
	 * Car Product
	 */
	Car.prototype 				= new Product();
	Car.prototype.constructor 	= Car;
	Car.prototype.parent		= Product.prototype;
	// // parent method call => this.parent.{method}.call(this);
	function Car(postId) {
		this.postId = postId;
		this.type 	= 'Car';

		return this;
	};

	/**
	 * Accesory Product
	 */
	Accesory.prototype 				= new Product();
	Accesory.prototype.constructor	= Accesory;
	Accesory.prototype.parent		= Product.prototype;
	// // parent method call => this.parent.{method}.call(this);
	function Accesory(postId) {
		this.postId = postId;
		this.type 	= 'Accesory';

		return this;
	};


	/**
	 * Top Quoting Box Handling
	 */
	topQuotingEl.click(function(ev) {
		topQuotingBox.toggle();
	});

	topQuotingCarCleanEl.click(function(ev) {
		ev.preventDefault();

		Quoting.cleanCars();
	});

	topQuotingAccesoryCleanEl.click(function(ev) {
		ev.preventDefault();

		Quoting.cleanAccesories();
	});

	/**
	 * Quoting Links
	 */
	 $(document.body).delegate('.quoting_link', 'click', function(ev) {
	 	ev.preventDefault();

	 	var productId 	= $(this).attr('data-quoting-id'),
	 		productType	= $(this).attr('data-quoting-type'),
	 		redirect	= $(this).attr('data-quoting-redirect');

	 	var product;
	 	switch(productType) {
	 		case 'Car':
	 			product = new Car(productId);
	 			break;
	 		case 'Accesory':
	 			product = new Accesory(postId);
	 			break;
	 	}

	 	Quoting.addProduct(product)
	 		.done(function(r) {
	 			
	 		});

	 	if (redirect == 'true' || redirect == true) {
	 		// location.href = data.cotizador_page;
	 	}
	 });

	/**
	 * Export Global Functions 
	 */
	window.nsQ = {
		Quoting: 	Quoting,
		Car: 		Car,
		Accesory: 	Accesory
	};

	/**
	 * Request Session Products
	 */
	Quoting.requestProducts()
		.done(function(r) {
			if (r.success) {

				$.each(r.products, function(id, product) {
					var product;
					switch (product.type) {
						case 'Car':
							product = new Car(product.postId);
							break;
						case 'Accesory':
							product = new Accesory(product.postId);
							break;
					}

					Quoting.addProduct(product);
				});
			}
		});

});
})(window, jQuery, nsk_quoting_data);