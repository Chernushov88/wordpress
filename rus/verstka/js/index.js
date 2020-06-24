$(document).ready(
	function () {
		$('.partition i').hover(function(){
		    $('.partition ul').css('display', 'block');
		    }, function(){
		        // change to any color that was previously used.
		        $('.partition ul').css('display', 'none');
		
	});
		$('.date-range .icon-cal-start').click(function () {
			$('.date-range .calendar-news-start').css('display', 'block');
		}) 
		$('.date-range .icon-cal-end').click(function () {
			$('.date-range .calendar-news-end').css('display', 'block');
		}) 

		$(document).click(function(event) { 
			  $target = $(event.target);
			  if(!$target.closest('.date-range .fa-calendar').length && 
			  $('.calendar-news-start').is(":visible")) {
			    $('.calendar-news-start').hide();
			  }        
			});  

		$(document).click(function(event) { 
			  $target = $(event.target);
			  if(!$target.closest('.date-range .fa-calendar').length && 
			  $('.calendar-news-end').is(":visible")) {
			    $('.calendar-news-end').hide();
			  }        
			});  

})