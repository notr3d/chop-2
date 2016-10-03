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
	//animateOut: 'fadeOut',
	autoplayTimeout: 8000,
	nav: true,
});

var siteContent = $('.site-content');
var siteContentMargin = siteContent.offset().top;
var scrollTop;
/*var topPanel = $('.top-panel');
var topPanelHeight = topPanel.outerHeight();*/
var headerNav = $('.header-nav');
var headerNavHeight = headerNav.outerHeight();

$(window).scroll(function(){
	console.log(headerNavHeight);
	scrollTop = $(window).scrollTop();
	if (scrollTop > siteContentMargin - (headerNavHeight / 2)) {		
		//topPanel.addClass('active');
		headerNav.addClass('active');
	} else {
		//topPanel.removeClass('active');
		headerNav.removeClass('active');
	};
});

$(document).ready(function(){
	headerNav.prepend('<div class="header-nav__button"></div>');
	var headerNavButton = $('.header-nav__button');
	headerNavButton.click(function(){
		var headerNavList = $(this).next();
		headerNavList.slideToggle();
	})
});