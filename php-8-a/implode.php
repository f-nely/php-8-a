<?php

$nomes = ['joão', 'carlos', 'ana', 'antônio'];
$str_nomes = implode('|', $nomes);
echo $str_nomes . '<br>';

$columns = ['first_name', 'last_name', 'email'];
$header = implode(', ', $columns);
echo $header;