<html>
	<head>
		<!-- self -->
		<?php include("header.php"); ?>
		<link rel="stylesheet" href="CSS/data.css"/>
		<script>
			function download_raw(){
				
				alert("Bloodhound raw data will now download");
			}
			
			function download_agg(){
				
				alert("Bloodhound aggregate data will now download");
			}						
		</script>
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
			<div class="graphFrame">
				<iframe width="100%" height="100%" src="http://130.61.25.101:9704/va/ui/project.jsp?pageid=visualAnalyzer&reportmode=presentation&reportpath=%2Fshared%2FBloodhound%2FPublic%2FBloodhound%20Dashboard%20-%20Web&amp;anonymous=true"></iframe>
			</div>
			<div class="dataFrame">
				<table class="table-container">
					<tr>
						<td class="top">
							<table class="description">
								<tr>
									<td>
										Welcome to the Data Visualisation page! To the left there are a series of visuals 
										using data from the Newquay test runs completed in October 2017. You can select runs
										on the top left hand table and the data will update in each visual. Double click a 
										visual to expand its graph to interact with it and find out more.
										<br><br>
										<div class="quote">"Failure is the key to success; each mistake teaches us 
										something."</div> - Morihel Ueshiba, Athlete
										<br></br>
										You man notice that in some of the visulisations there are gaps. 
										This is due to the sensors not firing the data packets.
										<br><br>
										<div class="download_title">Download the Data</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td class="bottom">
							<table class="download">
								<tr>
									<td>
										<img id="download_img" src="images/download.png" onmouseover="this.src='images/download_hover.png';" onmouseout="this.src='images/download.png';" onclick="download_raw()"></img>Raw Data
									</td>
									<td>
										<img id="download_img" src="images/download.png" onmouseover="this.src='images/download_hover.png';" onmouseout="this.src='images/download.png';" onclick="download_agg()"></img> Summarised Data
									</td>
								</tr>
								<tr>
									<td>
										<img id="desc_img" src="images/description.png" onmouseover="this.src='images/description_hover.png';" onmouseout="this.src='images/description.png';" onclick="download_raw()"></img> Sensor Description
									</td>
									<td>
										<img id="desc_img" src="images/description.png" onmouseover="this.src='images/description_hover.png';" onmouseout="this.src='images/description.png';"onclick="download_agg()"></img>Data Guide
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>