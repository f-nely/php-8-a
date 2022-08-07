<?php

// PUSH, POP, SHIFT, UNSHIFT

$names = ['joão', 'ana', 'carlos'];

// array_push - acrescenta elemento no final do array
// array_push($names, 'antonio'); 
// array_push($names, 'ruy', 'marco', 'sandra');

// array_unshift - permite adicionar elemento no início do array
// array_unshift($names, 'tiago');
// array_unshift($names, 'teresa', 'manuel');

// array_shift - retira um elemento do início do array
// array_shift($names);

// array_pop - retira um elemento do final do array
array_pop($names);

var_dump($names);