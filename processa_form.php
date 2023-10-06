<?php
$date = date('Y-m-d');

if(
    isset($_POST['tarefa']) && !empty($_POST['tarefa']) &&
    isset($_POST['prazo']) && !empty($_POST['prazo']) &&
    isset($date) && !empty($date)
) {
    $tarefa = $_POST['tarefa'];
    $prazo = $_POST['prazo'];
    $data_atual = $date;
} else {
    echo "Os campos não podem estar vazios";
}

require("insert.php");
?>