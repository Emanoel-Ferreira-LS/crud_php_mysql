<?php
    require_once("conn.php");
    
    $date = date('Y-m-d');

    if(
        isset($_POST['update_id']) && !empty($_POST['update_id']) &&
        isset($_POST['new_tarefa']) && !empty($_POST['new_tarefa']) &&
        isset($_POST['new_prazo']) && !empty($_POST['new_prazo']) &&
        isset($date) && !empty($date)
    ) {
        $id = $_POST['update_id'];
        $new_tarefa = $_POST['new_tarefa'];
        $new_prazo = $_POST['new_prazo'];
        $data_atual = $date;

        // Prepara a instrução SQL para atualizar os dados
        $sql = "UPDATE lista SET data_criacao=?, prazo=?, tarefa=? WHERE id=?";


        // Prepara a declaração
        $stmt = $conn->prepare($sql);


        if ($stmt) {
            // Vincula os parâmetros
            $stmt->bind_param("sssi", $data_atual, $new_prazo, $new_tarefa, $id);


            // Executa a declaração
            if ($stmt->execute()) {
                echo "Dados atualizados com sucesso!";
            } else {
                echo "Erro ao atualizar dados: " . $stmt->error;
            }


            // Fecha a declaração
            $stmt->close();
        } else {
            echo "Erro na preparação da declaração: " . $conn->error;
        }


    } else {
        echo "Os campos não podem estar vazios";
    }



    $conn->close();
?>