<?php

// ARRAYS - IN_ARRAY

$empresa = [
    'administrador' => 'joão',
    'secretária' => 'ana',
    'contabilista' => 'carlos',
];

echo in_array('ana', $empresa) ? 'Existe' : 'Não existe';