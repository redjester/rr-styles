// @reference ~/content/js/_libs/jquery.cookie

$(function () {

	if ($.cookie('cookie_user') == 'disabled') { // Disabled Cookie
		// Should we pop message/set cookie if user opts out "experience will be poor"?
		$('#siteCookieStatus').text("not accepting LC cookies");
		$('#btnModifyOpt').text("Opt-In").on('click tap', function() {
	    	$.cookie('cookie_user', 'enabled', { expires: 7, path: '/cookies-policy.php' }); // Setting cookie
	    	location.reload(); 
		});
	} else { // Enabled Cookie
    	$.cookie('cookie_user', 'enabled', { expires: 7, path: '/cookies-policy.php' }); // Setting cookie
	    $('#siteCookieStatus').text("accepting LC cookies");
		$('#btnModifyOpt').text("Opt-Out").on('click tap', function() {
	    	$.cookie('cookie_user', 'disabled', { expires: 7, path: '/cookies-policy.php' }); // Setting cookie
	    	location.reload(); 
		});

		// Setting cookie to remember notification was read
		if ($.cookie('cookie_notification') != '1') {
			setTimeout( function () {
				$('#cookie-notification').slideDown(300);
			}, 150);
			$("#cookie-notification-close").on('click tap', function () {
				$('#cookie-notification').slideUp(300);
		    	$.cookie('cookie_notification', '1', { expires: 7, path: '/cookies-policy.php' }); // Setting cookie
			});
		}
		// Run any scripts here that should run in "enabled" mode
	}

});