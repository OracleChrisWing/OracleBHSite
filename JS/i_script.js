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