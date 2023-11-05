<?php
require('../Conection/conn.php');


$user = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(isset($user['createuser'])){
    CreateUser($user);
}

function CreateUser($user){
    global $conn;

    $query = "SELECT * FROM usuarios WHERE email='" . $user['email'] . "'";
    $checkingUser = $conn->prepare($query);
    $checkingUser->execute();
    $result = $checkingUser->rowCount();

    //validar se o email é um email válido
    if(!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
        echo ("<script>
        alert('Digite um email válido');
        window.location.assign('../cadastro.php');
        </script>");
    } 
    //Email cadastrado no banco de dados
    else if ($result > 0){
        echo ("<script>
          alert('E-mail já cadastrado! ');
          window.location.href='../cadastro.php';
          </script>");
    } 
    //inserindo as informações no banco de dados
    else {
        $query = "INSERT INTO usuarios(nome, email, senha) VALUES (:nome , :email, :senha)";
        $cad_usuario = $conn->prepare($query);
        $cad_usuario->execute(
            array(
                ':nome' => $user['nome'],
                ':email' => $user['email'],
                ':senha' => $user['senha']
            )
        );
    
        echo '<script>
        alert("usuario cadastrado");
        window.location.href="../index.php";
        </script>';
    }
}

?>