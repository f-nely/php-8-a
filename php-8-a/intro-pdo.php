<?php

use EasyPDO\EasyPDO;

require_once 'EasyPDO.php';

$conn = new EasyPDO();

$customers = $conn->select('SELECT * FROM customer');

echo '<pre>';
print_r($customers);

