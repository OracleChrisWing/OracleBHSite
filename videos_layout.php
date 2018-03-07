<html>
	<head>
		<!-- self -->
		<?php include("header.php"); ?>	
		<link rel="stylesheet" href="CSS/videos_layout.css"/>
		
		<!-- video logic and graph code -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="JS/video_logic.js"></script>	
		
		<!-- i_window fac cards -->
		<link rel="stylesheet" href="CSS/i_style.css"/>
		<script type="text/javascript" src="JS/i_script.js"></script>
		
		<!-- volume slider component -->
		<script src="JS/simple-slider.js"></script>
		<link href="CSS/simple-slider.css" rel="stylesheet" type="text/css" />
		<link href="CSS/simple-slider-volume.css" rel="stylesheet" type="text/css" />  
	</head>
	<body>
		<div class="content">
			<div class="nav">
				<?php include("nav.php"); ?>
				<div id="return">
					<a href="./">
						<img src="images/return-icon.png"></img>Return to landing page...
					</a>
				</div>
			</div>
			<div class="container">
				<table>
					<tr id="main-section">
						<td id="controls">
							<div class="controls">
								<!-- Controls for the graph goes here -->
								<div class="controls-header">
									Feed Controls
								</div>
								<br>
								<div id="v1Current">Time: 0 (s)</div>
									Current Speed: <div id="currentSpeed">0 MPH</div>
								<br>
								<div class="controls-container">
									<div class="pause-play">
										Play:<img src="images/play-button.png"></img>
									</div>
									<div class="restart">
										Restart: <img src="images/restart.png"></img>
									</div>
								</div>
								<div class="volume-container">
									<div class="volume-component">
										Volume:
										<input type="text" id="volume-slider" data-slider="true" data-slider-range="0,100">
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
												  .html(data.value.toFixed(3));
											});
										</script>
									</div>
								</div>								
								<br>
								<!--
								<div class="mini-bloodhound">
									<img src="images/mini-bloodhound.png"></img>
								</div>
								-->
							</div>
						</td>
						<td id="feed_container">
							<div class="feed_container">
								<!-- This container will contain the main feed and sub feeds -->
								
								<div class="main_feed">
									<div id="main">
										<!-- start of channel 1 -->
										<video id="v1" style="max-height: 100%; max-width: 100%" src="Videos/Runs_16_&_17_Profile_8_Fin_Cam.mp4" type="video/mp4"></video>
									</div>
								</div>
								<div class="sub_feeds">
									<div class="section">
										<a href="javascript:;" id="sec_1">
											<div class="feed" id="div_1">
												<video id="v2" style="max-height: 100%; max-width: 100%" src="Videos/Runs_16_&_17_Profile_8_Cockpit_Andy_View.mp4" type="video/mp4"></video>
											</div>
											<div class="switch">
												<img src="Images/switch_icon.png"></img>
											</div>
										</a>
									</div>
									<div class="section">
										<a href="javascript:;" id="sec_2">
											<div class="feed" id="div_2">
												<video id="v3" style="max-height: 100%; max-width: 100%" src="Videos/Run_16_&_17_Profile_8_Cockpit_View_Forward.mp4" type="video/mp4"></video>
											</div>
											<div class="switch">
												<img src="Images/switch_icon.png"></img>
											</div>
										</a>
									</div>
									<div class="section">
										<a href="javascript:;" id="sec_3">
											<div class="feed" id="div_3">
												<img src="Images/cam_feed_4.png"></img>
											</div>
											<div class="switch">
												<img src="Images/switch_icon.png"></img>
											</div>
										</a>
									</div>
								</div>
							</div>
						</td>
					</tr>
					<tr id="sub-section">
						<td id="logo-area">
							<div class="logo-area">
								<!-- Contains the Oracle/ BH partnership logo -->
								
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
						</td>
						<td id="data-container">
							<div class="data-container">
								<!-- Graph and data view -->
								
								<div class="graph-container">
									<?php include("graph_new.php"); ?>
									<div class="x-axis">Time (s)</div>
								</div>
								<div class="fact-container">
									<div class="facts_title">
										Run fact file:
									</div>
									<div id="overlay">
										<div id="image_container">
											<!-- Once a popup is clicked, the larger version of the image is displayed here for the user to view. -->
										</div>
									</div>
									<div class="card_container">
										
									</div>
								</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<!--
			<div class="footer">
				<?php include("footer.php"); ?>
			</div>
			-->
		</div>
	</body>
</html>