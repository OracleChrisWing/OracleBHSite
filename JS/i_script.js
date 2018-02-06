$(document).ready(function(){
	
	counter = 1;
	
	addNewContentFrame();
	var interval_ID = setInterval(addNewContentFrame, 3000);
	
	function addNewContentFrame(){
		
		if(counter == 12){ clearInterval(interval_ID); }
		$(".popups").append("<div id='content_frame_" + counter + "' class='content'><a href='#' class='image_capture' id='content_frames/frame_" + counter  + ".png' onclick='on(" + counter + ")'><img src='content_frames/frame_" + counter  + ".png'></img></a></div>");
	
		$("#content_frame_" + counter).fadeOut(7000);
		counter += 1;
	}
});

function loadImage(counter){
	
	$("#image_container").html("");
	$("#image_container").append("<img id='image_overlay' src='content_frames/frame_" + counter + ".png' onclick='off()'></img>");
}
function on(counter) {
	document.getElementById("overlay").style.display = "block";
	
	loadImage(counter);
}

function off() {
	document.getElementById("overlay").style.display = "none";
}

function switchDivs(this_){
	
	var this_contents = $("#" + this_).html();
	
	var main_contents = $("#main").html();
	
	$("#main").html(this_contents);
	$("#" + this_).html(main_contents);
}