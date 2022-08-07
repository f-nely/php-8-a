<?php

// ARRAYS - PRIMEIRA CHAVE DE UM ARRAY

// $valores = [1, 2, 3, 4, 5];
// echo array_key_first($valores);

// $nomes = ['joão', 'ana', 'carlos'];
// echo $nomes[array_key_first($nomes)]; 

$empresa = [
    'administrador' => 'joão',
    'secretária' => 'ana',
    'contabilista' => 'carlos',
];

echo array_key_first($empresa);