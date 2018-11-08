var d = new Date();
document.getElementById("footer").innerHTML = '<p>' + d.getFullYear() + ' copyright DMTE Jason Taylor Design <p>';

jQuery( document ).ready( function( $ ) {
  // $() will work as an alias for jQuery() inside of this function
  $("#toggle").click(function() {
    $(this).toggleClass("change");
    $("#menu").slideToggle();
  });
 
  $("#navItem").click(function() {
    $('#toggle').toggleClass("change");
    $("#menu").slideToggle();
  });
  $("#navItem2").click(function() {
    $('#toggle').toggleClass("change");
    $("#menu").slideToggle();
  });
  $("#navItem3").click(function() {
    $('#toggle').toggleClass("change");
    $("#menu").slideToggle();
  });

  $('#audio').mediaelementplayer({
    features:['playpause','volume','progress']
  });

} );


  // $(document).ready(function() {
	// 		// grab the initial top offset of the navigation 
	// 	   	var stickyNavTop = $('.nav').offset().top;
		   	
	// 	   	// our function that decides weather the navigation bar should have "fixed" css position or not.
	// 	   	var stickyNav = function(){
	// 		    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
	// 		    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
	// 		    // otherwise change it back to relative
	// 		    if (scrollTop > stickyNavTop) { 
	// 		        $('.nav').addClass('sticky');
	// 		    } else {
	// 		        $('.nav').removeClass('sticky'); 
	// 		    }
	// 		};

	// 		stickyNav();
	// 		// and run it again every time you scroll
	// 		$(window).scroll(function() {
	// 			stickyNav();
	// 		});
  //   });
    

