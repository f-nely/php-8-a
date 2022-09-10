<?php

// remove contato
if(!isset($_GET['id'])) {
    exit('Acesso inválido');
}

$id_contato = $_GET['id'];

// adiciona à base de dados
require_once 'EasyPDO.php';
require_once 'config-contatos.php';
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

$id_contato = aes_decrypt($id_contato);
// die($id_contato);

$parametros = [
    ':id_contato' => $id_contato
];

$bd->delete('DELETE FROM dados WHERE id_contato = :id_contato', $parametros);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato removido</title>
</head>
<body>
    <h5>Contato removido com sucesso</h5>
    <div>
        <a href="mostrar-contatos.php">Voltar</a>
    </div>
</body>
</html>