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
	});
});

//calc

var calcBody = $('.calc');

var secTypeInput = calcBody.find('select');
var secType = secTypeInput.val();
secTypeInput.change(function(){
	secType = $(this).val();
	calc();
});

var secNumberInput = calcBody.find('input[type="number"]');
var secNumberRange = calcBody.find('input[type="range"]');
var secNumber = secNumberInput.val();
secNumberInput.change(function(){
	secNumber = $(this).val();
	secNumberRange.val(secNumber);
	calc();
});
secNumberRange.change(function(){
	secNumber = $(this).val();
	secNumberInput.val(secNumber);
	calc();
});

var secTimeInput = calcBody.find('input[type="radio"]');
var secTime = calcBody.find('input[type="radio"]:checked').val();
secTimeInput.change(function(){
	secTime = $(this).val();
	calc();
});

var calc = function(){	
	var res = (secType * secNumber * secTime) + ' руб/мес.';
	var output = calcBody.find('output');
	output.val(res);
};	

calc();

//header-callback
var headerCallbackOpen = $('.header-form__open--callback');
var headerCallback = $('.header-form--callback')
var headerCallbackClose = headerCallback.find('.header-form__close');

headerCallbackOpen.click(function(){
	headerCallback.addClass('active');
});

headerCallbackClose.click(function(){
	headerCallback.removeClass('active');
});

//header-form
var headerFormOpen = $('.header-form__open--form');
var headerForm = $('.header-form--form')
var headerFormClose = headerForm.find('.header-form__close');

headerFormOpen.click(function(){
	headerForm.addClass('active');
});

headerFormClose.click(function(){
	headerForm.removeClass('active');
});

