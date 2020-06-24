jQuery(function ($) {
	$('.header-button-bid').click(function () {
		$('.modal-bg').css('display', 'block');
		$('.modal-bid').css('display', 'block');
	});
	$('.modal-bg').click(function() {
		$('.modal-bg').css('display', 'none');
		$('.modal-bid').css('display', 'none');
	});
	$('.modal-name button').click(function() {
		$('.modal-bg').css('display', 'none');
		$('.modal-bid').css('display', 'none');
	});
});