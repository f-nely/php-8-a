<?php
    session_start();
    $_SESSION['valor-servicos'] = 'servicos';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Página serviços</h3>
    <p><?= $_SESSION['valor-index'] ?></p>
    <a href="variaveis-de-sessao.php">Voltar</a>
</body>
</html>