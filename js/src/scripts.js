// PREPEND IMPORTS ::
  // JS/SRC/NAV/CLASSIE.JS
  // JS/SRC/MEDIA/MAGNIFIC-POPUP.JS

// HEADER SHRINK
function init() {
    window.addEventListener('scroll', function(e){
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
	        shrinkOn = 200,
            header = document.querySelector("header.shrinking");
        if (distanceY > shrinkOn) {
            classie.add(header,"smaller");
        } else {
            if (classie.has(header,"smaller")) {
                classie.remove(header,"smaller");
            }
        }
    });
}
window.onload = init();




$(document).ready(function() {
$('.image-link').magnificPopup({ 
  type: 'image',

  removalDelay: 300,

  mainClass: 'mfp-fade',

  retina: {
    ratio: 2, // Increase this number to enable retina image support.
    // Image in popup will be scaled down by this number.
    // Option can also be a function which should return a number (in case you support multiple ratios). For example:
    // ratio: function() { return window.devicePixelRatio === 1.5 ? 1.5 : 2  }
    

    replaceSrc: function(item, ratio) {
      return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
    } // function that changes image source
  }

});
});
