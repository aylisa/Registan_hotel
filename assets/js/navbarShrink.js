$(function() {
			$(window).scroll(function(){
				if($(document).scrollTop().valueOf()>100){
					$('.navbar').css({						
						top:'-30px'
					});

					$('.siteNameContainer').css({
						position:"relative",
						top:"15px"
					});

					$('.menu_header').css({
						top:"-3px"
					});

					// $('.siteName').css({font-size: 18px;}); 
				}else{
					$('.navbar').css({
						
						top:'0px'
					});
					$('.siteNameContainer').css({
						position:"relative",
						top:"0px"
					});
					$('.menu_header').css({
						top:"15px"
					});
				}
			});

	  	});


$(document).ready(function(){

	$('.menu_header').click(function(){
		$('.navBar').toggleClass('show');
	});
  
  
  
  	
  	$('body').bind('touchstart', function() {});
});