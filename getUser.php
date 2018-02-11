<?php
    require_once("model/connector.php");
    require_once("model/user.php");
    //TODO authentication
    $connector = new Connector;
    $c = $connector->getConnection();
    
    echo json_encode(User::Create($c,(int)$_POST["id"]));
?>