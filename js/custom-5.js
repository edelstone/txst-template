/* Background image delay and fade */

$(window).load(function() {
    $(".bg_image_3").delay(200).animate({
        opacity: "1"
    }, 500);
});

/* Parallax scrolling effect */

function parallax() {
    var scrolled = $(window).scrollTop();
    $(".bg_image_3").css("top", (scrolled * .6) + "px");
}

$(window).scroll(function(e) {
    parallax();
});

/* Fixed mobile header */

/* conflicts with drawer navigation

$(document).ready(function() {
    $('.banner').scrollToFixed({
        maxWidth: 767
    });
});

*/

/* Fixed desktop navigation */

$(document).ready(function() {
    $('.top_nav').scrollToFixed();
});

/* Back to top */

$('.btt').on("click", function() {
    $('html,body').animate({
        scrollTop: 0
    }, 500)
});

  var slideout = new Slideout({
	'panel': document.getElementById('panel'),
	'menu': document.getElementById('menu'),
	'padding': 256,
	'tolerance': 70,
	'side': 'right',
	'duration': 400,
	'touch': false
  });

  // Toggle button
  document.querySelector('.toggle-button').addEventListener('click', function() {
	slideout.toggle();
  });
