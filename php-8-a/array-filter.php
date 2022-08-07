<?php

// ARRAYS - UTILIZAÇÃO DE FILTROS

$valores = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$final = array_filter($valores, 'multiplosCinco');
var_dump($final);

function impares(int $valor): int
{
    return $valor % 2 != 0;
}

function pares(int $valor): int
{
    return $valor % 2 == 0;
}

function multiplosCinco(int $valor): int
{
    return $valor % 5 == 0;
}