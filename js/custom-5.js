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

// Parallax scrolling effect

$(window).scroll(function(e) {
    parallax();
});

function parallax() {
    var scrolled = $(window).scrollTop();
    $(".bg_image_3").css("top", (scrolled * .6) + "px");
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
	'padding': 280,
	'tolerance': 70,
	'side': 'right',
	'duration': 300,
	'touch': false
});

document.querySelector('.toggle-button').addEventListener('click', function() {
    slideout.toggle();
});