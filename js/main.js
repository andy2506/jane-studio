$(function() {

	'use strict';

	// Form

	var contactForm = function() {

		if ($('#contactForm').length > 0 ) {
			$( "#contactForm" ).validate( {
				rules: {
					name: "required",
					email: {
						required: true,
						email: true
					},
					phone: {
						required: true,
						mobileUK: true
					},
					confirmation: {
						required: true,
					}
				},
				messages: {
					name: "Please enter your name",
					email: "Please enter a valid email address",
					phone: "Please enter a phone number",
					confirmation: "Please confirm that we can market to you in the future"
				},
				/* submit via ajax */
				submitHandler: function(form) {		
					var $submit = $('.submitting'),
						waitText = 'Submitting...';

					$.ajax({   	
				      type: "POST",
				      url: "/contact-submit",
				      data: $(form).serialize(),

				      beforeSend: function() { 
				      	$submit.css('display', 'block').text(waitText);
				      },
				      success: function(msg) {
		               if (msg == 'success') {
		               	$('#form-message-warning').hide();
				            setTimeout(function(){
		               			$('#contactForm').fadeOut();
		               		}, 1000);
				            setTimeout(function(){
				               $('#form-message-success').fadeIn();   
		               		}, 1400);
							$( "#contactForm" ).resetForm();
			            } else {
			               $('#form-message-warning').html(msg);
				            $('#form-message-warning').fadeIn();
				            $submit.css('display', 'none');
			            }
				      },
				      error: function() {
				      	$('#form-message-warning').html("Something went wrong. Please try again.");
				         $('#form-message-warning').fadeIn();
				         $submit.css('display', 'none');
				      }
			      });    		
		  		}
				
			} );
		}
	};
	contactForm();

});