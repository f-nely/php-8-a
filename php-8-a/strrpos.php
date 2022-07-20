<?php

// STRRPOS
// Procura a última ocorrência de uma string dentro de outra.

/*
A Haystack é a string onde vamos procurar a posição.
A Needle é a string cuja posição pretendemos obter 
dentro da string.
Offset é um parâmetro opcional que permite definir 
a partir de onde é efetuada a pesquisa.
*/

$a = 'Esta frase serve para testes';
echo strrpos($a, 'se') . '<br>'; // 11

$position = strrpos($a, 'Esta');
echo $position . '<br>';

$pos = strrpos($a, 'Estas');
var_dump($pos);

echo strrpos("I love php, I love php too!","php"); // 19

