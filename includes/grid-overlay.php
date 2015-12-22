<script>
	$(function() {
		$('<a class="btn btn-primary btn-sm toggle-grid" href="#">Show Grid</a>').insertAfter('.site-header .utility-bar ul');
		$('.site-header .utility-bar ul').css({
			'display': 'inline-block'
		});
		$('.toggle-grid').css({
			'margin': '-.25em 0 -.25em 1em',
			'padding': '.25em .75em',
			'min-width': 0
		});
		$('body').append('<div class="grid-overlay" style="display:none"><div class="row" /></div>');
		for (var i = 0; i < 13; i++) {
			$('.grid-overlay .row').append('<div class="col sm-1"><div /></div>');
		}
		$('.grid-overlay').css({
			'position': 'fixed',
			'top': 0,
			'left': 0,
			'z-index': 99999,
			'width': '100%'
		});
		$('.grid-overlay .col').css('border-right','1px solid #00eaff');
		$('.grid-overlay .col:first-child').css('border-left','1px solid #00eaff');
		$('.grid-overlay .col > div').css({
			'background-color': 'rgba(255,0,0,.1)',
			'height': $(window).height(),
			'border': 'solid #00eaff',
			'border-width': '0 1px'
		});
		$('.toggle-grid').on('click tap', function(e) {
			e.preventDefault();
			$('.grid-overlay').fadeIn('fast');
		});
		$('html,body').on('click tap', function(e) {
			if (($(e.target).parents().index($('.site-header .utility')) == -1) && ($(e.target).index($('.toggle-grid')))) {
				$('.grid-overlay').fadeOut('fast');
			}
		});

	});
</script>
