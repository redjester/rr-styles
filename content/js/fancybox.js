// @reference ~/content/js/_libs/jquery.fancybox

// youtube url parser
function youtubeParser (url) {
	var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
	var match = url.match(regExp);
	if (match && match[2].length == 11) {
		return match[2];
	} else {
		return url;
	}
}

// fancybox video
function setupFancyboxVideo() {
	if (isMobile && window.isMaxWidth(767)) {
		$('.fancybox-video').on('click tap', function () {
			window.open($(this).attr('href'));
			return false;
		});
	} else {
		$('.fancybox-video').attr('href', function () {
				var href = $(this).attr('href'),
					params = '?wmode=transparent&rel=0&autoplay=1';
				return 'http://www.youtube.com/embed/' + youtubeParser(href) + params;
			}).fancybox({
			padding: 0,
			type: 'iframe',
			aspectRatio: true
		});
	}
}

$(function () {

	// embed fancybox videos
	setupFancyboxVideo();

});