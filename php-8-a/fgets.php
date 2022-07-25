<?php

// ler dados de um arquivo
// $file = fopen('dados.txt', 'r');
// for ($i = 0; $i < 10; $i++) {
//     echo fgets($file);
// }
// fclose($file);

$file = fopen('dados.txt', 'r');
while (!feof($file)) {
    echo fgets($file);
}

fclose($file);