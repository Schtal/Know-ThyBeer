<?php
    
    $data = array("nome" => "nome nome", "email" => $_POST["user"]);
    // $tryLogin = logar($_POST["user"], $_POST["pass"]);
    header("Content-Type: application/json");
    echo json_encode($data);
    exit();

    include "dbConnect.php";
    
    function logar($email, $senha){
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
    
?>