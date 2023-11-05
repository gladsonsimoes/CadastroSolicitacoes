<?php
require('../../Conection/conn.php');

   if( isset($_GET['mensagem'])){
        $id = $_GET['mensagem'];
   }else{
        header("Location: ../index.php");
   }

   $del_prod = $conn->prepare('DELETE FROM textarea WHERE id= :id');
   $del_prod->execute(array(':id'=>$id));  

   echo "<script>
   alert('Usuário Deletado!');
   window.location.href='../listarsolicitacoes.php';
   </script>";

?>