<?php

$dataNascimento = $_POST['data-nascimento'];

$valores = explode(' ', $dataNascimento);

echo "Nasci no dia {$valores[0]} <br> e à hora {$valores[1]}";