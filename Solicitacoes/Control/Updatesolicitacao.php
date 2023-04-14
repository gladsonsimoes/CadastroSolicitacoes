<?php
require('../../conection/conn.php');

$id = $_POST['id'];
$nome = $_POST['nome'];
$textarea = $_POST['textarea'];

$update_prod = $conn->prepare("UPDATE textarea set nome = :nome, textarea = :textarea  WHERE id = :id");

    $update_prod->execute(
        array(
            ':id' => $id,
            ':nome' => $nome,
            ':textarea' => $textarea
        )
    );

    echo "<script>
      alert('Campos Editado Com Sucesso!');
      window.location.href='../listarsolicitacoes.php';
    </script>";


?>