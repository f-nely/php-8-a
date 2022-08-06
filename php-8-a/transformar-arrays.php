<?php

// LIST e EXTRACT - Transforma um array em várias variáveis

$nomes = ['Diana', 'Elton', 'Vinicius'];
list($nome1, $nome2, $nome3) = $nomes;

echo $nome1 . '<br>';
echo $nome2 . '<br>';
echo $nome3 . '<br>';

// se quisermos apenas alguns elementos
list($nome1,,$nome2) = $nomes;
echo $nome1 . '<br>';
echo $nome2 . '<br>';

// podemos ainda usar o extract para, automaticamente, cada valor
// passar para uma variável com o nome da chave
$funcionarios = [
    'administrador' => 'joão',
    'secretaria' => 'ana',
    'contabilista' => 'carlos',
];

extract($funcionarios);
echo $administrador . '<br>';
echo $secretaria . '<br>';
echo $contabilista . '<br>';

// IMPORTANTE: não devemos usar o extract com arrays que não controlamos,
// como por exemplo os dados da superglobal $_POST[] quando fazemos a
// submissão de um formulário