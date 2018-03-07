<head>
	<link class="include" rel="stylesheet" type="text/css" href="graph/jquery.jqplot.min.css" />
	<link rel="stylesheet" type="text/css" href="graph/jqplot.min.css" />
	<script class="include" type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
	<div id="chart1" style=" position: relative; max-width:90%; max-height:80%"></div>
	<script class="code" type="text/javascript">
		$(document).ready(function () {
			var s1 = [[1, 10],[2, 20],[3, 30],[4, 50],[5, 60],[6, 90],[7, 120],[8, 170],[9, 210],[10, 150],[11, 80],[12, 10]];

			plot1 = $.jqplot("chart1", [s1], {
				// Turns on animatino for all series in this plot.
				animate: true,
				// Will animate plot on calls to plot1.replot({resetAxes:true})
				animateReplot: true,
				cursor: {
					show: true,
					zoom: true,
					looseZoom: true,
					showTooltip: false
				},
				series:[
					{
						pointLabels: {
							show: true
						},
						renderer: $.jqplot.BarRenderer,
						showHighlight: false,
						rendererOptions: {
							// Speed up the animation a little bit.
							// This is a number of milliseconds.  
							// Default for bar series is 3000.  
							animation: {
								speed: 2500
							},
							barWidth: 15,
							barPadding: -15,
							barMargin: 0,
							highlightMouseOver: false
						}
					}, 
					{
						rendererOptions: {
							// speed up the animation a little bit.
							// This is a number of milliseconds.
							// Default for a line series is 2500.
							animation: {
								speed: 2000
							}
						}
					}
				],
				axesDefaults: {
					pad: 0
				},
				axes: {
					// These options will set up the x axis like a category axis.
					xaxis: {
						label: 'Time (min)',
						tickInterval: 1,
						drawMajorGridlines: false,
						drawMinorGridlines: false,
						drawMajorTickMarks: true,
						rendererOptions: {
						tickInset: 0,
						minorTicks: 1
					}
					},
					yaxis: {
						label: 'Speed (mph)',
						rendererOptions: {
							forceTickAt0: true
						}
						
					}
				},
				highlighter: {
					show: true, 
					showLabel: true, 
					tooltipAxes: 'y',
					sizeAdjust: 7.5 , tooltipLocation : 'ne'
				}
			});
		  
		});
	</script>
	<script class="include" type="text/javascript" src="graph/jquery.jqplot.min.js"></script>
</body>