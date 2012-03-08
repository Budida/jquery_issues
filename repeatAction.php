<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Jquery Repeat Actions</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			function animateDiv() {
				$('#myDiv')
				.animate(
					{height: '200px'})
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
		animateDiv();
		
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
