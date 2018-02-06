<html>
	<head>
		<style>
		
			#content{
				
				width: 100%;
				height: 100%;
			}
			
			#main{
				width: 100%;
				height: 100%;
				
			}
			table {
				
				width: 100%:
				height: 100%;
				table-layout: fixed;
			}
			
			table tr{
				
				width: 100%:
				height: 100%;
			}
			
			table tr td{
				
				width: 33%;
				height: 50%;
				top: 0;
				vertical-align: top;
			}
			
			table tr td img{
				
				width:100%; 
				height:100%;
				display: block;
				position: relative;
			}
		</style>
		<?php include("header.php"); ?>
	<head>
	<body>
		<div id="content">
			<?php include("nav.php"); ?>
			<br>
			<div id="main">
				<table>
					<tr>
						<td>
							<div class="holder">
								<img src="images/Astounding_facts.png" id="image"></img>
								<div id="title">
									<strong>Astounding Facts!</strong>
								</div>
								<a href="facts.php">
									<div class="middle">
										<div class="text">
											Learn some astounding facts about The Bloodhound Project!
										</div>
									</div>
								</a>
							</div>
						</td>
						<td>
							<div class="holder">
								<img src="images/inspire.png" id="image"></img>
								<div id="title">
									<strong>Oracle Academy</strong>
								</div>
								<a href="http://www.bloodhoundssc.com/news/bloodhound-education-teams-oracle-academy">
									<div class="middle">
										<div class="text">
											Visit the Oracle & Bloodhound Academy!
										</div>
									</div>
								</a>
							</div>
						</td>
						<td>
							<div class="holder">
								<img src="images/video_gallery.png" id="image"></img>
								<div id="title">
									<strong>Video Gallery</strong>
								</div>
								<a href="videos.php">
								<div class="middle">
									<div class="text">
										Visit the video gallery and watch Andy Green from within the Bloodhound vechicle!
									</div>
								</div>
								</a>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<div class="holder">
								<img src="images/data.png" id="image"></img>
								<div id="title">
									<strong>Bloodhound Data</strong>
								</div>
								<div class="middle">
									<div class="text">
										Go to Oracle's data page where you can view and download data collected from various test runs!
									</div>
								</div>
							</div>
						</td>
						<td>
							<div class="holder">
								<img src="images/cgi.png" id="image"></img>
								<div id="title">
									<strong>CGI Render</strong>
								</div>
								<a href="cgi.php">
									<div class="middle">
										<div class="text">
											View a Computer Generated Version of the Bloodhound vehicle! You can also watch it on one of its test runs in 3D!
										</div>
									</div>
								</a>
							</div>
						</td>
						<td>
							<div class="holder">
								<img src="images/bh_team.png" id="image"></img>
								<div id="title">
									<strong>Meet The Team</strong>
								</div>
									<div class="middle">
										<div class="text">
											The Bloodhound project inspires global uptake of STEM subjects and races towards 1000mph with Oracle.
										</div>
									</div>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<?php include("footer.php"); ?>
		</div>
	</body>
</html>