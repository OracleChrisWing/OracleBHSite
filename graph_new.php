<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="graph_new/tests.css">
        <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="http://d3js.org/d3.v3.js" charset="utf-8"></script>
        <script src="graph_new/epoch.js"></script>
        <link rel="stylesheet" type="text/css" href="graph_new/epoch.css">

        <script>
            var nextTime = (function() {
                var currentTime = parseInt(new Date().getTime() / 1000);
                return function() { return currentTime++; }
            })();
        </script>
    </head>
    <body>

        <!-- Test 3 -->
        <div id="test-3" class="test">
            <div class="epoch"></div>
        </div>
		
		<!--	Graph plotting code moved to: video_logic.js -->
    </body>
</html>
