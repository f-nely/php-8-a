<?php

// ARRAYS - contagem e índices

$names = ['joão', 'ana', 'carlos'];

echo count($names);
echo '<br>';

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . '<br>';
}

$empresa = [
    'administração' => [
        'joão',
        'carlos'
    ],
    'armazem' => [
        'antonio',
        'marco',
        'luis',
        'alexadre',
    ],
];

echo count($empresa, COUNT_RECURSIVE);