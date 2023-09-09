<?php
    include "dbConnect.php";

    header("Content-Type: application/json");
    $comida =  $_POST['item'];
    $usuario = $_POST ['usuario'];

    $data = array("response" => toggleFavorito($usuario, $comida, $conn));
    echo json_encode($data);


    function toggleFavorito($usuario, $comida, $conn) {
        // $sql = "INSERT INTO favorito_usuario_comida (comida, usuario) VALUES ('$comida', '$usuario')";

        $sql = "SELECT id FROM favorito_usuario_comida WHERE usuario = '$usuario' AND comida = '$comida'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                removeFavorito($row['id'], $conn);
                $feedback = "Esta comida já está favoritada, vamos remover";                
            }
            
        } else {
            addFavorito($usuario, $comida, $conn);
            $feedback = 'Esta comida não está favoritada, vamos adicionar';
        }

        return $feedback;        
    }

    function removeFavorito($id, $conn) {
        $sql = "DELETE FROM favorito_usuario_comida WHERE id = '$id'";
        $conn->query($sql);
    } 

    function addFavorito($usuario, $comida, $conn) {
        $sql = "INSERT INTO favorito_usuario_comida (comida, usuario) VALUES ('$comida', '$usuario')";
        $conn->query($sql);

    }
    
    


    $conn->close(); 
    
    exit();

?>