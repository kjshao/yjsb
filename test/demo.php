<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>make_dropdown:demo</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<style type="text/css">
	
	/* common page styles */
	body
	{	background: #6595A3;
		padding: 0 20px}

	.clear
	{	clear: both;
		overflow: hidden;
		height: 0}

	#all
	{	width: 80%;
		min-width: 650px;
		margin: 40px auto 0 auto;
		background: #FCFFED;
		padding: 20px 35px}

	h1
	{	font: 26px tahoma, arial;
		color: #324143}

	p
	{	font: 12px tahoma, arial;
		color: #171F26;
		margin-bottom: 25px}

	a
	{	color: #324143}
	</style>
	
</head>
<body>
<div id="all">

<h1>make_dropdown Demo</h1>

<p>Hover or click on the menubar below. Try it using both your computer and your phone or tablet!</p>

<p>View the source of this page for a complete example of how to use make_dropdown.</p>

<p>
  <a href="https://github.com/suan/make_dropdown">(Back to) project page</a><br/>
  <a href="http://suanaikyeo.com/blog/make_dropdown/">(Back to) blog post</a>
</p>

<style type="text/css">
/* menu styles */
#menubar
{	margin: 0;
	padding: 0}

	#menubar li
	{	float: left;
		list-style: none;
		font: 12px Tahoma, Arial}

	#menubar li a
	{	display: block;
		background: #324143;
		padding: 5px 12px;
		text-decoration: none;
		border-right: 1px solid white;
		width: 70px;
		color: #EAFFED;
		white-space: nowrap}

	#menubar li a:hover
	{	background: #24313C}
		
		#menubar li ul
		{	margin: 0;
			padding: 0;
			position: absolute;
			visibility: hidden;
			border-top: 1px solid white}
		
			#menubar li ul li
			{	float: none;
				display: inline}
			
			#menubar li ul li a
			{	width: auto;
				background: #A9C251;
				color: #24313C}
			
			#menubar li ul li a:hover
			{	background: #8EA344}
</style>

<!--
Time, time, take us back before the line was drawn
Before the sky turned black. -->

<script src="../../jquery/1.12.4/jquery.min.js"></script>
<script src="make_dropdown.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){	$('#menubar > li').make_dropdown(); });
</script>

<ul id="menubar">
	<li><a href="#">JavaScript</a>
		<ul>
			<li><a href="#">Drop Down Menu</a></li>
			<li><a href="#">jQuery Plugin</a></li>
			<li><a href="#">Ajax Navigation</a></li>
		</ul>
	</li>
	<li><a href="#">Effect</a>
		<ul>
			<li><a href="#">Slide Effect</a></li>
			<li><a href="#">Fade Effect</a></li>
			<li><a href="#">Opacity Mode</a></li>
			<li><a href="#">Drop Shadow</a></li>
			<li><a href="#">Semitransparent</a></li>
		</ul>
	</li>
	<li><a href="#">Navigation</a></li>
	<li><a href="#">HTML/CSS</a></li>
	<li><a href="#">Help</a></li>
</ul>
<div class="clear"> </div>

<br/>

</div>


</body>
</html>
