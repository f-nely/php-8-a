<?php

/*
O processo mais linear para a gravação de textos num arquivo é o seguinte:
    1. criamos uma variável, também conhecida como por handle, que é um apontador para um arquivo.
    2. escrevemos texto usando funções com esse apontador.
    3, fechamos o apontador.

Na instrução fopen, o segundo parâmetro (modo) pode ser definido de várias formas.
As mais comuns são as seguintes:
w - write - Abre o arquivo apenas para escrever.
            Se o arquivo não existe, cria-o e se existe, apaga tudo.
a - append - Apenas para escrever.
             Se o arquivo não existe, cria-o.
             Se existe, acrescenta o texto que ao que já existe no arquivo.
*/

// $file = fopen('dados1.txt', 'w');
// fwrite($file, 'First sentence.');
// fwrite($file, 'Second sentence.');
// fclose($file);

// $file = fopen('dados2.txt', 'a');
// fwrite($file, 'More a sentence');
// fclose($file);

$file = fopen('dados.txt', 'a');
for ($i = 0; $i < 10; $i++) {
    fwrite($file, 'Esta linha contém o valor ' . rand(0, 100) . PHP_EOL);
}