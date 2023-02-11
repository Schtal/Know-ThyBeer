<?php
    include "dbConnect.php";

    $data = array("nome" => logar($_POST["user"], $_POST["pass"], $conn), "email" => $_POST["user"]);
    header("Content-Type: application/json");
    echo json_encode($data);

    function logar($email, $senha, $conn){
        
        $sql = "SELECT nome FROM Usuario WHERE email = '$email' AND senha = md5('$senha')";
        $result = $conn->query($sql);
        $nome = false;

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $nome = $row["nome"];
            }
        }
        return $nome;
        
    }
    $conn->close(); 
    
    exit();    
?>