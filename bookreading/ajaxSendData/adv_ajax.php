<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Sending Data with Ajax</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="ui-css/custom.css">
	<script type="text/javascript" src="../jquery.js"></script>
	<script type="text/javascript" src="../../jquery.liveSearch.js"></script>
	<script type="text/javascript" src="jquery-ui.js"></script>
	<script type="text/javascript" src="adv_script.js"></script>
</head>

<body>
	<form id="ajax-form" action="http://api.jquery.com/" method="get">
	<fieldset>
	<div class="text">
	<label for="title">Search</label>
	<input type="text" id="title" name="s">
	</div>
	<div class="actions">
	<button type="submit">Request</button>
	</div>
	</fieldset>
	</form>
    <div id="response"></div>
</body>

</html>
