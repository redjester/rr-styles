// global vars
var $window = $(window),
	$html = $('html'),
	$body = $('body'),
	isMobile = navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad|android|blackberry|opera mini|iemobile|kindle|silk|mobile)/);

// add class to <html> base on whether device is detected as mobile or not
if (isMobile) {
	document.documentElement.className += ' mobile';
} else {
	document.documentElement.className += ' no-mobile';
}

// matchMedia helpers
var supportsMatchMedia = function () {
		return (typeof window.matchMedia != 'undefined' || typeof window.msMatchMedia != 'undefined');
	},
	isMaxWidth = function (val) {
		return supportsMatchMedia() && window.matchMedia('(max-width: ' + val + 'px)').matches;
	},
	isMinWidth = function (val) {
		return supportsMatchMedia() && window.matchMedia('(min-width: ' + val + 'px)').matches;
	};

// smoothscrolling
var smoothScroll = function (t,o,d) {
	$(t).on('click tap', function () {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: target.offset().top - o
				}, d);
				return false;
			}
		}
	});
};

$(function () {

	// disable tel & sms links on non-mobile devices
	$('.no-mobile a[href^="tel:"],.no-mobile a[href^="sms:"]').on('click tap', function (e) {
		e.preventDefault();
	});

	// toggle nav
	$('.nav-toggle').on('click tap', function (e) {
		e.preventDefault();
		$('html').toggleClass('nav-visible');
	});
	$('.nav-overlay').on('click tap touchmove', function () {
		$('html').removeClass('nav-visible');
	});

	// toggle search
	$('.search-toggle').on('click tap', function () {
		$('html').toggleClass('search-visible');
        $('.search-visible .search-bar input').focus();
	});

	// don't search if input is empty
	$('.search-bar button').on('click tap', function (e) {
		var $input = $(this).parent().find('input'),
			inputVal = $input.val().replace(/ /g,''),
			inputLength = inputVal.length;
		if ((inputLength === 0) || (inputVal === '')) {
			$input.val('');
			e.preventDefault();
			return false;
		}
	});

	// navigation dropdown menu functionality
	$('.mobile [data-toggle]').each(function () {
		$(this).attr('data-toggle', 'click');
	});

	$('.nav-link[data-toggle="hover"]').parent().hover(
		function () {
			$(this).addClass('active');
		},
		function () {
			$(this).removeClass('active');
		}
	);

	$('.nav-link[data-toggle="click"]').on('click tap', function (e) {
		if (!$(this).parent().hasClass('active')) {
			e.preventDefault();
			$(this).parent().toggleClass('active');
		}
	});

	// smoothscrolling
	smoothScroll('a[href*=#]:not([href=#])',0,500);

});