<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Sending Data with Ajax</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../../jquery.liveSearch.js"></script>
	<script type="text/javascript" src="script.js"></script>
</head>

<body>
	<div id="header">
	<h4>God's Dictionary</h4>
		<h6>By Budida</h6><hr />
	</div>
	<div class="letters">
		
	<div id="home">
	<h3><a href="#">Home</a></h3>
	</div>
	<div class="letter" id="letter-a">
	<h3><a href="#">A</a></h3>
	</div>
	<div class="letter" id="letter-b">
	<h3><a href="#">B</a></h3>
	</div>
	<div class="letter" id="letter-c">
	<h3><a href="#">C</a></h3>
	</div>
	<div class="letter" id="letter-d">
	<h3><a href="#">D</a></h3>
	</div>
	<div class="letter" id="letter-e">
	<h3><a href="e.php?term='budida'">E</a></h3>
	</div>
	<div class="letter" id="letter-f">
		<fieldset>
		<legend>F</legend>
	<form action="f.php?surname" method="get">
	Surname: <input type="text" name="surname" value="" id="term" />
	FirstName: <input type="text" name="fname" value="" id="fname" />
	<input type="submit" name="search" value="search"
	id="search" />
	</form>
	</fieldset>
	</div>
	<!-- and so on -->
	</div>

	<div id="dictionary">
		Welcome use links on the left to get advantage of this dictionary..
	</div>
</body>

</html>
