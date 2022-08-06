<?php

$nome1 = array('Diana', 'Elton', 'Vinicius');
$nome2 = ['Diana', 'Elton', 'Vinicius']; // desde o PHP 5.4
$nome3[] = 'joão';

echo '<pre>';
print_r($nome1);
print_r($nome3);

$cliente1 = [
    'nome' => 'Carlos',
    'idade' => 35,
    'profissão' => 'Advogado',
];

print_r($cliente1);