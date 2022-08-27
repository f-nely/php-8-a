<?php

require_once 'config.php';

$conn = new PDO(
'mysql:host='. MYSQL_HOST . ';' .
'dbname=' . MYSQL_DATABASE . ';charset=utf8' , MYSQL_USER, 
MYSQL_PASS
);

$stmt = $conn->query('SELECT * FROM customer');
$customers = $stmt->fetchAll(PDO::FETCH_ASSOC);

// echo '<pre>';
// print_r($customers);


