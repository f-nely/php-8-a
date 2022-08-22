<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fazer reset</title>
</head>
<body>
    <form action="tratar-reset.php" method="POST">
        <label for="text-user">Usuário</label><br>
        <input type="text" name="text-user" id="text-user"><br>
        <label for="password">Senha</label><br>
        <input type="password" name="password" id="passord">
        <hr>
        <input type="reset" value="Clear">
    </form>
</body>
</html>