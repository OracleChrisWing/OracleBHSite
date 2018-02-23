

    <meta charset="utf-8" />
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" href="CSS/timeline_css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="CSS/timeline_css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="CSS/i_style.css">
	
    <script src="JS/timeline_js/modernizr.js"></script> <!-- Modernizr -->
    <script src="JS/timeline_js/jquery-2.1.4.js"></script>
    <script src="JS/timeline_js/jquery.mobile.custom.min.js"></script>
    <script src="JS/timeline_js/jtline.js"></script>
	<script src="JS/i_script.js"></script>	

    <script type="text/javascript">
        $(document).ready(function () {
			
			// Default leave empty.
            var contentText = '';
			
            var myjSonObject = {
                "args": {

                },
                "dataArray": [
				  {
                      "isSelected": "",
                      "nextDistance": 1,
                      "title": "BLOODHOUND",
                      "subTitle": '<div class="content" id="content_frame_1"><a href="javascript:;" class="image_capture" id="content_frames/frame_1.png" onclick="on(1)"><img src="content_frames/frame_1.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "10:12", // 12:11
                      "pointCnt": "BLOODHOUND",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 6,
                      "title": "13 MPH",
                      "subTitle": '<div class="content" id="content_frame_2"><a href="javascript:;" class="image_capture" id="content_frames/frame_2.png" onclick="on(2)"><img src="content_frames/frame_2.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "11:12", // 12:11
                      "pointCnt": "13 MPH",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 12,
                      "title": "28 MPG",
                      "subTitle": '<div class="content" id="content_frame_3"><a href="javascript:;" class="image_capture" id="content_frames/frame_3.png" onclick="on(3)"><img src="content_frames/frame_3.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "12:12", // 12:11
                      "pointCnt": "28 MPG",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 18,
                      "title": "48 MPH",
                      "subTitle": '<div class="content" id="content_frame_4"><a href="javascript:;" class="image_capture" id="content_frames/frame_4.png" onclick="on(4)"><img src="content_frames/frame_4.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "13:12", // 12:11
                      "pointCnt": "48 MPH",
                      "bodyCnt": contentText
                  },
				  {
                      "isSelected": "",
                      "nextDistance": 24,
                      "title": "74 MPH",
                      "subTitle": '<div class="content" id="content_frame_5"><a href="javascript:;" class="image_capture" id="content_frames/frame_5.png" onclick="on(5)"><img src="content_frames/frame_5.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "14:12", // 10:12
                      "pointCnt": "74 MPH",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 30,
                      "title": "317 MPH",
                      "subTitle": '<div class="content" id="content_frame_6"><a href="javascript:;" class="image_capture" id="content_frames/frame_6.png" onclick="on(6)"><img src="content_frames/frame_6.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "15:12", // 12:11
                      "pointCnt": "317 MPH",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 36,
                      "title": "3000* C",
                      "subTitle": '<div class="content" id="content_frame_7"><a href="javascript:;" class="image_capture" id="content_frames/frame_7.png" onclick="on(7)"><img src="content_frames/frame_7.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "16:12", // 12:11
                      "pointCnt": "3000* C",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 42,
                      "title": "763 MPH",
                      "subTitle": '<div class="content" id="content_frame_8"><a href="javascript:;" class="image_capture" id="content_frames/frame_8.png" onclick="on(8)"><img src="content_frames/frame_8.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "17:12", // 12:11
                      "pointCnt": "763 MPH",
                      "bodyCnt": contentText
                  },
				  {
                      "isSelected": "",
                      "nextDistance": 48,
                      "title": "833 MPH",
                      "subTitle": '<div class="content" id="content_frame_9"><a href="javascript:;" class="image_capture" id="content_frames/frame_9.png" onclick="on(9)"><img src="content_frames/frame_9.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "18:12", // 10:12
                      "pointCnt": "833 MPH",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 54,
                      "title": "988 MPH",
                      "subTitle": '<div class="content" id="content_frame_10"><a href="javascript:;" class="image_capture" id="content_frames/frame_10.png" onclick="on(10)"><img src="content_frames/frame_10.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "19:12", // 12:11
                      "pointCnt": "988 MPH",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 60,
                      "title": "1050 MPH",
                      "subTitle": '<div class="content" id="content_frame_11"><a href="javascript:;" class="image_capture" id="content_frames/frame_11.png" onclick="on(11)"><img src="content_frames/frame_11.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "20:12", // 12:11
                      "pointCnt": "1050 MPH",
                      "bodyCnt": contentText
                  },
                  {
                      "isSelected": "",
                      "nextDistance": 66,
                      "title": "BLOODHOUND SSC",
                      "subTitle": '<div class="content" id="content_frame_12"><a href="javascript:;" class="image_capture" id="content_frames/frame_12.png" onclick="on(12)"><img src="content_frames/frame_12.png" style="max-width: 100%; max-height: 100%; position: absolute; left: 100%; top: 0%;"></img></a></div>',
                      "dateValue": "21:12", // 12:11
                      "pointCnt": "BLOODHOUND SSC",
                      "bodyCnt": contentText
                  }
                ]
            }

            var jtLine = $('.myjtline').jTLine({
                // -------- Ajax Call -----------------
                //callType: 'ajax',
                //url: 'js/data.json',
                // -------- jSon Object ---------------
                callType: 'jsonObject',
                structureObj: myjSonObject,
                // -------- Maaped Json Object --------
                //map: {
                //    "dataRoot": "/",
                //    "title": "taskTitle",
                //    "subTitle": "taskSubTitle",
                //    "dateValue": "assignDate",
                //    "pointCnt": "assignDate",
                //    "bodyCnt": "taskDetails"
                //},
                // ------------------------------------
                distanceMode: 'auto',// 'fixDistance' 'auto' 'predefinedDistance'
                eventsMinDistance: 120,// Consider It as Distance Unit "by Pixel"
                fixDistanceValue: 1, //  if eventsMinDistance = 60 & fixDistanceValue= 2 then the value is : 120 px
                firstPointMargin: 1,
                onPointClick: function (e) {
                    console.log(e);
                },
                formatTitle: function (title) {
                    return ' <h2><span style="color:white">&nbsp&nbsp&nbsp' + title + '</span></h2>';
                },
                formatSubTitle: function (subTitle) {
                    return '<br><br><span style="">' + subTitle + '</span>';
                },
                formatBodyContent: function (bodyCnt) {
                    return '<p><span style="color:#6a6a6a">' + bodyCnt + '</span></p>';
                }

            });
        });
    </script>
    <div class="myjtline">
		<!-- Timeline rendered here -->
    </div>
	<div id="overlay">
		<div id="image_container">
			<!-- Once a popup is clicked, the larger version of the image is displayed here for the user to view. -->
		</div>
	</div>