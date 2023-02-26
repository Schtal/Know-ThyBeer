<?php
    include "dbConnect.php";

    $data = array("cerveja" => getCervejaDetail($_POST["id"], $conn));
    header("Content-Type: application/json");
    echo json_encode($data);
    
    
    function getCervejaDetail($id, $conn) {
        $sql = "SELECT Cerveja.nome AS nome, Cerveja.descricao, Cerveja.foto, Comida.nome AS comida FROM Cerveja INNER JOIN Cerveja_Comida ON Cerveja.id = Cerveja_Comida.cerveja_id INNER JOIN Comida ON Cerveja_Comida.comida_id = Comida.id WHERE Cerveja.id = '$id'";
        
        $result = $conn->query($sql);
        $cerveja = array();
        $comida = array();

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                $cerveja = $row;
                array_push($comida, $row["comida"]);
            }
            $cerveja["comida"] = $comida;
        } else {
            $cerveja = 'Cerveja não encontrada.';
        }
        return $cerveja;
        
    }

    $conn->close(); 
    
    exit();

?>