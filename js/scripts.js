$(document).ready(function() {
	if ($(window).width() < 960) {
		/*-------------------------------------
	    | For Mobile Icons
	    -------------------------------------*/
	    $('.titles').hide();
        $('.myVideo').hide();
        $('footer').hide();
        $('.videoLink').hide();

	    $('h2').animate({opacity : '1'},"slow",dissappearGreet);

	    function dissappearGreet () {
	 	   $('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
	    }

	    function showBoxes () {
	 	   $('.titles').show();
	 	   $('h2').hide();
           $('.myVideo').show();
           $('footer').show();
           $('.videoLink').show();
	    }

}
else {
	/*-------------------------------------
    | For Desktop Icons
    -------------------------------------*/
    $('.titlesDesktop').hide();
    $('.myVideo').hide();
    $('footer').hide();
    $('.videoLink').hide();

    $('h2').animate({opacity : '1'},"slow",dissappearGreet);

    function dissappearGreet () {
 	   $('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
    }

    function showBoxes () {
 	   $('.titlesDesktop').show();
 	   $('h2').hide();
       $('.myVideo').show();
       $('footer').show();
    }

    $("#loginForm2D").submit(function( event ) {
 	   var answer = confirm("Are you sure you want to delete the user?");

 	   if (answer == true) {
 		   return;
 	   }

 	   event.preventDefault();
    });
}

/*-------------------------------------
| Image Swap
-------------------------------------*/
var sourceSwap = function () {
    var $this = $(this);
    var newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
}

$(function () {
    $('img.desktopIcons').hover(sourceSwap, sourceSwap);
});

var sourceSwapMobile = function () {
    var $this = $(this);
    var newSource = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource);
}

$(function () {
    $('img.mobileIcons').hover(sourceSwapMobile, sourceSwapMobile);
});

/*-------------------------------------
| Smooth Scroll
-------------------------------------*/
	function scrollMe () {
	$('html,body').animate({
        scrollTop: $("#myVideo").offset().top},
        'slow');
}

$(".videoLink a").click(scrollMe);



});