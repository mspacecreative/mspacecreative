(function($) {
	function toggleHeight() {
		$('.toggle-button').height($('header').outerHeight());
	}

	$(document).ready(function() {

		$(".fancybox").fancybox();
		
		toggleHeight();

		$('.contact-toggle').click(function() {
			$('.contact-toggle, .wrapper, .white-overlay').toggleClass('push');
		});

		$('#nav-icon').click(function() {
				$('.main-nav').fadeToggle('fast');
		});

		$('#nav-icon').click(function() {
				$('.main-nav').toggleClass('display');
				$('.logo').toggleClass('hide');
		});

		$('li.menu-item-has-children').click(function() {
				$(this).children('ul').slideToggle('fast');
		});

		$('#nav-icon').click(function(){
				$(this).toggleClass('open');
		});

		$('li.menu-item-has-children').click(function() {
				$(this).toggleClass('rotate');
		});

		$('nav a[href="#"]').click(function(e) {
			e.preventDefault();
		});

		$('.taphover').bind('touchstart', function() {});

		$('.nav-trigger').click(function() {
			$('.white-overlay').toggleClass('push');
		});

		function resizeBanner() {
			$('.site-wrap').height($(window).outerHeight());
		}

		$(document).ready(function () {
			resizeBanner();
		});

		$(window).resize(function () {
			resizeBanner();
		});

		/*$('.contact-toggle').click(function() {
			$(this).toggleClass('down');
			$('.wrapper').toggleClass('down');
		});*/

	});

	$(window).resize(function () {
		toggleHeight();
	});
})(jQuery);
