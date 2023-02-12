<?php
    session_abort();

    $data = array("success" => true);
    header("Content-Type: application/json");
    echo json_encode($data);
    
    exit();    
?>