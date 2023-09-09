<?php
    include "dbConnect.php";

    $data = array("result" => search($_POST["search"], $conn));
    header("Content-Type: application/json");
    echo json_encode($data);
    
    
    function search($term, $conn) {
        $sql = "SELECT * FROM Cerveja  WHERE descricao LIKE '%$term%'";
        $result = $conn->query($sql);
        $busca = array();
        

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                $row["tipo"] = "beer";
                array_push($busca, $row);
            }
            
        } 


        $sql = "SELECT * FROM Comida  WHERE descricao LIKE '%$term%'";
        $result = $conn->query($sql);
               

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                $row["tipo"] = "food";
                array_push($busca, $row);
            }
            
        } 
        



        return $busca;
        
    }

    $conn->close(); 
    
    exit();

?>