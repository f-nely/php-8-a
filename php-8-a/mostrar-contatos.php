<?php
    // cria instancia da classe EasyPDO
    require_once 'config-contatos.php';
    require_once 'EasyPDO.php';

    // cria conexão
    $bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

    // busca todos os contatos da base de dados
    $contatos = $bd->select('SELECT * FROM dados');
    // var_dump($contatos);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar contatos</title>
</head>
<body>
    <h3>Contatos existentes</h3>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Telefone</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($contatos as $contato): ?>
                <tr>
                    <td><?= $contato['nome']?></td>
                    <td><?= $contato['telefone']?></td>
                    <td><a href="editar-contato.php?id=<?= aes_encrypt($contato['id_contato']) ?>">Editar</a></td>
                    <td><a href="excluir-contato.php?id=<?= aes_encrypt($contato['id_contato']) ?>">Excluir</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div>
        <a href="contatos.php">Voltar</a>
    </div>
</body>
</html>