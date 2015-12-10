<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<!--<link rel="preconnect" href="http://cdn.houstonuncovered.com/houstonuncovered">-->
	<title>Your Daily Dose Of The City | Houston Uncovered</title>
	<meta name="description" content="Your daily dose of the city, serving up photos of all that is Houston" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>" />
	<script src="<?php autoVer('/js/picturefill-min.js'); ?>" async></script>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->
</head>

<body id="index">


<header class="shrinking">
	<div class="row">
		<div class="logo-wrapper">
			<a href="/">
			<div id="sticky-logo">
				<img src="/img/assets/logo/light/logo@2x.png" alt="Houston Uncovered Logo">
			</div>
			<img id="default-logo" src="/img/assets/logo/dark/logo@2x.png" alt="Houston Uncovered Logo">
			</a>
		</div>
		<nav>
			<ul id="main-nav">
	<li><a href="/">Home</a></li>
	<li><a href="/the-city/washington-ave/">Washington Ave</a></li>
	<li><a href="/the-city/midtown/">Midtown</a></li>
	<li><a href="/the-city/east-end/" id="last">East End</a></li>
</ul>
		</nav>
	</div>
</header>

<section class="hero">
	<div class="hero-text light">
		<h1>Your Daily Dose of <span class="inline-block">the City</span></h1>
		<a href="/the-city/washington-ave/blue-trees-on-waugh" id="call-to-action" class="button opaque-button">Today's Post</a>
	</div>
	<img src="/img/sets/ominous-downtown/hero/ominous-downtown.jpg" alt="Blue Trees on Waugh Hero Image">
</section>

<main>
	<div class="outer-container">
		<div class="row">
			<figure class="gallery-link">
				<div class="label">
					<a href="/the-city/washington-ave/blue-trees-on-waugh">
						<h3>Blue Trees</h3>
					</a>
				</div>
				<img srcset="/img/sets/blue-trees/index/gallery-link/blue-trees.jpg 1x, /img/sets/blue-trees/index/gallery-link/blue-trees@2x.jpg 2x" alt="Blue Trees on Waugh Dr">	
			</figure>
			<figure class="gallery-link">
				<div class="label">
					<a href="/the-city/midtown/reclaimed-gas-station">
						<h3>Reclaimed Gas Station</h3>
					</a>
				</div>
				<img srcset="/img/sets/reclaimed-gas-station/index/gallery-link/reclaimed-gas-station.jpg 1x, /img/sets/reclaimed-gas-station/index/gallery-link/reclaimed-gas-station@2x.jpg 2x" alt="Blue Trees on Waugh Dr">	
			</figure>	
		</div>
	</div>
</main>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/vendor/jquery/1-11-3/jquery-min.js"><\/script>')</script>
<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>
<!--<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-55459011-5','auto');ga('send','pageview');
</script>-->

</body>
</html>