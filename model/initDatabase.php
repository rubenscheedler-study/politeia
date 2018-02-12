<?php
    require_once("connector.php");
    
    $conn = new Connector;
    $conn = $conn->getConnection();
    
    try {
        $sql = file_get_contents('model/generate_db.sql');
        $conn->query($sql);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>