<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Image resize</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		
	$(document).ready(function() {
		var max_h = 150;
		var max_w = 100;
		$("img").each(function(i) {

		  if ($(this).height() > max_h) {

			var h = max_h;

		  } else if ($(this).width() > max_w){

			var w = max_w;

		  }

		  $(this).css({ height: h, width: w });

		});
		});

	</script>
</head>

<body>
	<div id="images"><img src="lovejesus.jpg"></div>
</body>

</html>
