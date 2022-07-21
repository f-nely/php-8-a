<?php
 
/*
A função sprintf retorna uma string formatada de acordo com um determinado formato.
sprintf(string $format, mixed $args = ?, mixed $... = ?): string
*/

$total_pessoas = 102;
$localizacao = 'da sala';

// %s transforma-se num parâmetro de string
echo sprintf('Existem %s pessoas dentro %s<br>', $total_pessoas, $localizacao);

// %d trata o argumento como um valor numérico
echo sprintf('Existem %d pessoas dentro %s<br>', $total_pessoas, $localizacao);

/* 
Se a ordem dos argumentos for alterada, podemos usar o %1, %2, etc.
identificar qual o argumento, seguido de $ e o tipo de output pretendido.
*/
echo sprintf('Dentro %2$s foram encontrados %1$d pessoas', $total_pessoas, $localizacao);