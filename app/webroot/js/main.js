$(document).ready(function(){
	
	$('.navbar-fixed-top li a, .detail a, .navbar-brand').on('click',function(event){
		event.preventDefault();
		var link = $(this).attr('href');
		$('.content').fadeOut(500,function(){
			window.location.href = link;
		});
	});
	
	
	$('footer .places a').popover({ html : true });
});
