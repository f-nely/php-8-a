<?php

// verifica se é um POST
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    exit('Access denied');
} 

// verifica se a checkbox está ativa
if (!isset($_POST['check-accept'])) {
    exit('Please activate the option to accept the conditions!');
}

echo 'Welcome!';