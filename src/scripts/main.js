import $ from 'jquery';
window.$ = window.jQuery = $;
import 'bootstrap/dist/js/bootstrap';


$(document).ready(function(){
  var title = $("title").text();
  console.log(title + " is ready.");

	$(".main-menu").on("click","a", function (event) {
		// $(".main-menu a").removeClass("active");
		// $(this).addClass("active");
		event.preventDefault();
		var id  = $(this).attr('href'),
			top = $(id).offset().top-140;

		$('body,html').animate({scrollTop: top}, 1500);
	});
});
 

 $(window).scroll(function() {    
	var scroll = $(window).scrollTop();

	if (scroll >= 50) {
		$(".navbar-fixed-top").addClass("with-scroll");
	} else {
		$(".navbar-fixed-top").removeClass("with-scroll");
	}
});