<?php
    include "dbConnect.php";

    $data = cadastrar($_POST["user"], $_POST["name"], $_POST["pass"], $conn);
    header("Content-Type: application/json");
    echo json_encode($data);

    function cadastrar($email, $name, $pass, $conn){
        $retorno = [
            "name" => $name,
            "email" => $email,
            "pass" => $pass
            
        ];
        $activationCode = MD5(RandomString());
        $sql = "INSERT INTO Usuario (nome, email, senha, active, activation_code) VALUES ('$name', '$email', md5('$pass'), '1', '$activationCode')";
        $conn->query($sql);

        sendEmail($activationCode);

        return true;

  
        
        //Funcao para cadastrar        
    }


    function RandomString()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }


    function sendEmail($activationCode) {
         // Always set content-type when sending HTML email
         $headers = "MIME-Version: 1.0" . "\r\n";
         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
         // More headers
         $headers .= 'From: <webmaster@example.com>' . "\r\n";
         $headers .= 'Cc: myboss@example.com' . "\r\n";

          // the message
          $msg = "
          Click in the link below in order to activate your user
  
          <a href='http://localhost/Know-ThyBeer/src/activate?actvCd=$activationCode'> Ativar minha conta </a>
          ";
  
          // use wordwrap() if lines are longer than 70 characters
          $msg = wordwrap($msg,70);
  
          // send email
         mail("arieldias@gmail.com","Know Thy Beer - Ativar conta",$msg);

    }
    $conn->close(); 
    
    exit();    
?>