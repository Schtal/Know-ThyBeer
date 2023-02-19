<?php
    include "dbConnect.php";

    $data = getCervejas($conn);
    header("Content-Type: application/json");
    echo json_encode($data);

    function getCervejas($conn){
        
        $sql = "SELECT id, nome, foto FROM Cerveja";
        $result = $conn->query($sql);
        $cervejas = array();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                array_push($cervejas, $row);
            } 
        } else {
            $cervejas = 'Nenhuma cerveja encontrada.';
        }
        return $cervejas;
    }        
    
    $conn->close(); 
    
    exit();    
?>