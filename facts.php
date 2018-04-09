<html>
	<head>
		<?php include("header.php"); ?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="JS/facts.js"></script>
		<link rel="stylesheet" href="CSS/facts.css" />
	</head>
	<body>
		<div id="content">
			<div class="nav">
				<?php include("nav.php"); ?>
				<div id="return">
					<a href="./">
						<img src="images/return-icon.png"></img>Return to landing page...
					</a>
				</div>
			</div>
			<div id="container">
				<div class="body">
					<div class="facts-container">
						<div class="fact-card" id="node-1">
							<img src="images/sensor_graphic.png"></img>
							<input type="hidden" id="node-1-hidden" value="There are <div class='highlight'>600</div> sensors on the car<br><img src='images/sensor_graphic.png'></img>"/>
						</div>
						<div class="fact-card" id="node-2">
							<img src="images/data_background.png"></img>
							<input type="hidden" id="node-2-hidden" value="Sensors generate <div class='highlight'>1 million lines of data per second</div><br><br><img src='images/data_background.png'></img>" />
						</div>
						<div class="fact-card" id="node-3">
							<img src="images/rpi.png"></img>
							<input type="hidden" id="node-3-hidden" value="Data is collected by <div class='highlight'>4 Raspberry Pi's</div><br><img src='images/rpi.png'></img>" />
						</div>
						<div class="fact-card" id="node-4">
							<img src="images/udp_graphic.png"></img>
							<input type="hidden" id="node-4-hidden" value="Real time computers are sending sensor data to the cloud using <div class='highlight'>User Datagram Protocol</div> packets<br><br><img src='images/udp_graphic.png'></img>" />
						</div>
						<div class="fact-card" id="node-5">
							<img src="images/rtg_graphic.png"></img>
							<input type="hidden" id="node-5-hidden" value="There are <div class='highlight'>7 real time gateways</div> (connecting 2 different networks)<br><img src='images/rtg_graphic.png'></img>" />
						</div>
						<div class="fact-card" id="node-6">
							<img src="images/video_gallery.png"></img>
							<input type="hidden" id="node-6-hidden" value="There are <div class='highlight'>4 GoPros</div> so you can see the car in real time (when live)<br><br><img src='images/video_gallery.png'></img>" />
						</div>
						<div class="fact-card" id="node-7">
							<img src="images/oracle_cloud.png"></img>
							<input type="hidden" id="node-7-hidden" value="Data from the sensors is sent to the <div class='highlight'>Oracle Cloud</div><br><br><img src='images/oracle_cloud.png'></img>" />
						</div>
						<div class="fact-card" id="node-8">
							<img src="images/db_graphic.png"></img>
							<input type="hidden" id="node-8-hidden" value="Data is stored in a <div class='highlight'>Database Cloud</div><br><br><img src='images/db_graphic.png'></img>" />
						</div>
						<div class="fact-card" id="node-9">
							<img src="images/data.png"></img>
							<input type="hidden" id="node-9-hidden" value="The database then connects to a <div class='highlight'>Data Visualisation tool to create visualisations of runs</div><br><br><img src='images/data.png'></img>" />
						</div>
						<div class="fact-card" id="node-10">
							<img src="images/dashboard.png"></img>
							<input type="hidden" id="node-10-hidden" value="A <div class='highlight'>real time dashboard</div> allows you to see speed and fuel levels when the car is running<br><br><img src='images/dashboard.png'></img>" />
						</div>
						<div class="fact-expanded" id="ex-1"></div>
						<div class="fact-expanded" id="ex-2"></div>
					</div>
					<div class="bloodhound-container">
						<img src="images/mini-bloodhound.png"></img>
					</div>
					<div class="fact-track">
						<img src="images/facts_track.png"></img>
					</div>
				</div>
				<div class="footer">
					<table>
						<tr>
							<td>
								<img src="images/favicon.png"></img>
							</td>
							<td>
								<table>
									<tr>
										<td>
											<div class="footer-bold">
												Amazing Facts
											</div>
										</td>
									</tr>
									<tr>
										<td>
											<div class="footer-sub">
												Connecting the Car to the Cloud
											</div>
										</td>
									</tr>
								</table>
							</td>
							<td>
								<div class="controller-text">
									To progress the Bloodhound car and show more facts, please click the arrow: 
								</div>
								<div class="fact-controller">
									<div id="progress"><img src="images/return-icon.png" onmouseover="this.src='images/return-icon_hover.png';" onmouseout="this.src='images/return-icon.png';"></img></div>
									<div id="restart"><img src="images/restart.png" onmouseover="this.src='images/restart_hover.png';" onmouseout="this.src='images/restart.png';"></img></div>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
</html>