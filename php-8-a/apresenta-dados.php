<?php
    require_once 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table customer</title>
    <style>
        .styled-table {
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            font-family: sans-serif;
            font-size: 0.9em;
            margin: 25px 0;
            min-width: 200px;
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #FFF;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #DDD;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
    </style>
</head>
<body>
    <h3>Customers</h3>
    <hr>
    <table class="styled-table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($customers as $customer): ?>
                <tr>
                    <td><?= $customer['id_customer']?></td>
                    <td><?= $customer['name']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p>Total customer: <strong><?= count($customers) ?></strong></p>
</body>
</html>