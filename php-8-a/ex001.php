<?php
    $dados = [
        ['João', 'M', 'Portugal'],
        ['Ana', 'F', 'Brasil'],
        ['Carlos', 'M', 'Angola'],
        ['Matilde', 'F', 'Moçambique'],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <title>Ex001</title>
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }
        table {
            width: 30%;
            border: 1px solid #665553;
            border-collapse: collapse;
        }
        table tr,
        table td,
        table th {
            border: 1px solid #665553;
        }
        table th {
            text-align: left;
            color: #FFF;
        }
        table caption {
            font-weight: bold;
            color: cornflowerblue;
            text-align: center;
            padding-bottom: 10px;
        }
        table thead th {
            background-color: #345eeb;
            padding: 5px;
        }
        table tr {
            background-color: #AAA;
        }
    </style>
</head>
<body>
    <table>
        <caption>Dados Cadastrais</caption>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $item): ?>
                <tr>
                    <td><?= $item[0]?></td>
                    <td><?= $item[1]?></td>
                    <td><?= $item[2]?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
       
    </table>
</body>
</html>