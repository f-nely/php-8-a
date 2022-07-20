<?php

// STRIPOS
/*
This function helps us to find the position of the first 
occurrence of a string in another string. This returns 
an integer value of the position of the first occurrence 
of the string. This function is case-insensitive, which 
means it treats both upper-case and lower-case characters 
equally. This function works similarly as strpos(), 
the difference is that it is case in-sensitive whereas 
strpos() is case sensitive.
*/

$a = 'Este quarto Tem luz';
echo strpos($a, 'T') . '<br>'; // 12
echo stripos($a, 'T') . '<br>'; // 2

function search(string $search, string $str): string
{
    $position = stripos($str, $search);
    if ($position == true) {
        return "Found at position  {$position}.";
    } else {
        return 'Not found!';
    }
}

$str = 'Welcome to GeeksforGeeks';
$search = 'geeks';
echo search($search, $str);

/*
IMPORTANTE: à semelhança das funções strpos e strrpos, estas 
também tem a sua versão multibytes para carcteres acentuados 
mb_stripos e mb_strripos.
*/