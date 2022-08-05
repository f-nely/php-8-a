<?php

$dataDivida = new DateTime('10-03-1997');
$agora = new DateTime();
$intervalo = $dataDivida->diff($agora);
// echo $intervalo->days;
echo '<pre>';
print_r($intervalo);