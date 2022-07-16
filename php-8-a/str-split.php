<?php

// str_split - Permite criar um array de caracteres a partir de uma string
/* Parameters
The string parameter is required, and it specifies the string to split.
The length parameter is optional, and it specifies the length of each array element. The default is 1. */
echo '<pre>';

$str = 'GeeksforGeeks';
print_r(str_split($str));

print_r(str_split('Hello', 3));
print_r(str_split('Millie Bobby Brown', 6));


// String multibyte o mais indicado é mb_str_split
$str = 'Minha terra tem palmeiras onde canta o sabiá';
print_r(mb_str_split($str)); 

echo '</pre>';