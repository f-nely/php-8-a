<?php

// verificar que tipo de request foi usado
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit('Access denied');
} 

// verificar se existe os valores no POST
if (!isset($_POST['user'])) {
    header('Location: form.php');
}

$user = $_POST['user'];

echo "Bem-vindo {$user}!";

