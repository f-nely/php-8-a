<?php

echo '<pre>';
print_r($_FILES);

// pasta de destino final
$pastaFinal = '/var/www/html/php-8-a/';

$mimeAceitos = [
    'image/png',
    'image/jpeg'
];

// tratamento dos arquivos
foreach($_FILES as $file) {

    //verifica se a imagem é do tipo esperado
    if(!in_array($file['type'], $mimeAceitos)) continue;

    // verifica se o arquivo tem tamanho físico inferior ou igual ao limite máximo
    if($file['size'] > 500000) continue;

    // verificar as dimensões do arquivo
    print_r(getimagesize($file['tmp_name']));
    
    // mover o arquivo para o destino final
    move_uploaded_file($file['tmp_name'], $pastaFinal . $file['name']);
}

/*
[name] => icons8-duty-free-50.png
[full_path] => icons8-duty-free-50.png
[type] => image/png
[tmp_name] => /tmp/phpSxWjCH
[error] => 0
[size] => 1092
*/

// https://developer.mozilla.org/pt-BR/docs/Web/HTTP/Basics_of_HTTP/MIME_types