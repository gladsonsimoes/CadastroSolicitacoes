<?php
include("../protected.php");
include('../conection/conn.php');

if (isset($_GET['mensagem'])){
    $id = $_GET['mensagem'];
}
else{
    header("Location: index.php");
}

$tabela = $conn->prepare("SELECT * FROM textarea WHERE id= :id ;");
$tabela->execute(array(':id'=>$id));
$rowTable = $tabela->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Editar Solicitacoes</title>
</head>
<body>
    <div class="container">
        <form action="control/updatesolicitacao.php" method="post">
            <h1>Editar a solicitação</h1>
            <input type="hidden" name="id" value=<?php echo $rowTable[0]['id']?>>
            <br>
            <br>
            <input type="text" name='nome' placeholder="Digite seu nome" value=<?php echo $rowTable[0]['nome']?>>
            <br>
            <br>
            <textarea cols="30" rows="10" name="textarea"><?php echo $rowTable[0]['textarea']?></textarea>
            <br>
            <button type="submit">Editar solicitação</button>
        </form>
        <br>
        <a href="listarSolicitacoes.php">Ver listas de solicitacoes</a>
        <br>
        <br>
        <a href="../logout.php">Sair da conta</a>
    </div>
</body>
</html>