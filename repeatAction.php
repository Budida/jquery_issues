<!DOCTYPE html>
<head>
	<title>Jquery Repeat Actions</title>
	<meta charset=utf-8" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			
			function animateDiv() {
				$('#myDiv')
				.animate({height: '200px'})
				.delay(5000)
				.animate({
						height: '300px'
						})
				.animate({
						borderWidth: '5px'
						})
				.animate({
						left: '100px'
						})
				.animate({left: '10px'}, animateDiv);
			}
		//calling animate function 
		animateDiv();
		
		//using each function to enable looping of actions
		var loop = function(){
			var featlay = 0;
			$('.featuredbanner img').each(function(){
					$(this).delay(featlay).animate({opacity: 1,  leaveTransforms:true}, {duration:2000, queue:true});
					featlay += 6000;
					$(this).delay(featlay).animate({opacity: 0,  leaveTransforms:true}, {duration:2000, queue:true});
				});

			setTimeout(loop, 0);
		};

		loop();
		});
	</script>
	
</head>

<body>
	<div id="myDiv" style="border: 1ps solid green; background-color: #ffdccc; height: 20px; position: relative; width: 200px"></div>
	<div class="featuredbanner" style="position: relative' left: 10px; "><img src="lovejesus.jpg"></div>
</body>

</html>
