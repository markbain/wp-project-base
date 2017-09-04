/**
 *	Front-page-only functions
 *
 */
jQuery(document).ready(function($) { 
	
	/* Add your functions here */


	/**
	 *	Flexslider
	 *
	 */

	function initFlex() {

		/**
		 *	Set a delay to allow the dynamic content to load
		 *
		 */

		setTimeout(function () {
	        startFlex();
	    }, 1500);


		function startFlex() {

			/**
			 *	https://github.com/woothemes/FlexSlider/wiki/FlexSlider-Properties
			 *
			 */			

		    $('#twitter-feed-slider').flexslider({
				animationLoop: true,
				slideshow: true,		 	
				animation: "slide",
			 	directionNav: false,
			 	smoothHeight: true,
		 	});

	 	    $('#testimonials-slider').flexslider({
	 			animationLoop: true,
	 			slideshow: true,		 	
	 			animation: "slide",
	 		 	directionNav: false,
	 		 	smoothHeight: true,
	 	 	});

		}

	 }

	initFlex();

});