<?php
    require_once("conn.php");

    $id_del = $_POST['id_del'];

    if(
        isset($id_del) && !empty($id_del)
    ) {
        // Prepara a instrução SQL para excluir o registro
        $sql = "DELETE FROM lista WHERE id=?";

        // Prepara a declaração
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Vincula o parâmetro
            $stmt->bind_param("i", $id_del);

            // Executa a declaração
            if ($stmt->execute()) {
                echo "Registro excluído com sucesso!";
            } else {
                echo "Erro ao excluir registro: " . $stmt->error;
            }

            // Fecha a declaração
            $stmt->close();
        } else {
            echo "Erro na preparação da declaração: " . $conn->error;
        }
    }

    $conn->close();
?>