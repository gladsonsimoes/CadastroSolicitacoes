<?php

$user = 'root';
$dbname = 'sistema';
$pass = '';
$port = '3307';
$host = 'localhost';

try{
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname.';port='.$port.';', $user , $pass);
} catch(PDOException $e) {
    echo 'Error' . $e->getMessage();
}

?>