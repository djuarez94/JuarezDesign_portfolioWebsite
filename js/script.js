$(document).ready(function() {
/*-------------------------------------
| Smooth Scroll
-------------------------------------*/
	function scrollMe () {
	$('html,body').animate({
        scrollTop: $(".aboutMe").offset().top},
        'slow');
}

function scrollWork () {
	$('html,body').animate({
        scrollTop: $("#myWork").offset().top},
        'slow');
}

function scrollContact () {
	$('html,body').animate({
        scrollTop: $("#contactMe").offset().top},
        'slow');
}

$("#about").click(scrollMe);
$(".downArrow").click(scrollMe);
$("#work").click(scrollWork);
$("#contact").click(scrollContact);

/*-------------------------------------
| IMAGE FADE WHEN SCROLLING
-------------------------------------*/
function showImages(el) {
        var windowHeight = jQuery( window ).height();
        $(el).each(function(){
            var thisPos = $(this).offset().top;

            var topOfWindow = $(window).scrollTop();
            if (topOfWindow + windowHeight - 200 > thisPos ) {
                $(this).addClass("fadeIn");
            }
        });
    }

    // if the image in the window of browser when the page is loaded, show that image
    $(document).ready(function(){
            showImages('.star');
    });

    // if the image in the window of browser when scrolling the page, show that image
    $(window).scroll(function() {
            showImages('.star');
    });

/*-------------------------------------
| Back to Top Button fadeIn & fadeOut
-------------------------------------*/
$('.fa-arrow-circle-up').css({'display': 'none'});

var offset = 250;

var duration = 300;

$(window).scroll(function() {

if ($(this).scrollTop() > offset) {

$('.fa-arrow-circle-up').fadeIn(duration);

} else {

$('.fa-arrow-circle-up').fadeOut(duration);

}

});

/*-------------------------------------
| Down Arrow Animation
-------------------------------------*/

	function showDownArrow () {
		$('.downArrow').animate({opacity: '0'},1000);
	}
	showDownArrow(arrowAnimate);

	function arrowAnimate() {
	$(".downArrow").animate({
    opacity: 0,
    top: "10px"
}, 1e3, function () {
    $(".downArrow").css({
        top: '-40px',
        opacity: .8
    }), arrowAnimate()
})
}
arrowAnimate();


$('.fa-arrow-circle-up').click(function(event) {

event.preventDefault();

$('html, body').animate({scrollTop: 0}, duration);

return false;

});


});