<html>
<head>
<meta charset="utf-8">
<title>jQuery Book Browser</title>
<link rel="stylesheet" href="ui-css/custom.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="jquery.js"></script>
<script src="jquery-ui.js"></script>
<script src="jquery.cycle.js"></script>
<script src="script.js"></script>
</head>
<body>
    <div id="slideshow">
	<h3>JQuery Selected Books</h3>
	<ul id="books">
	<li>
	<img src="images/brother.jpg" alt="jQuery 1.4 Reference Guide" />
	<div class="title">jQuery 1.4 Reference Guide</div>
	<div class="author">Karl Swedberg</div>
	<div class="author">Jonathan Chaffer</div>
	</li>
	<li>
	<img src="images/lovejesus.jpg" alt="jQuery Plugin Development" />
	<div class="title">jQuery Plugin Development</div>
	<div class="author">Giulio Bai</div>
	</li>
	<li>
	<img src="images/lovejesus.jpg" alt="jQuery Plugin Development" />
	<div class="title">jQuery Plugin Development</div>
	<div class="author">Giulio Bai</div>
	</li>
	<li>
	<img src="images/lovejesus.jpg" alt="jQuery Plugin Development" />
	<div class="title">jQuery Plugin Development</div>
	<div class="author">Giulio Bai</div>
	</li>
	</ul>
   </div>
    <div id="accordion_div">
        <ul id="accordion_list">
            <li>
                <h2>Products</h2>
                <p>
                    <a href="">Product 1</a><br />
                    <a href="">Product 2</a><br />
                    <a href="">Product 3</a>
                </p>
            </li>
            <li>
                <h2>Para2</h2>
                <p>Here is the second para..</p>
            </li>
            <li>
                <h2>Para3</h2>
                <p>Here is the third para..<br />In addition to these building block 
                    interaction components, jQuery UI includes a
                    handful of robust user interface widgets that appear and function 
                    out of the box like
                    the full-fledged elements we are 
                    accustomed to seeing in desktop applications
                    </p>
            </li>
        </ul>
    </div>
    <div id="datePicker">
    Date:<input type="text" id="_datepicker"/>
    </div>
    <div id="tabs-div">
        <ul>
		<li><a href="ajax/content1.html">Tab 1</a></li>
		<li><a href="ajax/content2.html">Tab 2</a></li>
		<li><a href="ajax/content3-slow.php">Tab 3 (slow)</a></li>
		<li><a href="ajax/content4-broken.php">Tab 4 (broken)</a></li>
	</ul>
    </div>
    <div id="_slider">
        <ul>
		<li><a href="ajax/content1.html">Tab 1</a></li>
		<li><a href="ajax/content2.html">Tab 2</a></li>
		<li><a href="ajax/content3-slow.php">Tab 3</a></li>
		<li><a href="ajax/content4-broken.php">Tab 4</a></li>
	</ul>
    </div>
    
 
</body>
</html>
