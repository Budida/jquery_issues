$(document).ready(function() {
			$('#form_container form').submit(function(event){
				event.preventDefault();
				$('#msg').show()
				var formValues = $(this).serialize();
				$.ajax({
				   type: "POST",
				   url: "script.php",
				   data: formValues,
				   success: function(msg){
						$('#msg')
						.html("Your name is: " + msg )
						.delay(4000)
						.slideUp();
					}
			 });	
			});
			
			$('#nav a').click(function(event) {
				event.preventDefault();
			   var url = $(this).attr('id');
			   $.ajax({
				   url: url,
				   cache: false,
				   success: function(data){
						$('#body_cnts').html(data)
					} 
				});
			});
	});
