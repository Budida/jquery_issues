<!doctype html>
<html>
<head>
	<title>PHP Site Template</title>
	<link rel="stylesheet" href="public/css/default.css" />
	<link rel="stylesheet" href="public/js/ui-lightness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
	<script src="public/js/custom.js"></script>
</head>
<body>

<!-- start:Wrap -->
<div id="wrap">

<?php include 'header.php'; ?>

<!-- start:Content -->
<div id="content">

<h1>Site Template</h1>
<p>
This is a <b>free site template</b> to quickly get started on a website. You are given the right to do anything you like with these documents (unless otherwise stated in an Open Source Library).
</p>

<h2>Form Example</h2>

<form>
	<label>Field</label><input type="text" /><br />
	<label>Field</label><input type="text" /><br />
	<label>Field</label><textarea></textarea><br />
	<label></label><input type="submit" />
</form>

<h2>Table Example</h2>

<table>
	<thead>
	<tr>
		<td>Name</td>
		<td>Age</td>
		<td>Gender</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Joe</td>
		<td>27</td>
		<td>Male</td>
	</tr>
	<tr>
		<td>Jesse</td>
		<td>26</td>
		<td>Male</td>
	</tr>
	<tr>
		<td>Jenny</td>
		<td>25</td>
		<td>Female</td>
	</tr>
	<tr>
		<td>Justine</td>
		<td>24</td>
		<td>Female</td>
	</tr>
	</tbody>
</table>


<h3>References</h3>
<p>
This was downloaded at <a href="http://jream.com/lab">JREAM Lab</a> and uses <a href="http://jquery.com">jQuery</a> and <a href="http://jqueryui.com">jQuery UI</a>
</p>

</div>
<!-- end:Content -->

<?php include 'footer.php'; ?>

</div>
<!-- end:Wrap -->
</body>
</html>