$(document).ready(function() {
    // $('.titles').hide();
    // $('.titlesDesktop').hide();
    // $('.myVideo').hide();
    // $('footer').hide();
    // $('.videoLink').hide();

	if ($(window).width() < 768) {
		/*-------------------------------------
	    | For Mobile Icons
	    -------------------------------------*/
	    $('.titles').hide();
	    $('.titlesDesktop').hide();
        $('.myVideo').hide();
        $('footer').hide();
        $('.videoLink').hide();

	    $('h2').animate({opacity : '1'},"slow",dissappearGreet);

	    function dissappearGreet () {
	 	   $('h2').delay(200).animate({opacity : '0'},"slow",showBoxes);
	    }

	    function showBoxes () {
	 	   $('.titles').show()
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
    $('.titles').hide();
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
    var newSource2 = $this.data('alt-src');
    $this.data('alt-src', $this.attr('src'));
    $this.attr('src', newSource2);
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