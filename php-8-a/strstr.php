<?php

// STRSTR
// Retorna o resto da string a partir de uma occorência

$a = 'Frase de testes no sistema';
echo strstr($a, 'de'); // de testes no sistema
echo '<br>';
echo strstr($a, 'n'); // no sistema
echo '<br>';
// para usar a mesma função em modo case-insensitive, usamos stristr

/*
Existe um terceiro parâmetro que permite definir a parte da string 
que pretendemos obter. Por defeito, não usamos esse parâmetro, a 
string obitda é o resto da string incluíndo a needle.
Se usarmos $before_needle = true, vamos obter a parte inicial da 
string até à needle, excluindo a needle.
*/
echo strstr($a, 'n', true) . '<br>'; // Frase de testes 

echo strstr("Hello world!","world") . '<br>'; // world!

echo strstr('Geeks for Geeks!', 'k') . '<br>'; // ks for Geeks!

/*
The strstr function in PHP is used to search for the first occurrence 
of a string in another string.
strstr(string $haystack, string $needle, bool $before_needle = false):string|false
Parameters
The strstr() function requires two mandatory strings as parameters:
    haystack: The string in which the search is carried out.
    needle: The string you want to search for.
In addition to the parameters above, the strstr() function also accepts 
an optional parameter, before_needle, which truncates the input string when it finds 
needle.
https://www.educative.io/answers/what-is-the-strstr-function-in-php
*/

$w = '123456';
echo strstr($w, '4') . '<br>';
echo strstr($w, '4', true);