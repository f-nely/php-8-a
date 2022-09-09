<?php

use EasyPDO\EasyPDO;

require_once 'EasyPDO.php';
require_once 'config-02.php';

$bd_teste = new EasyPDO(MYSQL_1);
$bd_shop = new EasyPDO(MYSQL_2);

// $bd = new EasyPDO([
//     'db_host' => 'mysql',
//     'db_name' => 'teste',
//     'db_user' => 'root',
//     'db_pass' => '<root-password>',
//     'db_char' => 'utf8',
// ]);

$clientes = $bd_teste->select('SELECT * FROM clientes');
$produtos = $bd_shop->select('SELECT * FROM produtos');

echo '<pre>';
print_r($clientes);
print_r($produtos);

