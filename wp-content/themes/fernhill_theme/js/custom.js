
jQuery(document).ready(function () {
	jQuery('body').on('click', '.background-transition-container', function () {
		if (window.innerWidth < 768) {
			jQuery(this).toggleClass('active');
		}
	});
});