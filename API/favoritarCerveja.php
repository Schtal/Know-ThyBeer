<?php
    include "dbConnect.php";

    header("Content-Type: application/json");
    $cerveja =  $_POST['item'];
    $usuario = $_POST ['usuario'];

    $data = array("response" => toggleFavorito($usuario, $cerveja, $conn));
    echo json_encode($data);


    function toggleFavorito($usuario, $cerveja, $conn) {
        // $sql = "INSERT INTO favorito_usuario_cerveja (cerveja, usuario) VALUES ('$cerveja', '$usuario')";

        $sql = "SELECT id FROM favorito_usuario_cerveja WHERE usuario = '$usuario' AND cerveja = '$cerveja'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            
            while($row = $result->fetch_assoc()) {
                removeFavorito($row['id'], $conn);
                $feedback = "Esta cerveja já está favoritada, vamos remover";                
            }
            
        } else {
            addFavorito($usuario, $cerveja, $conn);
            $feedback = 'Esta cerveja não está favoritada, vamos adicionar';
        }

        return $feedback;        
    }

    function removeFavorito($id, $conn) {
        $sql = "DELETE FROM favorito_usuario_cerveja WHERE id = '$id'";
        $conn->query($sql);
    } 

    function addFavorito($usuario, $cerveja, $conn) {
        $sql = "INSERT INTO favorito_usuario_cerveja (cerveja, usuario) VALUES ('$cerveja', '$usuario')";
        $conn->query($sql);

    }
    
    


    $conn->close(); 
    
    exit();

?>