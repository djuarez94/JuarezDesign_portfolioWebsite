$(document).ready(function() {
	if ($(window).width() < 960) {
		/*-------------------------------------
	    | For Mobile Icons
	    -------------------------------------*/
	    $('.titles').hide();

	    $('h2').animate({opacity : '1'},"slow",dissappearGreet);

	    function dissappearGreet () {
	 	   $('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
	    }

	    function showBoxes () {
	 	   $('.titles').show();
	 	   $('h2').hide();
	    }

	    $("#loginForm2D").submit(function( event ) {
	 	   var answer = confirm("Are you sure you want to delete the user?");

	 	   if (answer == true) {
	 		   return;
	 	   }

	 	   event.preventDefault();
	    });
}
else {
	/*-------------------------------------
    | For Desktop Icons
    -------------------------------------*/
    $('.titlesDesktop').hide();

    $('h2').animate({opacity : '1'},"slow",dissappearGreet);

    function dissappearGreet () {
 	   $('h2').delay(1700).animate({opacity : '0'},"slow",showBoxes);
    }

    function showBoxes () {
 	   $('.titlesDesktop').show();
 	   $('h2').hide();
    }

    $("#loginForm2D").submit(function( event ) {
 	   var answer = confirm("Are you sure you want to delete the user?");

 	   if (answer == true) {
 		   return;
 	   }

 	   event.preventDefault();
    });
}




});