<?php
    include "dbConnect.php";

    $data = array("items" => getFavoritos( $_POST["usuario"], $conn));
    header("Content-Type: application/json");
    echo json_encode($data);
    
    
    function getFavoritos($usuario, $conn) {
        $sql = "SELECT Cerveja.id as id, Cerveja.nome AS nome, Cerveja.foto  FROM Cerveja JOIN favorito_usuario_cerveja ON Cerveja.id = favorito_usuario_cerveja.cerveja WHERE favorito_usuario_cerveja.usuario = '$usuario'";
        
        $result = $conn->query($sql);
        $items = array();
        

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                array_push($items, $row);
            }
        } else {
            array_push($items, false);
        }
        return $items; 

        
        
    }

    $conn->close(); 
    
    exit();

?>