{% include components/head.php %}

<body id="east-end-abandoned-warehouse">

{% include blocks/shrinking-header-white.php %}

<section class="hero">
	<div class="hero-text light">
		<h1>Abandoned Warehouse</h1>
		<a href="/the-city/east-end/" class="category-link">East End</a>
	</div>
	<img src="{{ site.cdn_url }}/img/sets/abandoned-warehouse/hero/abandoned-warehouse.jpg" alt="Abandoned Warehouse in the East End">
</section>

<main class="gallery">
	<img id="img-1" class="full-width" srcset="{{ site.cdn_url }}/img/sets/abandoned-warehouse/gallery/abandoned-warehouse(1).jpg 1x, {{ site.cdn_url }}/img/sets/abandoned-warehouse/gallery/abandoned-warehouse(1)@2x.jpg 2x" alt="Abandoned East End Warehouse">
	<img id="img-2" class="full-width" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(2).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(2)@2x.jpg 2x" alt="Blue Trees Panorama Shot #2">
	<div class="row">
		<img id="img-3" class="half-width left" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(4).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(4)@2x.jpg 2x" alt="View of Downtown Houston Through the Blue Trees">
		<img id="img-4" class="half-width right" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(5).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(5)@2x.jpg 2x" alt="View From Inside the Circle of Blue Trees">
	</div>
	<img id="img-5" class="full-width" srcset="{{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(3).jpg 1x, {{ site.cdn_url }}/img/sets/blue-trees/gallery/blue-trees(3)@2x.jpg 2x" alt="Blue Trees Panorama Shot #3">
</main>



{% include components/scripts/scripts.php %}
{% include components/scripts/google-tracking.php %}

</body>
</html>