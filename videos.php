<html>
	<head>
		<link rel="stylesheet" href="CSS/videos.css"/>
		<link rel="stylesheet" href="CSS/popup.css"/>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="JS/jquery-1.7.2.min.js"></script>
		<script src="JS/video_logic.js"></script>
		
		<script src="JS/simple-slider.js"></script>

		<link href="CSS/simple-slider.css" rel="stylesheet" type="text/css" />
		<link href="CSS/simple-slider-volume.css" rel="stylesheet" type="text/css" /> 
	</head>
	<body>
		<div class="container">
			<div class="select_run">
				<div class="image_container">
					<img src="images/calendar.png"></img>
				</div>
				<div class="date_container">
					<div class="date">
						&nbsp; 13-09-17
					</div>
					<div class="dropdown-content">
						<a href="javascript:;">&nbsp; 14-09-17</a>
						<a href="javascript:;">&nbsp; 15-09-17</a>
						<a href="javascript:;">&nbsp; 16-09-17</a>
					</div>
					<div class="drop_down_icon">
						<img src="images/drop_down_icon.png"></img>
					</div>
				</div>
			</div>
			<div class="main_section">
				<div class="main_feed">
						<!-- start of channel 1 -->
						<video id="v1" style="max-height: 100%; max-width: 100%" src="Videos/Runs_16_&_17_Profile_8_Cockpit_Andy_View.mp4" type="video/mp4"></video>
						<input type="hidden" id="v1-desc" value="Fin Cam" />
				</div>
				<div class="vert_seperator"></div>
				<div class="alt_feed_container">
					<style>

					</style>
						<div class="section">
							<a href="javascript:;" id="sec_1">
								<div class="sub_feed_container" id="div_1">
									<video id="v2" style="max-height: 100%; max-width: 100%" src="Videos/Runs_16_&_17_Profile_8_Fin_Cam.mp4" type="video/mp4"></video>
								</div>
								<div class="switch">
									<img src="images/switch_icon.png"></img>
								</div>
							</a>
						</div>
						<div class="section">
							<a href="javascript:;" id="sec_2">
								<div class="sub_feed_container" id="div_2">
									<video id="v3" style="max-height: 100%; max-width: 100%" src="Videos/Run_16_&_17_Profile_8_Cockpit_View_Forward.mp4" type="video/mp4"></video>
								</div>
								<div class="switch">
									<img src="images/switch_icon.png"></img>
								</div>
							</a>
						</div>
						<div class="section-gps-tracker">
							<a href="javascript:;" id="sec_3">
								<div class="sub_feed_container" id="div_3">
									<div id="mapHolder" style="max-height:100%; max-width: 74%;">
									<div id="map" style="height: 100%; width: 100%;"></div>
									</div>    
									<script>
									  var map = null;
									  var marker = null;
									  function initMap() {
										map = new google.maps.Map(document.getElementById('map'), {
										  center: {lat: 50.4414, lng: -5.0}, mapTypeId: 'satellite',
										  zoom: 15
										});
									  }
									  function addMarker(lat, lng)
									  {
										var myLatLng = {lat: lat, lng: lng};
										if (map)
										{
											//console.log("Adding marker " + myLatLng);
											if (marker)
												marker.setPosition(myLatLng);
											else
												marker = new google.maps.Marker({
												  position: myLatLng,
												  map: map,
												  icon: "marker.png"
												});	  
										}
									  }
									  
									</script>
									<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkrDMs-KjOzeW7hpDsJANXMPCbg5v8hwA&callback=initMap"
									async defer></script>
								</div>
							</a>
						</div>
				</div>
				<div class="speed_indicator">
					0 mph
				</div>
				<div class="time_indicator">
					00:00
				</div>
			</div>
			<div class="horiz_seperator">
				<!-- Seperates the main content divs on page -->
			</div>
			<br>
			<div class="sub_section">
				<div class="logo_section">
					<div class="logos">
						<div class="top">
							<div class="bh_logo">
								<img src="images/favicon.png"></img>
							</div>
						</div>
						<div class="bottom">
							<div class="oracle_logo">
								<img src="images/oracle.png"></img>
							</div>
						</div>
					</div>
					<div class="controls">
						<div class="pause-play">
							<img src="images/play-button.png"><img>
						</div>
						&nbsp;
						<div class="restart">
							<img src="images/restart.png"><img>
						</div>
						&nbsp;
						<div class="volume">
							<div class="popup" onclick="togglePopup(1)">
								<img src="images/volume.png"><img>
								<span class="popuptext" id="myPopup_1">
									<span>
										<input type="text" data-slider="true" data-slider-theme="volume" value="50" data-slider-range="0, 100">
										<input type="hidden" class="output">
									</span>
								</span>
								<script>
									$("[data-slider]")
									.each(function () {
										var input = $(this);
										$("<span>")
										.addClass("output")
										.insertAfter($(this));
									})
									.bind("slider:ready slider:changed", function (event, data) {
										$(this)
										.nextAll(".output:first")
										.html(data.value.toFixed(0));
									});
								</script>
							</div>
							<script>															
								// When the user clicks on the volume icon, it opens the widget.
								function togglePopup(id) {

									var popup = document.getElementById("myPopup_" + id);
									popup.classList.toggle("show");
								}								
							</script>	
						</div>
						<br>
						<div class="toggle-facts">
							Show facts? <input type="checkbox" id="showFacts"/>
						</div>
						<br>
						<div class="toggle-autoplay">
							Auto-play when switching? <input type="checkbox" id="toggleAutoplay"/>
						</div>
					</div>
				</div>
				<div class="graph_section">
					<?php include("graph.php"); ?>
				</div>
				<div class="progress_bar_section">
					<?php include("progress_bar.php"); ?>
				</div>
			</div>
		</div>
	</body>
</html>