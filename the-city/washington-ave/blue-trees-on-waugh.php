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
<body id="blue-trees">

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
				<li><a href="/the-city/washington-ave/">washington ave</a></li>
				<li><a href="/the-city/midtown/" id="last">midtown</a></li>
			</ul>
		</nav>
	</div>
</header>

<section class="hero">
	<div class="hero-text light">
		<h1>The Blue Trees on <span class="inline-block">Waugh Drive</span></h1>
		<a href="/the-city/washington-ave/" class="category-link">Washington Ave</a>
	</div>
	<img src="/img/sets/blue-trees/hero/blue-trees.jpg" alt="Blue Trees on Waugh Hero Image">
</section>

<main class="gallery">
	<img id="img-1" class="full-width" srcset="/img/sets/blue-trees/gallery/blue-trees(1).jpg 1x, /img/sets/blue-trees/gallery/blue-trees(1)@2x.jpg 2x" alt="Blue Trees Panorama Shot #1">
	<img id="img-2" class="full-width" srcset="/img/sets/blue-trees/gallery/blue-trees(2).jpg 1x, /img/sets/blue-trees/gallery/blue-trees(2)@2x.jpg 2x" alt="Blue Trees Panorama Shot #2">
	<div class="row">
		<img id="img-3" class="half-width left" srcset="/img/sets/blue-trees/gallery/blue-trees(4).jpg 1x, /img/sets/blue-trees/gallery/blue-trees(4)@2x.jpg 2x" alt="View of Downtown Houston Through the Blue Trees">
		<img id="img-4" class="half-width right" srcset="/img/sets/blue-trees/gallery/blue-trees(5).jpg 1x, /img/sets/blue-trees/gallery/blue-trees(5)@2x.jpg 2x" alt="View From Inside the Circle of Blue Trees">
	</div>
	<img id="img-5" class="full-width" srcset="/img/sets/blue-trees/gallery/blue-trees(3).jpg 1x, /img/sets/blue-trees/gallery/blue-trees(3)@2x.jpg 2x" alt="Blue Trees Panorama Shot #3">
</main>






<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>
</body>
</html>