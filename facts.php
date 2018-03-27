<html>
	<head>
		<?php include("header.php"); ?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="JS/draw_line.js"></script>
		<script type="text/javascript" src="JS/fade_nodes.js"></script>
		<link rel="stylesheet" href="CSS/facts.css" />
		<link rel="stylesheet" href="CSS/fade.css" />
		<link rel="stylesheet" href="CSS/draw_line.css" />
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
			<div id="main">
				<div class="facts_container">
					<div class="header">
						<div class="top">
							<div class="page_header">
								Amazing Facts
							</div>
							<div class="bh_logo">
								<img src="images/favicon.png"></img>
							</div>
						</div>
						<div class="bottom">
							<div class="page_sub_heading">
								Connecting the Car to the Cloud
							</div>
							<div class="oracle_logo">
								<img src="images/oracle.png"></img>
							</div>
						</div>
					</div>
					<div class="body_container">
						
						<div class="fact_node" id="node_1">
							<div class="fade" id="1">
								Sensors generate <div class="bold">1 million lines of data per second</div>
								<br>
								<img src="images/download_data.png"></img>
							</div>
						</div>

						<div class="fact_node" id="node_2">
							<div class="fade" id="2">
								Data is collected by <div class="bold">4 Rasberry Pi’s</div>
								<br>
								<img src="images/rpi.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_3">
							<div class="fade" id="3">
								Real time computers are sending sensor data to the cloud using <div class="bold">User Datagram Protocol packets</div>
								<br>
								<img src="images/udp_graphic.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_4">
							<div class="fade" id="4">
								There are <div class="bold">7 real time gateways</div>(connecting 2 different networks)
								<br>
								<img src="images/rtg_graphic.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_5">
							<div class="fade" id="5">
								There are <div class="bold">4 GoPros</div> so you can see the car in real time (when live)
								<br>
								<img src="images/video_gallery.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_6">
							<div class="fade" id="6">
								Data from the sensors is sent to the <div class="bold">Oracle Cloud</div>
								<img src="images/oracle_cloud.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_7">
							<div class="fade" id="7">
								Data is stored in a <div class="bold">Database Cloud</div>
								<br>
								<img src="images/db_graphic.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_8">
							<div class="fade" id="8">
								The database then connects to a <div class="bold">Data Visualisation tool to create visualisations of runs</div>
								<br>
								<img src="images/data_graphic.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_9">
							<div class="fade" id="9">
								A <div class="bold">real time dashboard</div> allows you to see speed and fuel levels when the car is running 
								<br>
								<img src="images/dashboard.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_10">
							<div class="fade" id="10">
								You can find out more fun facts about BLOODHOUND using the <div class="bold">BLOODHOUND Chatbot</div>  
								<br>
								<img src="images/bloodhound_graphic.png"></img>
							</div>
						</div>
						<div class="fact_node" id="node_11">
							<div class="fade" id="11">
								There are <div class="bold">600 sensors</div> on the car
								<img src="images/sensor_graphic.png"></img>
							</div>
						</div>
						<div class="center_image">
							<img src="images/Hound_in_cloud.png"></img>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<?php // include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>