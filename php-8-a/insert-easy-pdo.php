<?php

use EasyPDO\EasyPDO;

require_once 'EasyPDO.php';
require_once 'config-02.php';

$bd = new EasyPDO(MYSQL_1);

$nomeCliente = 'Anne Frank';

// $bd->insert("INSERT INTO clientes VALUES(0,'".$nomeCliente."')");

$parametros = [
    ':nome' => $nomeCliente
];

$bd->insert('INSERT INTO clientes VALUES(0,:nome)', $parametros);

echo 'OK!';