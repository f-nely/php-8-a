<?php

require_once 'config.php';

// create connection
$conn = new PDO(
'mysql:host='. MYSQL_HOST . ';' .
'dbname=' . MYSQL_DATABASE . ';charset=utf8' , MYSQL_USER, 
MYSQL_PASS
);

// select
// $customer = $conn->query('SELECT * FROM customer')->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($customer);

// insert
// $conn->query("INSERT INTO customer VALUES(0, 'diana')");

// update
// $conn->query("UPDATE customer SET name = 'joão' WHERE id_customer = 1");

// delete
$conn->query('DELETE FROM customer WHERE id_customer = 5');