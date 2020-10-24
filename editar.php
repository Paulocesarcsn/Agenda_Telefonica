<?php include "php/funcoes.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <title>Editar dados</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Telefone secundário</th>
            <th>Status</th>
            <th>ID</th>
            <th>Ação</th>
        </tr>
            <?php ListarTodosPraEdita(); ?>
    </table>
        <div id="return">
            <button onclick="location.href='index.html'" name="retornar" type="button">Retornar ao menu</button>
        </div>
</body>
</html>