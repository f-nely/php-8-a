<?php

$empresa = [
    'administração' => [
        'João administrador',
        'Carlos sócio'
    ],
    'contabilidade' => [
        'Mariana',
        'Joaquim',
        'Antonio',
    ],
    'armazem' => [
        'gestores' => [
            'Carlos',
            'Marco',
        ],
        'operadores' => [
            'Fernando',
            'Manuel',
            'Luis',
            'Ricardo',
        ]
    ],
    'comerciais' => [
        'lisboa' => [
            'João Miguel',
            'Carlos Santos',
        ],
        'porto' => [
            'Marco Antonio',
            'Sergio Santos',
        ],
        'coimbra' => [
            'Maria Silva',
        ],
    ],
];

echo '<pre>';
print_r($empresa['administração']);
print_r($empresa['armazem']);
print_r($empresa['armazem']['gestores']);