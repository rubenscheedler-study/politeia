<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
<title>Politeia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/netherlands_map.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/initialize.js"></script>
<script type="text/javascript" src="js/tweedeKamer.js"></script>
<script type="text/javascript" src="js/partyOverview.js"></script>
</head>

<body class="game">
        <div class="header">
            <ul id="header-list">
                <li>POLITEIA</li>
                <li>D66</li>
                <li>turn 1</li>
            </ul>
        </div>
        
        
        <div class="padding-all">
            <div class="widget tweede-kamer-widget">
            <span class="widget-title">Tweede Kamer</span>
            <canvas id="tweede-kamer">
            </canvas>
            </div>
            
            <div id="map-netherlands-widget" class="widget">
                <span class="widget-title">Nederland</span>
                <?php
                    include("netherlands_map.php");
                ?>
            </div>
            
            <div id="party-overview-widget" class="widget">
                <span class="widget-title">Partijen</span>
                <?php
                    include("party_overview.php");
                ?>
            </div>
        </div>

</body>
</html>