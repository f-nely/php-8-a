<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 1</title>
</head>
<body>

    <?php
        $name = 'joao';
    ?>
    <h3>Página 1</h3>

    <a href="pagina2.php?name=<? $name ?>">Voltar para a página 2</a>
</body>
</html>