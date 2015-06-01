// No delay on mobile tapping

window.addEventListener('load', function() {
	FastClick.attach(document.body);
}, false);

// Background image delay and fade 

$(window).load(function() {
    $(".bg_image_3").delay(200).animate({
        opacity: "1"
    }, 500);
});

$(window).load(function() {
    $(".bg_image_2, .bg_image_5").delay(0).animate({
        opacity: "1"
    }, 500);
});

// Parallax scrolling effect

$(window).scroll(function(e) {
    parallax();
});

function parallax() {
    var scrolled = $(window).scrollTop();
    $(".bg_image_2, .bg_image_3, .bg_image_5").css("top", (scrolled * .6) + "px");
}

// Fixed desktop navigation

$(document).ready(function() {
    $('.top_nav').scrollToFixed();
});

// Back to top

$('.btt').on("click", function() {
    $('html,body').animate({
        scrollTop: 0
    }, 500)
});

// Mobile navigation

var slideout = new Slideout({
    'panel': document.getElementById('panel'),
	'menu': document.getElementById('menu'),
	'padding': 300,
	'tolerance': 70,
	'side': 'right',
	'duration': 300,
	'touch': false
});

document.querySelector('.toggle-button').addEventListener('click', function() {
    slideout.toggle();
});

// Slick Slider

$(document).ready(function(){
  $('.slider').slick({
  	adaptiveHeight: true,
  	cssEase: 'ease-in-out',
    arrows: true,
    infinite: true,
	slidesToShow: 1,
  	slidesToScroll: 1,
  	dots: true,
  	speed: 500
  });
  $('.slider_2').slick({
   	fade: true,
  	cssEase: 'ease-in-out',
  	autoplay: true,
  	autoplaySpeed: 2000,
  	adaptiveHeight: true,
    arrows: true,
    infinite: true,
	slidesToShow: 1,
  	slidesToScroll: 1,
  	dots: true
  });
});

