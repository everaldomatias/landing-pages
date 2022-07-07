(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

	$(document).ready( function() {
		$('form.ajax').on('submit', function(e){
			e.preventDefault();
			var form = $(this);
			$("form.ajax .submit-contact").addClass("loading");

			var name = $('form.ajax #nome').val();
			var email = $('form.ajax #email').val();
			var message = $('form.ajax #message').val();

			var data = {
				action: 'send_contact_form',
				name: $('form.ajax #nome').val(),
				email: $('form.ajax #email').val(),
				whatsapp: $('form.ajax #whatsapp').val(),
				message: $('form.ajax #message').val(),
				seller: $('form.ajax #seller').val(),
				nonce: contact_form_object.nonce
			}

			$.post(contact_form_object.ajax_url, data, function(response){
				if(response.success == true) {
					$('.ajax')[0].reset();
					$(".response-form").html(response.data);
					$(".response-form").addClass("show form-success");
					$("form.ajax .submit-contact").removeClass("loading");
				} else {
					$(".response-form").html(response.data);
					$(".response-form").addClass("show form-error");
					$("form.ajax .submit-contact").removeClass("loading");
				}

				// Reseta o formulário após envio
				setTimeout(function() { 
					$(".response-form").removeClass("show form-success form-error");
				}, 5000);
			})
		});
	});
})( jQuery );

document.addEventListener('DOMContentLoaded', function() {
	new Glide('.glide', {
		autoplay: 3000,
		focusAt: 'center',
		gap: 15,
		perView: 3,
		type: 'carousel',
		breakpoints: {
			600: {
				perView: 2
			}
		}
	}).mount()
});
