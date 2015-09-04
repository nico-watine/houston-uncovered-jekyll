<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Your Daily Dose Of The City - Houston Uncovered</title>
	<meta name="description" content="Your daily dose of the city, serving up photos of all that is Houston">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>


	<script src="<?php autoVer('/js/picturefill-min.js'); ?>" async></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>
<body id="reclaimed-gas-station">

<header class="shrinking">
	<div class="row">
		<div class="logo-wrapper">
			<a href="/">
			<div id="sticky-logo">
				<img src="/img/assets/logo/light/logo@2x.png" alt="Houston Uncovered Logo">
			</div>
			<img id="default-logo" src="/img/assets/logo/light/logo@2x.png" alt="Houston Uncovered Logo">
			</a>
		</div>
		<nav>
			<ul id="main-nav">
			<li><a href="/">home</a></li>
				<li><a href="#">washington ave</a></li>
				<li ><a href="#" id="last">midtown</a></li>
			</ul>
		</nav>
	</div>
</header>

<section class="hero">
	<div class="hero-text light">
		<h1>Reclaimed Gas Station</h1>
		<a href="#" class="category-link">Midtown</a>
	</div>
	<img src="/img/sets/reclaimed-gas-station/hero/reclaimed-gas-station.jpg" alt="Reclaimed Gas Station in Midtown">
</section>

<main class="gallery">
	<img id="img-1" class="full-width" srcset="/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(2).jpg 1x, /img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(2)@2x.jpg 2x" alt="Reclaimed Gas Station in Midtown">
	<img id="img-2" class="full-width" srcset="/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(3).jpg 1x, /img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(3)@2x.jpg 2x" alt="Reclaimed Gas Station in Midtown">
	<img id="img-3" class="full-width" srcset="/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(1).jpg 1x, /img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(1)@2x.jpg 2x" alt="Reclaimed Gas Station in Midtown">
</main>






<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>
</body>
</html>