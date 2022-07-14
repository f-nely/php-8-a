<?php

$nome = 'Ana Carolina';
echo strtoupper($nome);

$nome2 = 'João Ribeiro';
echo '<br>';
echo mb_strtoupper($nome2);
echo '<br>';

$nome3 = 'DIANA ARNO';
echo strtolower($nome3);
echo '<br>';

$str = 'água';
echo mb_convert_case($str, MB_CASE_TITLE);
echo '<br>';

// The ucfirst function converts the first character of a string to uppercase.
echo ucfirst('hello world!');
echo '<br>';

// lcfirst - transforma a primeira letra de uma string numa letra minúscula
echo lcfirst('João Ribeiro');
echo '<br>';

// ucwords - transforma toda as primeiras letras de cada palavra numa string em maiúsculas.
echo ucwords('elton mineto');


