// @reference ~/content/js/_libs/jquery.flexslider/jquery.flexslider-2.2.0.js

$(function() {

	$('.home-slider').flexslider({
		animation: 'slide',
		multipleKeyboard: false,
		directionNav: false,
		start: function (slider) {
			$(slider).css({
				'visibility': 'visible',
				'opacity': 1
			});
		}
	});

});