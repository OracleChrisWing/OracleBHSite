<html>
	<head>
        <style>
        #overlay {
    position: fixed;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(255,255,255, 0.5);
    z-index: 2;
    cursor: pointer;
}
#title1{
    position: absolute;
    top: 15%;
    left: 50%;
    font-size: 50px;
    color: orange;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}    
#text{
    position: absolute;
    top: 25%;
    left: 25%;
    font-size: 40px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}    
#text1{
    position: absolute;
    top: 25%;
    left: 75%;
    font-size: 40px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}    
#text2{
    position: absolute;
    top: 50%;
    left: 25%;
    font-size: 40px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}    
#text3{
    position: absolute;
    top: 50%;
    left: 75%;
    font-size: 40px;
    color: white;
    transform: translate(-50%,-50%);
    -ms-transform: translate(-50%,-50%);
}    
        
        </style>
		<!-- self -->
		<?php include("header.php"); ?>
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
			<br>
        
        <div id="overlay" onclick="off()">
            <div id="title1">Download data from the car<a href="#"></div>
  <div id="text">Raw data<a href="#"></div>
  <div id="text1">Summarised data<a href="#"></div>
            <div id="text2">Sensor description<a href="#"></div>
            <div id="text3">Data guide<a href="#"></div>
</div>

            	<a name="image"></a>
                            <section class="image">
                                <div id="overlay" onclick="off()"></div>
                                <div style="padding:20px">
				<img onclick="on()" width="24%" height="82.5%" img align="right"  src="https://www.theglobeandmail.com/resizer/-4ECuLzX_PpkKoMgf7xUP344rFw=/1200x0/filters:quality(80)/arc-anglerfish-tgam-prod-tgam.s3.amazonaws.com/public/PMQSOZENMBGF3D5IEFNKMIR7YY"></a> 
                                
            
							<iframe width="75%" height="82%" src="http://130.61.25.101:9704/va/ui/project.jsp?pageid=visualAnalyzer&reportmode=presentation&reportpath=%2Fshared%2FBloodhound%2FPublic%2FBloodhound%20Dashboard"></iframe>

						</div>
					</div>
				</div>
			</div>
<br>
			<?php include("footer.php"); ?>
		</div>
<script>
function on() {
    document.getElementById("overlay").style.display = "block";
}

function off() {
    document.getElementById("overlay").style.display = "none";
}
</script>
	</body>
</html>