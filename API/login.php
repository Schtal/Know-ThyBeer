<?php
    include "dbConnect.php";

    $data =  logar($_POST["user"], $_POST["pass"], $conn);
    header("Content-Type: application/json");
    echo json_encode($data);

    function logar($email, $senha, $conn){
        
        $sql = "SELECT nome, id FROM Usuario WHERE email = '$email' AND senha = md5('$senha') AND active = TRUE ";
        $result = $conn->query($sql);
        $nome = false;

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $nome = $row["nome"];
                $id = $row["id"];
                session_start();
                $_SESSION["user"] = $nome;
            }
        }
        return array("nome" => $nome, "id" => $id);
        
    }
    $conn->close(); 
    
    exit();    
?>