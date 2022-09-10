<?php

use EasyPDO\EasyPDO;

// verifica se foi feito um POST
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit('Acesso inválido');
}

// adiciona à base de dados
require_once 'EasyPDO.php';
require_once 'config-contatos.php';
$bd = new EasyPDO(MYSQL_OPTIONS);

// parametros
$parametros = [
    ':nome' => $_POST['text-nome'],
    ':telefone' => $_POST['text-telefone'],
];

// insert
$bd->insert('INSERT INTO dados VALUES(0, :nome, :telefone)', $parametros);

echo 'Contato inserido com sucesso.';

?>
<div>
    <a href="contatos.php">Voltar</a>
    <span> | </span>
    <a href="adicionar-contatos.php">Novo contato</a>
</div>
