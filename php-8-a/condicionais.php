<?php
    $apresentar = true;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php
        if ($apresentar) {
            echo '<p>Este parágrafo é para se apresentado.</p>';
        } else {
            echo '<p>Não existe nada para se apresentado</p>';
        }
    ?>

    <?php if($apresentar): ?>
        <p>Este parágrafo é para se apresentado.</p>
    <?php else: ?>
        <p>Não existe nada para se apresentado</p
    <?php endif; ?>
</body>
</html>