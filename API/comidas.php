<?php
    include "dbConnect.php";

    $data = getComidas($conn);
    header("Content-Type: application/json");
    echo json_encode($data);

    function getComidas($conn){
        
        $sql = "SELECT id, nome, foto FROM Comida";
        $result = $conn->query($sql);
        $comidas = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($comidas, $row);
            } 
        } else {
            $cervejas = 'Nenhuma comida encontrada.';
        }
        return $comidas;
    }        
    
    $conn->close(); 
    
    exit();    
?>