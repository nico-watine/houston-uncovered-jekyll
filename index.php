<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Your Daily Dose Of The City - H | U</title>
	<meta name="description" content="Your daily dose of the city, serving up photos of all that is Houston">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>
<body>


<div class="height-wrapper">

<header class="shrinking">
	<div class="row">
		<div class="logo-wrapper">
			<a href="#">
			<div id="sticky-logo">
				<img src="/img/logo/light/logo@2x.png" alt="Houston Uncovered Logo">
			</div>
			<img id="default-logo" src="/img/logo/dark/logo@2x.png" alt="Houston Uncovered Logo">
			</a>
		</div>
		<nav>
			<ul>
				<li><a href="#" class="active">home</a></li>
				<li id="last"><a href="/the-city/">the city</a></li>
			</ul>
		</nav>
	</div>
</header>

<main id="index">

<section id="hero">
	<div class="outer-container">
		<div class="row">
			<h1>your daily dose of the city</h1>
			<div class="c2a">
				<a href="/the-city/east-end/abandoned-east-end-warehouse.html" class="btn" id="daily-post">today's post</a>
			</div>
		</div>
	</div>
</section>

<section class="triple-feature">
	<div class="outer-container">
		<div class="pad-h">
			<a class="image-link" id="blue-trees" href="/img/posts/blue-trees-waugh/index/feature.jpg">
				<div class="img-container">
					<img src="/img/posts/blue-trees-waugh/index/thumb.jpg" alt="Blue Trees on Waugh Dr">
				</div>
			</a>
			<a class="image-link" href="/img/posts/darkhorse-tavern/index/feature.jpg">
				<div class="img-container" id="darkhorse">
					<img src="/img/posts/darkhorse-tavern/index/thumb.jpg" alt="Darkhorse Tavern">
				</div>
			</a>
			<a class="image-link" href="/img/posts/reclaimed-gas-station/index/feature.jpg">
				<div class="img-container" id="gas-station">
					<img src="/img/posts/reclaimed-gas-station/index/thumb.jpg" alt="Reclaimed Gas Station">
				</div>
			</a>
		</div>
	</div>
</section>

<section class="double-feature">
	<div class="outer-container">
		<div class="row">
			<div class="img-container" id="clutch-city-c-store">
				<img src="/img/posts/clutch-city-c-store/clutch-city-c-store@2x.jpg" alt="">
			</div>
			<div class="img-container" id="downtown-sunset">
				<img src="/img/posts/downtown-sunset/downtown-sunset@2x.jpg" alt="">
			</div>
		</div>
	</div>
</section>

</main>


<footer>
	<div class="outer-container">
		<div class="row">
			<p id="copy">&copy; <a href="http://nicowatine.me" class="light-link" target="_blank">Nico Watine</a></p>
		</div>
	</div>
</footer>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>


</body>
</html>

