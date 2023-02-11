<?php
    
    include "dbConnect.php";
    $senha = "senha1234";
    $email = "josedasilva@knowthybeer.com";
    
    $sql = "SELECT nome FROM Usuario WHERE email = '$email' AND senha = md5('$senha')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "Name: " . $row["nome"];
        }
    } else {
        echo "0 results";
    }
    
    $conn->close(); 
    
?>