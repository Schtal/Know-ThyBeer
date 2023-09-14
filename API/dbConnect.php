<?php
    //Select environment
    $environment = "live"; //live or local
    
    //for local use this
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "knowthybeer";
    $environment = "live";

    if ($environment == "live") {
    //this below for "live"
    
        $servername = "sql11.freemysqlhosting.net";
        $username = "sql11646456";
        $password = "86KAhIfP1V";
        $dbName = "sql11646456";
    
    }

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbName);
    $conn -> set_charset("utf8");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
   
?>
