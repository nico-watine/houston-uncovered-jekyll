<?php 
	include($_SERVER['DOCUMENT_ROOT'].'/php/autoVer.php');
?>
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>The City - Houston Uncovered</title>
	<meta name="description" content="Your daily dose of the city, serving up photos of all that is Houston">
	<link type="text/plain" rel="author" href="/humans.txt">
	
	<link rel="stylesheet" href="<?php autoVer('/css/style.css'); ?>"/>

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<![endif]-->

</head>

<body>

<!-- <div class="height-wrapper"> -->

<header class="smaller">
	<div class="row">
		<div class="logo-wrapper">
			<a href="/">
			<div id="sticky-logo">
				<img src="/img/logo/light/logo@2x.png" alt="Houston Uncovered Logo">
			</div>
			<img id="default-logo" src="/img/logo/dark/logo@2x.png" alt="Houston Uncovered Logo">
			</a>
		</div>
		<nav>
			<ul>
				<li><a href="/">home</a></li>
				<li id="last"><a href="#" class="active">the city</a></li>
			</ul>
		</nav>
	</div>
</header>

<div class="height-wrapper">

<main class="category-index">
	<div class="outer-container">
		<div class="row">
			<h1 class="title page-title">The City</h1>
		</div>
		
		<div class="row pad-h">
			<section class="area-widget dark-bg" id="east-end">
				<div class="row">
					<h2 class="title">
						<a href="/the-city/east-end/" class="inverse">East End</a>
					</h2>
				</div>
				<div class="row">
					<div class="img-container">
						<a href="/the-city/east-end/">
							<img src="/img/the-city/east-end/map.jpg" alt="East-End Area Map">
						</a>
					</div>
				</div>
			</section>

			<!-- downtown section under development -->
			<section class="area-widget dark-bg" style="display: none; visibility: hidden;">
				<div class="row">
					<h2 class="title">
						<a href="downtown/" class="inverse">Downtown</a>
					</h2>
				</div>
				<div class="row">
					<div class="img-container">
						<a href="/the-city/downtown/">
							<img src="/img/the-city/downtown/map.jpg" alt="Downtown Area Map">
						</a>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>

<footer>
	<div class="outer-container">
		<div class="row">
			<p id="copy">&copy; <a href="http://nicowatine.me" class="light-link" target="_blank">Nico Watine</a></p>
		</div>
	</div>
</footer>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php autoVer('/js/scripts-min.js'); ?>"></script>


</body>
</html>
