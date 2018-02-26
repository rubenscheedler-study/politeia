<?php
    require_once("model/connector.php");
    require_once("model/stateSubject.php");
    //TODO authentication
    $connector = new Connector;
    $c = $connector->getConnection();
    
    echo json_encode(StateSubject::GetAllForUser($c,(int)$_POST["id"]));
?>