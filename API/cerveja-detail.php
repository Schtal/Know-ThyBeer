<?php
    include "dbConnect.php";

    $data = array("cerveja" => getCervejaDetail($_POST["id"], $_POST["usuario"], $conn));
    header("Content-Type: application/json");
    echo json_encode($data);
    
    
    function getCervejaDetail($id, $usuario, $conn) {
        $sql = "SELECT Cerveja.id as id, Cerveja.nome AS nome, Cerveja.descricao, Cerveja.foto, Comida.nome AS comida, favorito_usuario_cerveja.id as favorito FROM Cerveja INNER JOIN Cerveja_Comida ON Cerveja.id = Cerveja_Comida.cerveja_id INNER JOIN Comida ON Cerveja_Comida.comida_id = Comida.id LEFT JOIN favorito_usuario_cerveja ON (favorito_usuario_cerveja.cerveja = '$id' AND favorito_usuario_cerveja.usuario =  '$usuario') WHERE Cerveja.id = '$id'";
        
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