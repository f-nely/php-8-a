<?php

// verifica se é um POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit('Access denied');
}

// verifica se existe usuário e senha
if ($_POST['user'] == ' ' || $_POST['password'] == '') {
    header('Location: form2.php');
}

if ($_POST['user']  != 'taylor' || $_POST['password'] != '3030') {
    exit('Login inválido!');
}

echo 'Welcome!!';