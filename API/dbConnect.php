<?php
    $servername = "sql10.freemysqlhosting.net";
    $username = "sql10596520";
    $password = "hKLjJrddLl";
    $dbName = "sql10596520";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbName);
    $conn -> set_charset("utf8");

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
   
?>