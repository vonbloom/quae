var widths = [];
var flag = false;
var lastId = '';

function grid (element) {
	var n = 0;
	var index = 0;
	var space = 4;
	var row = 0;
	var col = 0;
	var height = $('.content').height() - space;
	var width = 0;
	
	$(element).each(function(){
		
		if ($(this).attr('id') == 'intro') {
			row = 0;
			col = 0;
			var size = height*.4;		
			
			if ($(this).hasClass('row2') || $(this).hasClass('row1')) {
				$(this).find('header').css({
					'bottom': 0,
					'left': 0,
					'width': 'auto',
					'height': 'auto'
				});
				width += $(this).find('header').width();
				
				$(this).find('article').css({
					'bottom': 0,
					'left': width,
					'width': size*1.4,
					'height': size
				});		
				width += $(this).find('article').width();
					
				$(this).find('.player').css({
					'bottom': 0,
					'left': width,
					'width': size*2,
					'height': size
				});
				width += $(this).find('.player').width() + $('.bar').width();
			} else {			
				$(this).find('header').css({
					'bottom': size,
					'left': 0,
					'width': 'auto',
					'height': 'auto'
				});
				
				$(this).find('article').css({
					'bottom': 0,
					'left': 0,
					'width': size*1.4,
					'height': size
				});		
				width += $(this).find('article').width();
					
				$(this).find('.player').css({
					'bottom': 0,
					'left': size*1.4,
					'width': size*2,
					'height': size
				});
				width += $(this).find('.player').width() + $('.bar').width();
			}
			
			$(this).css({'width':width, 'height':height});
					
		} else {
			if ($(this).find('.grid').hasClass('row2')) {
				index = 0;
				n = 2;
				row = 0;
				col = 0;
				var cellsize = height / n;
				var offset = cellsize;
				
				$(this).find('.cell').each(function(){
					if (index != 0 && index % n == 0) col++;
					
					if ($(this).hasClass('big') && row == 0 && index % n == 0) {			
						cellsize *= 2;
						
						$(this).css({
							'top': offset * (index % n),
							'left': offset * col,
							'width': cellsize - space,
							'height': cellsize - space
						});
						col++;
						index++;
					} else {
						cellsize = height / n;
						
						$(this).css({
							'top': cellsize * (index % n),
							'left': offset * col,
							'width': cellsize - space,
							'height': cellsize - space
						});
					}
					index++;
				});
			} else if ($(this).find('.grid').hasClass('row1')) {
				n = 1;
				row = 0;
				col = 0;
				var cellsize = height;
				var offset = cellsize;
				
				$(this).find('.cell').each(function(index){
					if (index != 0 && index % n == 0) col++;
									
					$(this).css({
						'top': cellsize * (index % n),
						'left': offset * col,
						'width': cellsize - space,
						'height': cellsize - space
					});
				});
				
			} else {
				index = 0;
				n = 3;
				row = 0;
				col = 0;
				var cellsize = height / n;
				var offset = cellsize;
				
				$(this).find('.cell').each(function() {			
					if (index != 0 && index % n == 0) col++;
					
					if ($(this).hasClass('big') && row == 0 && index % n != 2) {			
						cellsize *= 2;
						
						$(this).css({
							'top': offset * (index % n),
							'left': offset * col,
							'width': cellsize - space,
							'height': cellsize - space
						});
						col += 1;
						if (index % n == 0)	{row = 2; val = 1;}
						else {row = 1; val = 3;}
					} else if (row != 0) {
						cellsize = height / n;
						
						$(this).css({
							'top': cellsize * ((index % n) + row-val),
							'left': offset * (col - row+1),
							'width': cellsize - space,
							'height': cellsize - space
						});
						row--;
					} else {
						cellsize = height / n;
						
						$(this).css({
							'top': cellsize * (index % n),
							'left': offset * col,
							'width': cellsize - space,
							'height': cellsize - space
						});
					}
					index++;
				});
			}		
			//$(this).css({'width':offset * (col + 1) + $('.bar').width()+4, 'height':height});
			widths[$(this).attr('id')] = offset * (col + 1) + $('.bar').width() + space;
			//console.log(widths);
		}
	});
}

function getTapeWidth() {
	var width = 0;
	
	$('.tape>section').each(function() {
				
		if ($(this).hasClass('open'))
			width += widths[$(this).attr('id')];
		else 
			width += $('.bar').width();	
	});
	
	return width;
}

function getSlidePos (element){
	var x = 0;
	
	$('.tape>section').each(function(index) {
		if ($(this).attr('id') == element)
			return false;
		else x = index + 1;
	});
	if (x == 0) return 0;
	else return x;
}

function setItemWidth(item) {
	var width = 0;
	
	$(item).each(function() {
				
		if ($(this).hasClass('open'))
			width = widths[$(this).attr('id')];
		else if ($(this).hasClass('active'))
			width = $('.content').width()*.8;
		else if ($(this).hasClass('hidden'))
			width = 0;
		else 
			width = $('.bar').width();	
		
		$(this).css('width', width);
	});
}

function deployGrid(item) {
	var $section = item.parent('section');
	var activeId = $section.attr('id');
	var tape = $('.tape');
		
	if (flag == false) {
		item.parent().addClass('open');
		$('.content').animate({scrollLeft:$('.bar').width() * getSlidePos($section.attr('id'))}, 1000);console.log(getSlidePos($section.attr('id')));
		item.parent().animate({'width':widths[item.parent().attr('id')]},500);
		tape.animate({'width':getTapeWidth()},500);

		flag = true;
		lastId = activeId;
	} else {
		if (activeId == lastId) {
			item.parent().animate({'width':item.width()},500, function(){
				item.parent().removeClass('open');
			});
			tape.animate({'width':item.width() * $('.tape>section').length},500);
			
			flag = false;
			lastId = '';
		} else {
			$('#'+lastId).animate({'width':item.width()},500, function(){
				$('.tape>section').removeClass('open');
				item.parent().addClass('open');
				$('.content').animate({scrollLeft:$('.bar').width() * getSlidePos($section.attr('id'))}, 1000);
				item.parent().animate({'width':widths[item.parent().attr('id')]},500);
				tape.animate({'width':getTapeWidth()},500);
			});
			tape.animate({'width':item.width() * $('.tape>section').length},500);
			
			flag = true;
			lastId = activeId;
		}
	}
}
