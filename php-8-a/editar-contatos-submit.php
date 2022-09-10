<?php

// verifica se foi feito um POST
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit('Acesso inválido');
}

// adiciona à base de dados
require_once 'EasyPDO.php';
require_once 'config-contatos.php';
$bd = new EasyPDO\EasyPDO(MYSQL_OPTIONS);

// busca os dados a editar
$id_contato = aes_decrypt($_POST['id-contato']);

if($id_contato == -1 || $id_contato == false) {
    exit('Acesso inválido');
}

$nome = $_POST['text-nome'];
$telefone = $_POST['text-telefone'];


$parametros = [
    ':id_contato' => $id_contato,
    ':nome' => $nome,
    ':telefone' => $telefone
];

$bd->update('UPDATE dados SET nome = :nome, telefone = :telefone WHERE id_contato = :id_contato', $parametros);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização contato</title>
</head>
<body>
    <h5>Contato atualizado com sucesso</h5>
    <a href="mostrar-contatos.php">Voltar</a>
</body>
</html>