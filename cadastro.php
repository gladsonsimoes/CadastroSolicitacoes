<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h1>Cadastro </h1>
    <div>
        <form action="controluser/createuser.php" method='POST'>
            <div>
                <label>Nome </label>
                <input type="text" name="nome" required>
            </div>
            <br>
            <div>
                <label>E-mail</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" required>
            </div>
            <br>
            <button type="submit" >cadastrar usuario</button>
        </form>
    </div>
    <p>se tiver conta faca seu <a href="index.php">Login</a><p>

</body>

</html>