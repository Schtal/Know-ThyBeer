<?php
    include "dbConnect.php";

    $data = array("comida" => getComidaDetail($_POST["id"], $conn));
    header("Content-Type: application/json");
    echo json_encode($data);
    
    
    function getComidaDetail($id, $conn) {
        $sql = "SELECT Comida.nome AS nome, Comida.descricao, Comida.foto, Cerveja.nome AS cerveja FROM Comida INNER JOIN Cerveja_Comida ON Comida.id = Cerveja_Comida.comida_id INNER JOIN Cerveja ON Cerveja_Comida.cerveja_id = Cerveja.id WHERE Comida.id = '$id'";
        
        $result = $conn->query($sql);
        $comida = array();
        $cerveja = array();

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                $comida = $row;
                array_push($cerveja, $row["cerveja"]);
            }
            $comida["cerveja"] = $cerveja;
        } else {
            $comida = 'Comida não encontrada.';
        }
        return $comida;
        
    }

    $conn->close(); 
    
    exit();

?>