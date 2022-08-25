<?php
    session_start();
    $_SESSION['valor-index'] = 'index';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessões</title>
</head>
<body>
    <h3>Página inicial</h3>
    <p><?= $_SESSION['valor-servicos'] ?></p>
    <a href="servicos.php">Serviços</a>
</body>
</html>