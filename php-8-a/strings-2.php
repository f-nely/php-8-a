<?php

$str = str_repeat('-', 20);
echo $str . '<br>';

$str2 = str_repeat('=|', 20);
echo $str2 . '<br>';

$value = 100;
echo str_pad($value, '30', '.', STR_PAD_LEFT);
echo '<br>';

/*
pad_type:
    STR_PAD_LEFT
    STR_PAD_RIGHT
    STR_PAD_BOTH
*/

echo '<pre>';
$valores = [100, 2100, 0, 45, 45790];
foreach ($valores as $valor) {
    echo str_pad($valor, '30', '.', STR_PAD_LEFT) . PHP_EOL;
}