/*
=====================================================

Remove No-JS

=====================================================
*/	

document.documentElement.className = 
document.documentElement.className.replace("no-js","js");

jQuery( document ).ready( function( $ ) {



	/*
	=====================================================

	Back to top scrolling

	=====================================================
	*/		


/*
	// scroll body to 0px on click
	$('#back-to-top a').click(function () {
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
*/

	/*
	=====================================================

	Responsive Nav

	=====================================================
	*/	


/*

	 var navigation2 = responsiveNav(".hidden-search", {
		 customToggle: "search-toggle",
		 navClass: "hidden-search", // String: Default CSS class. If changed, you need to edit the CSS too!
		 navActiveClass: "js-search-active", //
	 });
	 */
	 
	/*
	var navigation1 = responsiveNav(".main-navigation", {
		customToggle: "nav-toggle",                 // Selector: Specify the ID of a custom toggle
		 // Swapping no-js to js with script instead
		 // openPos: "static",
	});
	*/


/*
	=====================================================

	Local Scroll

	=====================================================
	*/	

/*
 		// Local Scroll //
		$('.hero-cta').localScroll({
			duration: 1000
		});
*/

/*
	=====================================================

	FitVids

	=====================================================
	*/	

	// Target your .container, .wrapper, .post, etc.
	$(".section").fitVids();

/*
	=====================================================

	Match Height

	=====================================================
*/

	$(window).on('resize',function() {
	    if ( $(window).width() > 479) {	    
		    $('.media-object').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		    $('media-object-group-1 .media-object').matchHeight({
		    	byRow: true,
		    	// target: $('.media-object header')
			});
		}
	});
	
	$(window).trigger('resize');


	/*
	=====================================================
			
			Wrap all links in <span> for styling
		
	=====================================================
	*/	

		// $( "a" ).wrapInner( "<span></span>" );



	/*
	===============================================
			
			Navicons config
		
	===============================================
	*/	

	/* (function() {
		// initialize all
		
		[].slice.call( document.querySelectorAll( '.si-icons-default > .si-icon' ) ).forEach( function( el ) {
			var svgicon = new svgIcon( el, svgIconConfig );
		} );

		new svgIcon( document.querySelector( '.si-icons-easing .si-icon-hamburger-cross' ), svgIconConfig, { easing : mina.elastic, speed: 600 } );

		// new svgIcon( document.querySelector( '.si-icons-hover si-icon-nav-right-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
		// new svgIcon( document.querySelector( '.si-icons-hover .si-icon-nav-up-arrow' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 32, h : 32 } } );
		
	})(); */


	/*
	=====================================================
			
			Masonry.js
		
	=====================================================
	*/	
	/*


		// initialize Masonry

		$container = $('.masonrycontainer').masonry({
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer',
			itemSelector: ".media-object"
		
		});
		
		// layout Masonry again after all images have loaded
		
		$container.imagesLoaded( function() {
		$container.masonry();
		});
	*/

	/*
	=====================================================
			
			mmenu
		
	=====================================================
	*/	

	// Main Menu

	$("#offcanvas-main-nav").mmenu({
	   	// options
	   	"extensions": [ 
		   	"effect-menu-slide",
		   	"effect-panels-slide-0",
		   	"pagedim-black"
	   	],
	   	"navbar": {
	   		"title": "Menu"
	   	},
	   	"offCanvas": {
	   	   "pageSelector": "#site-wrapper",
	   	   "zposition": "front",
	   	   "position": "right",
	   	   "moveBackground": false
	   	}		  

	});

	/*
	=====================================================
			
			Opacity on scroll
			
			https://codepen.io/michaeldoyle/pen/Bhsif/
		
	=====================================================
	*/	
/* 
	var header = $('.cover');
	var range = 200;

	$(window).on('scroll', function () {
	  
	    var scrollTop = $(this).scrollTop();
	    var offset = header.offset().top;
	    var height = header.outerHeight();
	    offset = offset + height / 2;
	    var calc = 1 - (scrollTop - offset + range) / range;
	  
	    header.css({ 'opacity': calc });
	  
	    if ( calc > '1' ) {
	      header.css({ 'opacity': 1 });
	    } else if ( calc < '0º' ) {
	      header.css({ 'opacity': 0 });
	    }
	  
	}); */

	/*
	=====================================================
			
			Headroom
		
	=====================================================
	*/
/*	// Options
	var options = {
	  offset: '#content',
      offsetSide: 'top',
		classes: {
			clone:   'banner--clone',
			stick:   'banner--stick',
			unstick: 'banner--unstick'
		}
	}	
	// Create a new instance of Headhesive
	var header = new Headhesive('.site-header', options);
*/
	/*
	=====================================================
			
			Parallax
		
	=====================================================
	*/
/*
	$('.mailchimp-form').parallax({
		imageSrc: (assets_dir.stylesheet_directory_uri) + '/assets/images/stones.jpg',
		speed: 0.13
	});
*/
}); 

