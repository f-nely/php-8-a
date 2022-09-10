<?php

define('MYSQL_OPTIONS', [
    'db_host' => 'mysql',
    'db_name' => 'contatos',
    'db_user' => 'root',
    'db_pass' => '<root-password>',
    'db_char' => 'utf8',
]);

define('AES_KEY', 'hbNtQqAnWsbwyMAFdXN8hWcPL9QEk6Ut');
define('AES_IV', 'BZfyYY7rwYQs8d83');

function aes_encrypt($value)
{
    return bin2hex(openssl_encrypt($value, 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV));
}

function aes_decrypt($hash)
{
    // verifica se a hash é válida
    if(strlen($hash) % 2 != 0) {
        return -1;
    }

    return openssl_decrypt(hex2bin($hash), 'aes-256-cbc', AES_KEY, OPENSSL_RAW_DATA, AES_IV);
}