<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    include("model/initDatabase.php");
?>
<!DOCTYPE html>
<html>

<head>
<title>Politeia</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Login Form Widget Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/netherlands_map.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/percentageBar.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/percentageBar.js"></script>

<script type="text/javascript" src="js/initialize.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript" src="js/popups.js"></script>
<script type="text/javascript" src="js/tweedeKamer.js"></script>
<script type="text/javascript" src="js/partyOverview.js"></script>
<script type="text/javascript" src="js/employees.js"></script>
<script type="text/javascript" src="js/stateOfState.js"></script>
</head>

<body class="game">
        <div class="header">
            <ul id="header-list">
                <li id="header-logo-list-item"><div id="header-logo"></div></li>
                <li>D66</li>
                <li>turn 1</li>
                <li>
                    <button id="next-turn-button" class="btn">Volgende Beurt</button>
                </li>
            </ul>
        </div>
        
        <!-- SIDE BARS -->
        <div class="sidebar" id="sidebar-left">
            <div class="item">
                <div id="sidebar-events" data-id="events-widget" class="icon" title="Gebeurtenissen."></div>
            </div>
            <div class="item">
                <div id="sidebar-state-of-state" data-id="state-of-state-widget" class="icon" title="De staat van het land."></div>
            </div>
            <div class="item">
                <div id="sidebar-tweede-kamer" data-id="tweede-kamer-widget" class="icon" title="Tweede kamer verdeling."></div>
            </div>
            <div class="item">
                <div id="sidebar-employees" data-id="employees-widget" class="icon" title="Medewerkers verdeling."></div>
            </div>
            
        </div>
        
        
                    
        <div class="padding-all">
            
            <div class="row">
                <div id="left-column" class="col-4">
                    <!-- SIDE BAR LEFT POP OUTS -->
                    <!-- TWEEDE KAMER -->
                    <div id="events-widget" class="widget sidebar-left-widget">
                        <span class="widget-title">Gebeurtenissen</span>
                        <div id="events-container">
                        
                        </div>
                    </div>
                    <!-- TWEEDE KAMER -->
                    <div id="tweede-kamer-widget" class="widget sidebar-left-widget">
                        <span class="widget-title">Tweede Kamer</span>
                        <canvas id="tweede-kamer"></canvas>
                    </div>
                    
                    <!-- STAAT VAN HET LAND -->
                    <div id="state-of-state-widget" class="widget sidebar-left-widget">
                                    <span class="widget-title">Staat van het Land</span>
                                    <?php
                                        //include("party_overview.php");
                                    ?>
                    </div>
                    
                    <!-- EMPLOYEES -->
                    <div id="employees-widget" class="widget sidebar-left-widget">
                        <span class="widget-title">Medewerkers</span>
                        <div class="form-group row">
                            <div class="col-sm-3">
                                <p>Fractiegrootte:</p>
                            </div>
                            <div class="col-sm-9">
                                <span id="fractiegrootte"></span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mannetjes" class="col-sm-3 col-form-label">'Mannetjes'</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control employeeValue" id="mannetjes" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pr" class="col-sm-3 col-form-label">PR-mensen</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control employeeValue" id="pr" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="campagnevoerders" class="col-sm-3 col-form-label">Campagnevoerders</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control employeeValue" id="campagnevoerders" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="wettenbouwers" class="col-sm-3 col-form-label">Wettenbouwers</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control employeeValue" id="wettenbouwers" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="regeringscritici" class="col-sm-3 col-form-label">Regeringscritici</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control employeeValue" id="regeringscritici" placeholder="...">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                              <button class="btn btn-primary" id="employeesSaveButton">Doorvoeren</button>
                            </div>
                          </div>
                    </div>
                </div>
                <!-- MAIN AREA -->
                <div id="main-column" class="col-8">
                    <div id="world-map-widget" class="widget">
                        <span class="widget-title">Wereld Overzicht</span>
                        <?php
                            include("world_map.php");
                        ?>
                    </div>
                </div>
                
            </div>
        
            
            
            
            
            
        </div>
        
        <!-- POP UPS -->
        <div id="dark-overlay"></div>
        
        <div class="popup" id="employees-popup">
            <div class="popup-close">X</div>
            
        </div>
</body>
</html>