<?php
include("../protected.php");
require("../Conection/conn.php");

$tabela = $conn->prepare("SELECT * FROM textarea;");
$tabela->execute();
$rowTabela = $tabela->fetchAll();

if (empty($rowTabela)) {
    echo "<script>
        alert('Tabela vazia!!!');
        </script>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Lista de Solicitacoes</title>
</head>

<body>
    <div class="container">
    <h1>Listar  solicitaçoes</h1>

    <a align="right" href="../logout.php">Sair da conta</a>
    <br>
    <br>
    <a align="right" href="solicitacoes.php">Criar uma solicitação</a>
    <br>
    <br>
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Mensagem</th>
            </thead>
            <tbody>
                <?php
                foreach ($rowTabela as $linha) {
                    echo '<tr>';
                    echo "<th scope='row'>" . $linha['id'] . "</th>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['textarea'] . "</td>";
                    echo '<td><a href=Control/EditarSolicitacao.php?mensagem=' . $linha['id'] . ' class="btn btn-warning">Editar</a></td>';
                    echo '<td><a href=Control/DeleteSolicitacao.php?mensagem=' . $linha['id'] . ' class="btn btn-danger">Excluir</a></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>