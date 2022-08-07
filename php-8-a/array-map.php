<?php

// ARRAYS - ALTERA VALORES DE UM ARRAY COM ARRAY_MAP

$names = ['joão', 'ana', 'carlos'];

$final = array_map('gretting', $names);

echo '<pre>';
print_r($final);

function gretting($value): string
{
    return "Hi, {$value}!";
}

$values = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
print_r(array_map('elevarAoQuadrado', $values));

function elevarAoQuadrado(int $value): int
{
    return $value * $value;
}