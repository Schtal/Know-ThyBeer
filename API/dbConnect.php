<?php
    //for local use this
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "knowthybeer";

    //this below for "live"
    /*
    $servername = "sql10.freemysqlhosting.net";
    $username = "sql10603066";
    $password = "ybLRd9uSVE";
    $dbName = "sql10603066";
    */

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbName);
    $conn -> set_charset("utf8");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
   
?>
