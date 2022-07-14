<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos em HTML</title>
    <style>
        .color {
            color: #0080AF;
        }
    </style>
</head>
<body>
    <?php
        for ($i = 100; $i < 120; $i++) {
            echo "<p class='color'>{$i}</p>";
        }
    ?>
    
    <?php for ($i = 100; $i < 120; $i++): ?>
        <p class="color"><?= $i ?></p>
    <?php endfor; ?>

    <?php 
        $nomes = ['Nikita', 'João', 'Diana'];
        echo '<ul>';
        foreach ($nomes as $nome) {
            echo "<li>{$nome}</li>";
        }
        echo '</ul>';
    ?>

    <ul>
        <?php foreach ($nomes as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>