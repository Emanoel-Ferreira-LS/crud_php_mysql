<?php 
    // Conexão com o banco de dados
    $conn = new mysqli('localhost', 'root', 'senha', 'todolist');

    if($conn->connect_error){
        die("Erro na conexão: ".$conn->connect_error);
    } 
?>