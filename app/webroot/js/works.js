
function setTapeWidth() {
	var width = 0;
	
	$('.tape>section').each(function() {
		width += $(this).width();
	});
	
	$('.tape').css('width', width);
}


$(window).load(function() {	
	var height = $(window).height();
		
	if (height > 600 && height < 800) $('.grid, #intro').addClass('row2');
	else if (height < 600) $('.grid, #intro').addClass('row1');
	
	grid ('.tape>section');
	setItemWidth('.tape>section');
	setTapeWidth();	
	
	$('.folio .bar.clickable').on('click', function(){
		deployGrid($(this));
	});

	$(window).resize(function () {
		var height = $(window).height();
		
		if (height > 600 && height < 800) $('.grid, #intro').removeClass('row1').addClass('row2');
		else if (height < 600) $('.grid, #intro').removeClass('row2').addClass('row1');
		else $('.grid, #intro').removeClass('row2 row1');
		
		grid ('.tape>section');
		setItemWidth('.tape>section');
		setTapeWidth(false);
	});
});

$(document).ready(function(){
	
	$('.navbar-fixed-top li a, .detail a, .navbar-brand').on('click',function(event){
		event.preventDefault();
		var link = $(this).attr('href');
		$('.tape').fadeOut(500,function(){
			window.location.href = link;
		});
	});
	
	$('.folio .grid a').on('click',function(event){
		event.preventDefault();
		var section = $(this).parent().parent().parent();
		var bar = $(this).parent().parent().prev('.bar');
		var tape = $('.tape');
		
		section.animate({'width':bar.width()},500, function(){
			$('.grid').hide();	
		});
		tape.animate({'width':bar.width() * $('.tape>section').length},500);
		
		flag = false;
		lastId = '';
		
		var link = $(this).attr('href');
		$('.tape').fadeOut(500,function(){
			window.location.href = link;
		});
	});
	
	$('.bar a, #intro article a').on('click', function(event){
		event.preventDefault();
		if ($(this).attr('href') == "#about") {
			$('.content').animate({scrollLeft:$('#intro').width()-$('.bar').width()}, 1000);
		} else if ($(this).attr('href') == "#works")  {
			$('.content').animate({scrollLeft:$('#intro').width()+$('#about').width()-$('.bar').width()}, 1000);
		} else {
			$('.content').animate({scrollLeft:0}, 1000);
		}
	});
		
	
	
	// cache the window object
	$window = $('.content');
 
	$('section[data-type="background"]').each(function(){
		// declare the variable to affect the defined data-type
		var $scroll = $(this);
				 
		$('.content').scroll(function() {
			// HTML5 proves useful for helping with creating JS functions!
			// also, negative value because we're scrolling upwards                            
			var xPos = -($window.scrollLeft() / $scroll.data('speed'));
			
			// background position
			var coords = xPos + 'px 50%';
			
			// move the background
			$scroll.css({ backgroundPosition: coords });   
		}); // end window scroll
	});  // end section function
	
	$('footer .places a').popover({ html : true });
});
