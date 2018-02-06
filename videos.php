<html>
	<head>
		<!-- self -->
		<?php include("header.php"); ?>		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="JS/i_script.js"></script>
		<script type="text/javascript" src="JS/swapsie.js"></script>
		<link rel="stylesheet" href='CSS/videos.css' />
		<link rel="stylesheet" href="CSS/i_style.css"/>
	</head>
	<body>	
		<div id="content">
			<?php include("nav.php"); ?>
			<div id="return">
				<a href="./">
					<img src="images/return-icon.png"></img>Return to landing page...
				</a>
			</div>
			<br>
			<div class="main_window">
				<div class="container">
					<!-- MAIN VIDEO FEED -->
					<div class="main">
						<div id="main">
							<iframe src="https://www.youtube.com/embed/ox0vDsMMo3Y?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
						</div>
					</div>
					<div class="option_panel">
						<div class="section">
							<a href="#" onclick="switchDivs('div_1')">
								<div class="feed" id="div_1">
									<!-- DUMMY; TO BE REPLACED -->
									<iframe src="https://www.youtube.com/embed/7D4-49pkEWY" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
								</div>
								<div class="switch">
									<img src="Images/switch_icon.png"></img>
								</div>
							</a>
						</div>
						<div class="section">
						<a href="#" onclick="switchDivs('div_2')">
							<div class="feed" id="div_2">
								<!-- DUMMY; TO BE REPLACED -->
								<iframe src="https://www.youtube.com/embed/uk56oPTr7co?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="switch">
								<img src="Images/switch_icon.png"></img>
							</div>
						</a>
						</div>
						<div class="section">
						<a href="#" onclick="switchDivs('div_3')">
							<div class="feed" id="div_3">
								<!-- DUMMY; TO BE REPLACED -->
								<iframe src="https://www.youtube.com/embed/Mylca_onT_I?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
							</div>
							<div class="switch">
								<img src="Images/switch_icon.png"></img>
							</div>
						</a>
						</div>
						<!--
						<div class="info">
							<div id="overlay">
								<div id="image_container">
									<!-- Once a popup is clicked, the larger version of the image is displayed here for the user to view.
								</div>
							</div>
							<div class="popups">
								<!-- Contains the mini-popups.
							</div>
						</div>
						-->
					</div>
				</div>
			</div>
			<?php include("footer.php"); ?>
		</div>
	</body>
</html>