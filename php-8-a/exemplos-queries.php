<?php

use EasyPDO\EasyPDO;

require_once 'EasyPDO.php';
require_once 'config-02.php';

$bd = new EasyPDO(MYSQL_1);

// update
// $params = [
//     ':nome' => 'João Ribeiro',
//     ':id' => 3,
// ];

// $bd->update('UPDATE clientes SET nome = :nome WHERE id_cliente = :id', $params);

// delete
// $bd->delete('DELETE FROM clientes WHERE id_cliente = :id', [':id' => 4]);

$bd->query('DELETE FROM clientes WHERE id_cliente = :id', [':id' => 2]);

echo 'TERMINADO';