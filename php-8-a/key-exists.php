<?php

// ARRAYS - KEY_EXISTS 

/*
Quando queremos vericar se um determinado valor ou uma determinada chave existe
dentro de um array, não temos que o percorrer até encontrar o que desejamos.
*/

// key_exists - 'pergunta' ao array se ele tem uma determinada chave (key)
$empresa = [
    'administrador' => 'joão',
    'secretária' => 'ana',
    'contabilista' => 'carlos',
];

echo key_exists('operario', $empresa) ? 'Existe' : 'Não existe';