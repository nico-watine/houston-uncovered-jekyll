// IMPORTS
	// PREPENDS ::
		// /assets/bower_components/classie/classie.js
        

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

// MAGNIFIC POPUP INIT & RETINA
// PREPEND ::
// /assets/bower_components/magnific-popup/dist/jquery.magnific-popup.js
// $(document).ready(function() {
//     $('.image-link').magnificPopup({ 
//       type: 'image',

//       retina: {
//         ratio: 1.5, // Increase this number to enable retina image support.
//         // Image in popup will be scaled down by this number.
//         // Option can also be a function which should return a number (in case you support multiple ratios). For example:
//         // ratio: function() { return window.devicePixelRatio === 1.5 ? 1.5 : 2  }
        

//         replaceSrc: function(item, ratio) {
//           return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
//         } // function that changes image source
//       }

//     });
// });

