/* Mobile navigation slideout */

$(function() {
    $(".nav_mob").navigation({
        maxWidth: "768px",
        labels: false,
        gravity: "right",
        type: "push"
    });
});

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

/*$(document).ready(function() {
    $('.banner').scrollToFixed({
        maxWidth: 799
    });
});*/

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