{% include components/head.php %}

<body id="index">


<header class="shrinking">
	<div class="row">
		<div class="logo-wrapper">
			<a href="/">
			<div id="sticky-logo">
				<img src="{{ site.cdn_url }}/img/assets/logo/light/logo@2x.png" alt="Houston Uncovered Logo">
			</div>
			<img id="default-logo" src="{{ site.cdn_url }}/img/assets/logo/dark/logo@2x.png" alt="Houston Uncovered Logo">
			</a>
		</div>
		<nav>
			<ul id="main-nav">
				<li><a href="/the-city/washington-ave/">washington ave</a></li>
				<li><a href="/the-city/midtown/" id="last">midtown</a></li>
			</ul>
		</nav>
	</div>
</header>

<section class="hero">
	<div class="hero-text light">
		<h1>Your Daily Dose of <span class="inline-block">the City</span></h1>
		<a href="/the-city/washington-ave/blue-trees-on-waugh" id="call-to-action" class="button opaque-button">Today's Post</a>
	</div>
	<img src="{{ site.cdn_url }}/img/sets/ominous-downtown/hero/ominous-downtown.jpg" alt="Blue Trees on Waugh Hero Image">
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
				<img srcset="{{ site.cdn_url }}/img/sets/blue-trees/index/gallery-link/blue-trees.jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/index/gallery-link/blue-trees@2x.jpg 2x" alt="Blue Trees on Waugh Dr">	
			</figure>
			<figure class="gallery-link">
				<div class="label">
					<a href="/the-city/midtown/reclaimed-gas-station">
						<h3>Reclaimed Gas Station</h3>
					</a>
				</div>
				<img srcset="{{ site.cdn_url }}/img/sets/reclaimed-gas-station/index/gallery-link/reclaimed-gas-station.jpg 1x, {{ site.cdn_url }}/img/sets/reclaimed-gas-station/index/gallery-link/reclaimed-gas-station@2x.jpg 2x" alt="Blue Trees on Waugh Dr">	
			</figure>	
		</div>
	</div>
</main>



{% include components/scripts/scripts.php %}
{% include components/scripts/google-tracking.php %}

</body>
</html>