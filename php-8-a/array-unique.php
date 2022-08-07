<?php

// ARRAYS - REMOVER REGISTROS DUPLICADOS

$names = ['joão', 'ana', 'carlos', 'joão', 'sara', 'maria', 'ana', 'antonio'];
$final = array_unique($names);
var_dump($final);

$values = [100, 200, 100, 1000, 200];
$valuesFinal = array_unique($values);
var_dump($valuesFinal);