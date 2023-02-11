<?php
    
    include "dbConnect.php";
    
    $sql = "SELECT id, nome, email, senha FROM Usuario";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " " . $row["email"]. " ".$row["senha"] ."<br>";
    }
    } else {
        echo "0 results";
    }
    
    $conn->close(); 
    
?>