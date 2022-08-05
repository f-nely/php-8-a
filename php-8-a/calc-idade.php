<?php

$dataNascimento = new DateTime('19-10-1973');

echo calculaIdade($dataNascimento);

function calculaIdade(DateTime $dataNascimento): string
{
    $agora = new DateTime();

    if ($agora->format('Y') == $dataNascimento->format('Y')) {
        $anos = 1;
    } else {
        $anos = $agora->format('Y') - $dataNascimento->format('Y');
    }

    if ($agora->format('m') < $dataNascimento->format('m')) {
        $anos--;
    } elseif ($agora->format('m') == $dataNascimento->format('m')) {
        if ($agora->format('d') < $dataNascimento->format('d')) {
            $anos--;
        }
    }

    return $anos != 1 ? "{$anos} anos" : "1 ano";
}