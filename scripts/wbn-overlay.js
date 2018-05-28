jQuery(document).ready(function ($) {

	$( '<span class="downbutton" style=" "></span>' ).insertBefore( "#wbn-ovrly-nav .sub-menu" );

	$(".wbn-ovrly-hamburger").click(function () {
		$('#wbn-ovrly-menu').toggleClass('show');
		$('.hamburger').toggleClass('is-active');
	});

	$('.downbutton').click(function() {

		// Accordion function below
		if ($(this).next().hasClass('menu-open')) {
			// Close the open submenu
			$(this).next().slideToggle('fast');
			$('.menu-open').removeClass('menu-open');
			$(this).toggleClass('rotaded');
		} else {
			// Remove class and close the already open submenu
			$('.menu-open').slideToggle('fast');
			$('.menu-open').parent().children('span').toggleClass('rotaded');
			$('.menu-open').removeClass('menu-open');

			// Add class and open the new submenu
			$(this).next().addClass('menu-open');
			$(this).next().slideToggle('fast');
			$(this).toggleClass('rotaded');
		}
	});
})