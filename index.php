<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conn MySQL</title>
</head>
<body>
    <!--INSERT-->
    <form action="processa_form.php" method="post">
        <label for="name">Inserir tarefa:</label>
        <input type="text" name="tarefa" id="tarefa">

        <label for="prazo">Prazo:</label>
        <input type="date" name="prazo" id="prazo">

        <input type="submit" value="Add tarefa">
    </form>

    <!--LOAD-->
    <form action="consulta.php" method="post">
        <input type="submit" value="Consultar Dados">
    </form>

    
    
</body>
</html>


