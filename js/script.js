$('.clients__container').owlCarousel({
	items: 5,
	loop: true,
	autoplay: true,
	autoplayTimeout: 10000,
	responsive: {
		0: {
			items: 3
		},
		768: {
			items: 4
		},
		1100: {
			items: 5
		}
	}
});

$('.main-slider').owlCarousel({
	items: 1,
	loop: true,
	autoplay: true,
	animateOut: 'fadeOut',
	autoplayTimeout: 8000,
	nav: true,
});