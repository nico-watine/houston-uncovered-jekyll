{% include components/head.php %}

<body id="reclaimed-gas-station">

{% include blocks/header/shrinking-header-white.php %}

<section class="hero">
	<div class="hero-text light">
		<h1>Reclaimed Gas Station</h1>
		<a href="/the-city/midtown/" class="category-link">Midtown</a>
	</div>
	<img src="{{ site.cdn_url }}/img/sets/reclaimed-gas-station/hero/reclaimed-gas-station.jpg" alt="Reclaimed Gas Station in Midtown">
</section>

<main class="gallery">
	<img id="img-1" class="full-width" srcset="{{ site.cdn_url }}/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(2).jpg 1x, {{ site.cdn_url }}/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(2)@2x.jpg 2x" alt="Reclaimed Gas Station in Midtown">
	<img id="img-2" class="full-width" srcset="{{ site.cdn_url }}/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(3).jpg 1x, {{ site.cdn_url }}/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(3)@2x.jpg 2x" alt="Reclaimed Gas Station in Midtown">
	<img id="img-3" class="full-width" srcset="{{ site.cdn_url }}/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(1).jpg 1x, {{ site.cdn_url }}/img/sets/reclaimed-gas-station/gallery/reclaimed-gas-station(1)@2x.jpg 2x" alt="Reclaimed Gas Station in Midtown">
</main>






<script src="{{ site.cdn_url }}<?php autoVer('/js/scripts-min.js'); ?>"></script>
</body>
</html>