<?php
include("../protected.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro de solicitações</title>
</head>

<body>
    <div class="container">
        <form action="Control/CreateSolicitacao.php" method="post">
            <h1>Criar uma solicitação</h1>
            <br>
            <br>
            <input type="text" name='nome' placeholder="Digite seu nome">
            <br>
            <br>
            <textarea name="textarea" cols="30" rows="10" placeholder="Digite seu Problema"></textarea>
            <br>
            <button type="submit">Enviar solicitação</button>
        </form>

        <br>
        <a href="listarSolicitacoes.php">Ver listas de solicitacoes</a>
        <br>
        <br>
        <a href="../logout.php">Sair da conta</a>
    </div>
</body>

</html>