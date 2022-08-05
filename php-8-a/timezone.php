<?php

// DATETIME - timezone
// https://www.php.net/manual/pt_BR/timezones.php

$brasil = new DateTime('now', new DateTimeZone('America/Fortaleza'));
$portugal = new DateTime('now', new DateTimeZone('Europe/Lisbon'));

echo $brasil->format('d-m-Y H:i:s') . '<br>';
echo $portugal->format('d-m-Y H:i:s') . '<br>';