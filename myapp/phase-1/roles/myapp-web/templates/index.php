<?php

    require_once('config.inc.php');

    // Create connection
    $conn = new mysqli($database_host, $database_user, $database_pass);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    echo "Connected successfully";

?>
