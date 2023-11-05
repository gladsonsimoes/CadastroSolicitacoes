<?php
require('../Conection/conn.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<p style='color: red;'> Digite um E-mail válido </p>";
} else{
    $cad_usuario = $conn->prepare("INSERT INTO usuarios(nome, email, senha) VALUES (:nome , :email, :senha)");
    $cad_usuario->execute(
        array(
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha
        )
    );

    echo '<script>
    alert("usuario cadastrado");
    window.location.href="../index.php";
    </script>';

}

    

?>