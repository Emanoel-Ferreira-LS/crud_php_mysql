<form action="delete.php" method="post">
    <label for="del">Delete registro de id:</label>
    <input type="number" name="id_del" id="id_del">

    <input type="submit" value="Delete">
</form>

<br>

<form action="atualize.php" method="post">
    <label for="update_id">Atualizar registro de id:</label>
    <input type="number" name="update_id" id="update_id"><br>

    <label for="new_tarefa">Inserir Nova tarefa:</label>
    <input type="text" name="new_tarefa" id="tarefa"><br>

    <label for="new_prazo">Novo Prazo:</label>
    <input type="date" name="new_prazo" id="prazo"><br>

    <input type="submit" value="Update">
</form>

<br><br>

<?php
    require_once("conn.php");

    // Consulta SQL para obter dados
    $sql = "SELECT id, data_criacao, prazo, tarefa FROM lista";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row['id'] . "<br>";
            echo "data_criacao: " . $row['data_criacao'] . "<br>";
            echo "prazo: " . $row['prazo'] . "<br>";
            echo "tarefa: " . $row['tarefa'] . "<br>";
            echo "<hr>";
        }
    } else {
        echo "Nenhum dado encontrado.";
    }

    $conn->close();
?>