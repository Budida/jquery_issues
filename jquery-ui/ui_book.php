<!DOCTYPE html>
<head>
	<title>Jquery UI library</title>
	<meta charset=utf-8" />
	<link rel="stylesheet" href="themes/cupertino/jquery-ui-custom.css" />
	<link rel="stylesheet" href="themes/cupertino/jquery.ui.accordion.css" />
	<link rel="stylesheet" href="themes/cupertino/ui_book.css">
	<script src="scripts/jquery.min.js"></script>
	<script  src="scripts/jquery-ui-custom.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#ul_list ul').accordion();
			$('#dob').datepicker();
		});
	</script>
</head>
	<body>
		<div id="wrapper">
			<div id="header_nav">
				<a href="#">Home</a>
			</div>
			<div id="body_contents">
				<div id="ul_list">
					<ul>
						<li>
							<h3>Heading1</h3>
							<p>
								This is ma first para...
							</p>
						</li>
										<li>
							<h3>Heading2</h3>
							<p>
								This is ma second para...
							</p>
						</li>
					</ul>
			</div><!--end ui-list div-->
				<div id="contents">
					<form>
						DOB:<input type="text" name="dob" id="dob"/>
					</form>
				</div>
		</div>
	</body>
</html>