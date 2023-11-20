<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div>
        <h1>Login</h1>
        <form action="controluser/LoginUser.php" method="post">
            <div>
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <br>
            <div>
                <label>Senha</label>
                <input type="password" name="senha" required>
            </div>
            <br>
            <button type="submit"> Entrar </button>
        </form>
    </div>
    <p>se nao tiver conta faca seu <a href="cadastro.php">Cadastro</a><p>

</body>

</html>