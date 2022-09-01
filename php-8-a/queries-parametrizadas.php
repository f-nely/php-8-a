<?php

require_once 'config.php';

// create connection
$conn = new PDO(
'mysql:host='. MYSQL_HOST . ';' .
'dbname=' . MYSQL_DATABASE . ';charset=utf8' , MYSQL_USER, 
MYSQL_PASS
);

$nameCustomer = 'Elton Mineto';

$command = $conn->prepare("INSERT INTO customer VALUES(0, :name)");
$command->execute(
    [
        'name' => $nameCustomer
    ]
);