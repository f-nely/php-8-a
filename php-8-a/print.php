<?php

/* PRINT
O print é uma construção da linguagem PHP muito semelhante ao echo.
As principais diferenças são:
    1. print apenas aceita um argumento.
    2. print retorna sempre o valor 1.
*/

$nome = 'Nikita';
$apelido = 'Popov';

print "{$nome} {$apelido}<br>";
print $nome . ' ' . $apelido . '<br>';

if (print($nome)) {
    print(" {$apelido}");
}

print '<br>';
print strlen($apelido);