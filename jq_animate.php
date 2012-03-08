<?php
/*
 *      jquery_hide.php
 *      
 *      Copyright 2012 Budida <budida@budida-Inspiron-1525>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 *      
 *      
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>Jquery Animate</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#btn").click(function(){
				$("div").animate({height: 300 },"slow");
				$("div").animate({width: 300},"slow");
				$("div").animate({height: 100},"slow");
				$("div").animate({width: 100},"slow");
				});
			
	
			 $("#btn").mouseover(function(){
				$("div").animate({left:"100px"},"slow");
				$("div").animate({fontSize:"3em"},"slow");
			  });
			});
	</script>
</head>

<body>
	
	<button id="btn">Start Animation</button>
	<br /><br />
	<div style="background-color: yellow; height: 100px; width: 150px; position: relative">
		This Is The One
	</div>
</body>

</html>
