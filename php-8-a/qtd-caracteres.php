<?php

// The strlen function returns the length of a string.
$str = 'Uma frase para testes.';
echo strlen($str);
echo '<br>';

// quando uma variável é vazia
$b = '';
echo strlen($b);
echo '<br>';

// caracteres com acentos
$name = 'João Ribeiro';
echo mb_strlen($name);


