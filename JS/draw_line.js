$(document).ready(function(){
	
	var fade_1 = $("#node_1").offset();
	var f1_x = fade_1.left + $("#node_1").width();
	var f1_y = fade_1.top + $("#node_1").height();
	
	var fade_2 = $("#node_2").offset();
	var f2_x = fade_2.left  + ($("#node_2").width() / 2);
	var f2_y = fade_2.top + $("#node_2").height();
	
	var center_image = $(".center_image").offset();
	var center_x = center_image.left + 10;
	var center_y = center_image.top + 10;
	
	createLine(f1_x, f1_y, center_x, center_y);
	createLine(f2_x, f2_y, center_x, center_y);
});

function createLine(x1,y1, x2,y2, container){
  var length = Math.sqrt((x1-x2)*(x1-x2) + (y1-y2)*(y1-y2));
  var angle  = Math.atan2(y2 - y1, x2 - x1) * 180 / Math.PI;
  var transform = 'rotate('+angle+'deg)';

    var line = $('<div>')
      .appendTo('.body_container')
      .addClass('line')
      .css({
        'position': 'relative',
        'transform': transform
		})
      .width(length)
      .offset({left: x1, top: y1});

  return line;
}