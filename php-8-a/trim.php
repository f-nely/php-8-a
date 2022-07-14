<?php

// trim - remove espaço do início e do fim

$frase = ' isto é uma string.  ';

echo $frase . '<br>';

$str = 'Hello World!   ';
echo 'Without rtrim: ' . $str;
echo '<br>';
echo 'With rtrim: ' . rtrim($str);
echo '<br>';

/* RTRIM
The rtrim function removes whitespace or other predefined 
characters from the right side of a string.
Remove characters from the right side of a string.
*/
$str2 = 'Hello World!';
echo $str2 . '<br>';
echo rtrim($str2, 'World!');
echo '<br>';

// podemos usar um segundo parâmetro nestas funções
$a = 'abcdef';
echo trim($a, 'a');
echo '<br>';
echo trim($a, 'af');
echo '<br>';
echo trim($a, 'abef');

$user = trim($_POST['user']);