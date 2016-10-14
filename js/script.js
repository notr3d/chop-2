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
	//console.log(headerNavHeight);
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
	headerNav.prepend('<div class="header-nav__button">навигация</div>');
	var headerNavButton = $('.header-nav__button');
	headerNavButton.click(function(){
		var headerNavList = $(this).next();
		headerNavList.slideToggle();
	});
});

//calc

var calcBody = $('.calc__body');

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
	showValue(secNumber, 1, false);
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


var hours = 12;
var calc = function(){	
	if (secTime == 0.75) {
		hours = 24;
	} else {
		hours = 12;
	};
	//console.log(hours);
	var res = (secType * secTime * secNumber * hours * 30).toString();
	var resFirst = res.slice(0, -3);
	var resLast = res.slice(-3);
	res = resFirst + ' ' + resLast + ' ' + ' руб/мес'
	var output = calcBody.find('output');
	output.val(res);
};	

calc();

//header-callback
var headerCallbackOpen = $('.header-form__open--callback');
var headerCallback = $('.header-form--callback');
var headerCallbackClose = headerCallback.find('.header-form__close');
var headerCallbackForm = $('.header-form');
var headerCallbackFormBody = $('.header-form__form');

headerCallbackOpen.click(function(){
	headerCallback.addClass('active');
});

headerCallbackClose.click(function(){
	headerCallback.removeClass('active');
});

headerCallbackForm.click(function(){
	headerCallback.removeClass('active');
});

headerCallbackFormBody.click(function(e){
	e.stopPropagation();
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

headerCallbackForm.click(function(){
	headerForm.removeClass('active');
});

headerCallbackFormBody.click(function(e){
	e.stopPropagation();
});

//range

/* We need to change slider appearance oninput and onchange */

function showValue(val,slidernum,vertical) {
  /* setup variables for the elements of our slider */
  var thumb = document.getElementById("sliderthumb" + slidernum);
  var shell = document.getElementById("slidershell" + slidernum);
  var track = document.getElementById("slidertrack" + slidernum);
  var fill = document.getElementById("sliderfill" + slidernum);
  var rangevalue = document.getElementById("slidervalue" + slidernum);
  var slider = document.getElementById("slider" + slidernum);
  
  var pc = val/(slider.max - slider.min); /* the percentage slider value */
  var thumbsize = 23; /* must match the thumb size in your css */
  var bigval = 238; /* widest or tallest value depending on orientation */
  var smallval = 23; /* narrowest or shortest value depending on orientation */
  var tracksize = bigval - thumbsize - 20;
  var fillsize = 7;
  var filloffset = 10;
  var bordersize = 1;
  var loc = vertical ? (1 - pc) * tracksize : pc * tracksize;
  var degrees = 360 * pc;
  var rotation = "rotate(" + degrees + "deg)";
  
  rangevalue.innerHTML = val;
  
  //thumb.style.webkitTransform = rotation;
  //thumb.style.MozTransform = rotation;
  //thumb.style.msTransform = rotation;
  
  //fill.style.opacity = pc + 0.2 > 1 ? 1 : pc + 0.2;
  
  rangevalue.style.top = (vertical ? loc : 0) + "px";
  rangevalue.style.left = (vertical ? 0 : loc) + "px";
  thumb.style.top =  (vertical ? loc : 0) + "px";
  thumb.style.left = (vertical ? 0 : loc) + "px";
  fill.style.top = (vertical ? loc + (thumbsize/2) : filloffset + bordersize) + "px";
  fill.style.left = (vertical ? filloffset + bordersize : 0) + "px";
  fill.style.width = (vertical ? fillsize : loc + (thumbsize/2)) + "px";
  fill.style.height = (vertical ? bigval - filloffset - fillsize - loc : fillsize) + "px";
  shell.style.height = (vertical ? bigval : smallval) + "px";
  shell.style.width = (vertical ? smallval : bigval) + "px";
  track.style.height = (vertical ? bigval - 4 : fillsize) + "px"; /* adjust for border */
  track.style.width = (vertical ? fillsize : bigval - 4) + "px"; /* adjust for border */
  track.style.left = (vertical ? filloffset + bordersize : 0) + "px";
  track.style.top = (vertical ? 0 : filloffset + bordersize) + "px";
}
/* we often need a function to set the slider values on page load */
function setValue(val,num,vertical) {
  document.getElementById("slider"+num).value = val;
  showValue(val,num,vertical);
};

showValue(2, 1, false);

//scrollup

$('.scrollup').click(function(){
	$('body').animate({scrollTop: 0}, 300);
	return false;
});

{
	function initUP() {
		window.addEventListener('scroll', function(e){
			var distanceY = window.pageYOffset || document.documentElement.scrollTop,
				shrinkOn = 100,
				scrollup = $('.scrollup');
			if (distanceY > shrinkOn) {
				$(scrollup).addClass('scrollup--visible');
				
			} else {
				if (scrollup.hasClass('scrollup--visible')) {
					scrollup.removeClass('scrollup--visible');
				}
			}
		});
	}
	window.onload = initUP();
}