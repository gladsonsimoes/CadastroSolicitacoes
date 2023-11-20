<?php
include('../../Conection/conn.php');

$nome = $_POST['nome'];
$textarea = $_POST['textarea'];

$textPost = $conn->prepare('INSERT INTO textarea(nome, textarea) values (:nome , :textarea)');
$textPost->execute(array(':nome' => $nome, ':textarea'=> $textarea));

echo '<script>
alert("Mensagem enviada!");
window.location.href="../listarSolicitacoes.php";
</script>';

?>