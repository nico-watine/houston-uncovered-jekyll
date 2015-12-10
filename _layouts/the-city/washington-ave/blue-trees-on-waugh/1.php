{% include components/head.php %}

<body id="blue-trees">

{% include blocks/header/shrinking-header-white.php %}

<section class="hero">
	<div class="hero-text light">
		<h1>The Blue Trees on <span class="inline-block">Waugh Drive</span></h1>
		<a href="/the-city/washington-ave/" class="category-link">Washington Ave</a>
	</div>
	<img src="{{ site.cdn_url }}/img/sets/blue-trees/hero/blue-trees.jpg" alt="Blue Trees on Waugh Hero Image">
</section>

<main class="gallery">
	<div class="outer-container">
		<img id="img-1" class="full-width" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(1).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(1)@2x.jpg 2x" alt="Blue Trees Panorama Shot #1">
		<img id="img-2" class="full-width" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(2).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(2)@2x.jpg 2x" alt="Blue Trees Panorama Shot #2">
		<div class="row">
			<img id="img-3" class="half-width left" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(4).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(4)@2x.jpg 2x" alt="View of Downtown Houston Through the Blue Trees">
			<img id="img-4" class="half-width right" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(5).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(5)@2x.jpg 2x" alt="View From Inside the Circle of Blue Trees">
		</div>
		<img id="img-5" class="full-width" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(3).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(3)@2x.jpg 2x" alt="Blue Trees Panorama Shot #3">
	</div>
</main>

{% include components/scripts/scripts.php %}
{% include components/scripts/google-tracking.php %}

</body>
</html>