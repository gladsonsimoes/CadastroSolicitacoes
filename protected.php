<?php

if(!isset($_SESSION)){
    session_start();
}


if (!isset($_SESSION["id"])) {
    die("Faça Login para ter acesso <a href='login.php'>Fazer Login</a>");
  } 

?>