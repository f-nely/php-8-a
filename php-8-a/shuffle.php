<?php

$question = 'Qual é a capital de Portugal?';
$answers = [
    'Lisboa',
    'Porto',
    'Coimbra',
];

shuffle($answers);
echo $question . '<br>';
foreach ($answers as $answer) {
    echo "> {$answer}<br>";
}