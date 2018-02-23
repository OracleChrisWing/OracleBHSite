<html>
	<head>
		<?php include("header.php"); ?>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="JS/feed_switch.js"></script>
		<link rel="stylesheet" href="CSS/videos.css" />
		<link rel="stylesheet" href="CSS/alt_feed.css" />
	</head>
	<body>
		<div class="content">
			<div class="nav">
				<?php include("nav.php"); ?>
			</div>
			<div class="main">
				<div class="main_feed">
					<div id="main_feed">
						<!-- <iframe src="https://www.youtube.com/embed/ox0vDsMMo3Y?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->
						<img src="Images/cam_feed_1.png"></img>
					</div>
				</div>
				<div class="graph_container">
					<?php include("graph.php"); ?>
				</div>
				<div class="alt_feed">
					<div class="example-one-header">
						<div class="title">Alternative Camera Feeds:</div>
						<header class="example-one-header scroll">
							<nav class="flex">
								<span class="nav-item">
									<div class="section">
										<a href="#" onclick="switchDivs('div_1')">
											<div class="feed" id="div_1">
												<!-- DUMMY; TO BE REPLACED -->
												<!-- <iframe src="https://www.youtube.com/embed/7D4-49pkEWY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
												<img src="Images/cam_feed_2.png"></img> 
											</div>
											<div class="switch">
												<img src="images/switch_icon.png"></img>
											</div>
										</a>
									</div>
								</span>
								<span class="nav-item">
									<div class="section">
										<a href="#" onclick="switchDivs('div_2')">
											<div class="feed" id="div_2">
												<!-- DUMMY; TO BE REPLACED -->
												<!-- <iframe src="https://www.youtube.com/embed/uk56oPTr7co?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
												<img src="Images/cam_feed_3.png"></img> 
											</div>
											<div class="switch">
												<img src="images/switch_icon.png"></img>
											</div>
										</a>
									</div>
								</span>
								<span class="nav-item">
									<div class="section">
										<a href="#" onclick="switchDivs('div_3')">
											<div class="feed" id="div_3">
												<!-- DUMMY; TO BE REPLACED -->
												<!-- <iframe src="https://www.youtube.com/embed/Mylca_onT_I?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
												<img src="Images/cam_feed_4.png"></img>
											</div>
											<div class="switch">
												<img src="Images/switch_icon.png"></img>
											</div>
										</a>
									</div>
								</span>
							</nav>
						</header>
					</div>
				</div>
			</div>
			<div class="footer">
				<?php include("footer.php"); ?>
			</div>
		</div>
	</body>
</html>