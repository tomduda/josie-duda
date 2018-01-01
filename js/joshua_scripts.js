
jQuery(document).ready(function($) {  

	/* Stick navigation to the top of the page */
	var stickyNavTop = $('.main-navigation').offset().top; 

	$(window).scroll(function(){  


		var scrollTop = $(window).scrollTop();  

		if (scrollTop > stickyNavTop) {   
			// alert('joshua scripts sticky header');
			$('.main-navigation').addClass('sticky-header'); 
			$('.site-header').addClass('shifted');
		} else {  
			$('.main-navigation').removeClass('sticky-header');   
			$('.site-header').removeClass('shifted');
		}  

	});
        /* Scroll to specific section on front page */
$(function() {
	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			if (target.length) {
				$('html,body').animate({
					scrollTop: (target.offset().top - 85)
				}, 2000);
				return false;
			}
		}
	});
});
});



 jQuery(document).ready(function($){

			var windowHeight = $(window).height();
			var windowScrollPosTop = $(window).scrollTop();
			var windowScrollPosBottom = windowHeight + windowScrollPosTop;

	$.fn.revealOnScroll = function(direction, speed){
		return this.each(function(){
			var objectOffset = $(this).offset();			
			var objectOffsetTop = objectOffset.top;		

			if(!$(this).hasClass("hidden")){
				$(this).css("opacity", 0).addClass("hidden");
				if(direction == "right"){
					$(this).css({"opacity" : 0,
					"right": "7700px"
					});
				}
				else{
					$(this).css({"opacity" : 0,
					"right": "-7700px"
					});
				}
			}

			if(!$(this).hasClass('animation-complete')){

				if(windowScrollPosBottom > objectOffsetTop){
					$(this).animate({"opacity" : 1, "right" : 0}, speed).addClass('animation-complete');
					$(this).animate({"opacity" : 1}, speed).addClass('animation-complete');
					$(this).animate({"opacity" : 1}, speed).addClass('animation-complete');
				}
			}

		}); // end return this each function

	} // End reveal on scroll function

	$(window).scroll(function(){

			windowHeight = $(window).height();
			windowScrollPosTop = $(window).scrollTop();
			windowScrollPosBottom = windowHeight + windowScrollPosTop;

		$('.about-tom-text-0').revealOnScroll("right", 1000);
		$('.about-tom-text-1').revealOnScroll("left", 2000 );
		$('.about-tom-text-2').revealOnScroll("right", 3000);
		$(".testimonial-box-0").revealOnScroll("left", 1000);
		$(".testimonial-box-1").revealOnScroll("right", 2000);
		$(".testimonial-box-2").revealOnScroll("left",3000);
		$(".resume-border").revealOnScroll("left", 2000);


	});
	
	
});
