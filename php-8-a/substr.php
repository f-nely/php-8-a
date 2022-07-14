<?php

$a = 'Esta frase é para testes.';

$b = mb_substr($a, 5, 10);

echo $b . '<br>';

echo mb_substr($a, 0, 3) . '<br>';
echo mb_substr($a, 10) . '<br>';

// índice com valor negativo
echo substr($a, -4, 2) . '<br>';
echo substr($a, -3) . '<br>';

// https://www.phptutorial.net/php-tutorial/php-substr/
