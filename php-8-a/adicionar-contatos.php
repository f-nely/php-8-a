<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar contatos</title>
</head>
<body>
    <form action="adicionar-contatos-submit.php" method="POST">
        <div>
            <label for="text-nome">Nome:</label>
            <input type="text" name="text-nome" id="text-nome" maxlength="50">
        </div>
        <div>
            <label for="text-telefone">Telefone:</label>
            <input type="text" name="text-telefone" id="text-telefone" maxlength="20">
        </div>
        <div>
            <input type="submit" value="Guardar">
        </div>
        <div>
            <a href="contatos.php">Voltar</a>
        </div>
    </form>
</body>
</html>