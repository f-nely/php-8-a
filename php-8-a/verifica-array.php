<?php

// Verifica se é um array
// $valor = 'João';
$valor = [1, 2, 3];
echo is_array($valor) ? 'É um array' : 'Não é um array';
echo '<br>';

/*
A expressão empty pode ser usada em strings, em variáveis
com valor null ou em arrays para determinar se estão vazios.
https://www.php.net/manual/pt_BR/function.empty.php
*/
$arr = null;
$nome = '';
$valores = [10, 12, 14];
echo (int)empty($valores);
echo '<br>';

/*
Existe ainda a expressão is_contable para verificar se
uma determinada variável é 'contável' ou não.
Esta função foi introduzida no PHP 7.3
*/
echo (int)is_countable($valores);
echo '<br>';

/*
E ainda a partir do PHP 7.1, é possível usar uma outra
função designada por is_iterable.
Iterável significa que pode ser colocada num ciclo foreach.
*/
echo (int)is_iterable($valores);