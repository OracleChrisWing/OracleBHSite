function switchDivs(this_){
	
	var this_contents = $("#" + this_).html();
	
	var main_contents = $("#main_feed").html();
	
	$("#main_feed").html(this_contents);
	$("#" + this_).html(main_contents);
}