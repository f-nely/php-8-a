<?php

echo '<pre>';
print_r($_FILES);

// pasta de destino final
$pastaFinal = '/var/www/html/php-8-a/';

// tratamento dos arquivos
foreach($_FILES as $file) {
    // mover o arquivo para o destino final
    move_uploaded_file($file['tmp_name'], $pastaFinal . $file['name']);
}

/*
[name] => ef-english.txt
[full_path] => ef-english.txt
[type] => text/plain
[tmp_name] => /tmp/phpr2SBIX
[error] => 0
[size] => 3793
*/