
$(document).ready(function(){

	$('.mobile_header').click(function(){
		$('.navBar').toggleClass('show');
	});
  
  
  
  	
  	$('body').bind('touchstart', function() {});
});


$(function() {			

        	$('.date').datetimepicker({
            	format: 'MM/DD/YYYY'
            });
            $('.date-time').datetimepicker();


		
        $('#datetimepicker1').datetimepicker();
        $('#datetimepicker2').datetimepicker({
            useCurrent: false 
        });
        $("#datetimepicker1").on("dp.change", function (e) {
            $('#datetimepicker1').data("DateTimePicker").minDate(e.date);
        });
        $("#datetimepicker2").on("dp.change", function (e) {
            $('#datetimepicker2').data("DateTimePicker").minDate(e.date);
        });

		  	$('a[href*=#]:not([href=#])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html,body').animate({
			          scrollTop: target.offset().top
			        }, 1000);
			        return false;
			      }
			    }
		  	});
		});
		
		
		$(window).load(function() {	  		
			
		    $('.flexslider').flexslider({
			    controlNav: false
		    });


	  	});



        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
	

