<?php
include('../conection/conn.php');

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$result = $conn->prepare('SELECT * FROM usuarios WHERE email=:email and senha=:senha');
$result->execute(array(':email' => $email, ':senha' => $senha)) or die();
$row = $result->rowCount();
$data = $result->fetch();

if ($row == 1) {
  $_SESSION["id"] = $data['id'];
  $_SESSION['nome'] = $data['nome'];
  $_SESSION['email'] = $data['email'];

  setcookie('login', $login);

  header("Location: ../solicitacoes/solicitacoes.php");
}


?>



