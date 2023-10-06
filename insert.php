<?php
    require_once("conn.php");

    $sql = "INSERT INTO lista (data_criacao,prazo,tarefa) VALUES (?,?,?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        // Vincula o valor da variável $tarefa à declaração
        $stmt->bind_param("sss", $data_atual,$prazo,$tarefa);

        // Executa a declaração
        if ($stmt->execute()) {
            echo "Valor inserido com sucesso!";
        } else {
            echo "Erro ao inserir valor: " . $stmt->error;
        }

        // Fecha a declaração
        $stmt->close();
    } else {
        echo "Erro na preparação da declaração: " . $conn->error;
    } 

$conn->close();
?>