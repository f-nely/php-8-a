<?php

// NUMBER FORMAT
/*
A assinatura desta função é constituída por 4 parâmetros.
$num -                      o valor que pretendemos formatar.
$decimals -                 o número de casas decimais a apresentar.
$dec_point -                o caracter que vai ser apresentado para 
                            separar a parte inteira da parte décimal.
$thousands_sep -            o caracter que irá ser apresentado na 
                            separação do número em milhares.
*/

$value = 100;
echo number_format($value, 0, null, null) . '<br>'; // 100
echo number_format($value, 2, ',', null) . '<br>'; // 100,00

$value = 100.45;
echo number_format($value, 3, ',', null) . '<br>'; // 100,450
echo number_format($value, 1, ',', null) . '<br>'; // 100,5

$value = 123456.758;
echo number_format($value, 2, ',', '.') . '<br>'; // 123.456,76

// É uma das formas mais indicadas para apresentar valores monetários
$value = 125.2;
echo number_format($value, 2, ',', null) . ' €'; // 125,20 €
