/*
	Author: Chirs Wing
	Date: 28/02/2018
	Desc: To sync camera feeds from Bloodhound runs.
	Notes:
		- For some reason calling the video elements via jQuery (v1.play() / v1.pause()) does not work.
		  A work around is using the explicit call document.getElementById("v1").play() / .pause(). 
*/


$(document).ready(function(){

	var csvData = [];
	var dataIndex = 0;
	
	// X/Y values that get plugged into the graph.
	var timeData = null;
	var speedData = null;
	
	/* ? Graph data load code start ? */
	
	$.ajax({
		type: "GET",
		url: "JS/car_data.csv",
		dataType: "text",
		success: function(data) {processData(data);}
	});

	function processData(allText) {
		var allTextLines = allText.split(/\r\n|\n/);
		var headers = allTextLines[0].split(',');

		for (var i = 1; i < allTextLines.length; i++) {
			var data = allTextLines[i].split(',');
			if (data.length == headers.length) {

				var tarr = [];
				for (var j = 0; j < headers.length; j++) {
					
					tarr.push(data[j]);
				}
				csvData.push(tarr);
			}
		}
	}

	function arrangeData(data){
		
		var length = data.length;
		var c1 = [];
		var c2 = [];	
		
		for(var i = 0; i < length; i++){
				
			var tmp = String(data[i]);
			var splitter = tmp.split(",");	
			
			c1.push(splitter[0]);
			c2.push(splitter[1]);	
		}
		
		// console.log("arrangeData function: " + c1 + ", " + c2);
		return [c1, c2];
	}
	
	/* ?  Graph data load code start ? */
	/* ------------------------------- */
	/* ?  Video sync code start      ? */
	
	var v1 = document.getElementById('v1');
	var v2 = document.getElementById('v2');
	var v3 = document.getElementById('v3');
	
	// So I dont go deaf whilst testing... what?
	v1.volume = 0;
	v2.volume = v1.volume;
	v3.volume = v1.volume;
											
	var v1Current = null;
	var v2Current = null;
	var v3Current = null;
	
	// The duration of the initial feed's video.
	var masterDuration = v1.duration;
	console.log("Master Duration: " + masterDuration);
	
	// Actively playing?
	var isPlaying = null;
	
	// Initializing values
	var onplaying = true;
	var onpause = false;

	// On video playing toggle values
	v1.onplaying = function(){
		onplaying = true;
		onpause = false;
	};

	// On video pause toggle values
	v1.onpause = function(){
		onplaying = false;
		onpause = true;
	};

	// Play video function
	function playVid(){      
		if (v1.paused && !onplaying) {
			
			$(".pause-play").html("Pause: <img src='images/pause-button.png'></img>");
			
			document.getElementById("v1").play();
			document.getElementById("v2").play();
			document.getElementById("v3").play();
		}
	} 

	// Pause video function
	function pauseVid() {     
		if (!v1.paused && !onpause) {
			
			$(".pause-play").html("Play: <img src='images/play-button.png'></img>");
			
			document.getElementById("v1").pause();
			document.getElementById("v2").pause();
			document.getElementById("v3").pause();
		}
	}
	
	// Handles click events of play/ pause button.
	$(".pause-play").on("click", function(event){
			
		if(isPlaying == null){
			
			document.getElementById("v1").play();
			document.getElementById("v2").play();
			document.getElementById("v3").play();
			
			isPlaying = true;
			// $(this).html("Pause");
			$(this).html("Pause: <img src='images/pause-button.png'></img>");
		}
		else if(!isPlaying){ 
		
			playVid(); 
			isPlaying = true;
		}
		else if(isPlaying){
			
			pauseVid();
			isPlaying = false;
		}
	});
	
	// Handles click events of the restart button.
	$(".restart").on("click", function(event){
		
		document.getElementById("v1").pause();
		document.getElementById("v2").pause();
		document.getElementById("v3").pause();
		
		v1.currentTime = 0;
		v2.currentTime = 0;
		v3.currentTime = 0;
		
		document.getElementById("v1").play();
		document.getElementById("v2").play();
		document.getElementById("v3").play();
	});
	
	/*
	// When the user is scrubbing forward.
	// May not be needed.
	v1.addEventListener("seeking", function() {
		v2.currentTime = v1.currentTime;
		v3.currentTime = v1.currentTime;
	});
	
	// When the user is finished scrubbing forward.
	// May not be needed.
	v1.addEventListener("seeked", function() {
		v2.currentTime = v1.currentTime;
		v3.currentTime = v1.currentTime;
	});
	*/
	
	// Updates the current time-component of v1 feed.
	$("#v1").on("timeupdate", function(event){
		
		v1Current = this.currentTime;
		$("#v1Current").text("Time: " + Math.round(v1Current) + " (s)");
	});
	
	$("#sec_1").on("click", function(event){
			
		// Pauses all videos in the frame.
		pauseVid();
		
		// Captures the time stamp of all feeds as they will be reset on .load() call.
		var tmpV1 = v1Current;
		var tmpV2 = v2Current;
		var tmpV3 = v3Current;
		
		// Captures the main feed and the 'this' feed which triggered the event.
		var feed_this = $(this).find("#div_1 video")[0];
		var feed_main = $("#main video")[0];
		var tmp_src_this = feed_this.src;
		var tmp_src_main = feed_main.src;
		
		feed_this.src = tmp_src_main;
		feed_main.src = tmp_src_this;
		
		feed_this.load();
		feed_main.load();
		
		v1.currentTime = tmpV1;
		v2.currentTime = tmpV2;
		v3.currentTime = tmpV3;
		
		document.getElementById("v1").play();
		document.getElementById("v2").play();
		document.getElementById("v3").play();
		
		$(".pause-play").html("Pause: <img src='images/pause-button.png'></img>");
	});
	
	$("#sec_2").on("click", function(event){
			
		// Pauses all videos in the frame.
		pauseVid();
		
		// Captures the time stamp of all feeds as they will be reset on .load() call.
		var tmpV1 = v1Current;
		var tmpV2 = v2Current;
		var tmpV3 = v3Current;
		
		// Captures the main feed and the 'this' feed which triggered the event.
		var feed_this = $(this).find("#div_2 video")[0];
		var feed_main = $("#main video")[0];
		var tmp_src_this = feed_this.src;
		var tmp_src_main = feed_main.src;
		
		feed_this.src = tmp_src_main;
		feed_main.src = tmp_src_this;
		
		feed_this.load();
		feed_main.load();
		
		v1.currentTime = tmpV1;
		v2.currentTime = tmpV2;
		v3.currentTime = tmpV3;
		
		document.getElementById("v1").play();
		document.getElementById("v2").play();
		document.getElementById("v3").play();
		
		$(".pause-play").html("Pause: <img src='images/pause-button.png'></img>");
	});
	
	/* ?  Video sync code end   ? */
	/* -------------------------- */
	/* ?  Graph plot code start ? */
	
	var data = [{ label: 'Speed vs Time', values: []}],
		length = masterDuration,
		nextIndex = length,
		playing = false,
		interval = true;

	var chart = $('#test-3 .epoch').epoch({
		type: 'time.line',
		data: data,
		axes: ['right', 'bottom'],
		ticks: {time: masterDuration, right: 10},
		tickFormats: { time: function(d) { return new dataIndex.toString(); } },
		range: {
			left: [0, 210],
			right: [0, 210]
		}
	});

	var pushPoint = function() {
		
		timeData = arrangeData(csvData)[0][dataIndex];
		speedData = arrangeData(csvData)[1][dataIndex];
			
		if(timeData != null && speedData != null){
			
			// Updates the exact time of the car to page.
			$("#currentSpeed").html(Math.round(speedData) + " MPH");
			
			chart.push([{time: dataIndex, y : speedData}]);
			dataIndex++;
		}
	};

	$('.pause-play').on('click', function(e) {
		
		if (playing) {
			clearInterval(interval);
		}
		else {
			pushPoint();
			interval = setInterval(pushPoint, 1000);
		}
		playing = !playing;
	});
	
	$("#restart").on("click", function(){
		
		chart.data = [{}];
	});
	
	/* ?  Graph plot code end ? */
});

function onTrackedVideoFrame(id, currentTime){
     //Change #current to currentTime
}