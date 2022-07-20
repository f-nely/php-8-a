<?php

declare(strict_types=1);

// STRPOS
/* 
Permite encontrar a posição (índice) da primeira 
ocorrência de uma string de outra string
*/
$a = 'Esta frase serve para testes';
echo strpos($a, 'se') . '<br>'; // 8

/*
A Haystack é a string onde vamos procurar a posição.
A Needle é a string cuja posição pretendemos obter 
dentro da string.
Offset é um parâmetro opcional que permite definir 
a partir de onde é efetuada a pesquisa.
*/
echo strpos($a, 'se', 10) . '<br>'; // 11

$a = 'Esta frase 100 serve para testes';
echo strpos($a, (string)100) . '<br>';

/* 
Para strings com caracteres acentuados devemos usar 
mb_strpos
*/

$str = 'PHP is cool';
$position = strpos($str, 'php');
var_dump($position);

$str = 'To do or not to do';
$position = strpos($str, 'To');

if ($position !== false) {
    echo $position; // 0
} else {
    echo 'Not found';
}