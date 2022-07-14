<?php
  
/*  ECHO
É a instrução mais usada para apresentar conteúdo PHP numa página web. 
Também podemos usar o print, mas é ligeiramente mais lento e tem menos potencial.
Podemos usar o echo com ou sem parânteses (é uma construção especial do PHP).
Pode ser usado com múltiplos parâmetros.
*/ 

$fist_name = 'João';
$last_name = 'Ribeiro';

echo "<h3>{$fist_name} {$last_name}</h3>";
echo $fist_name . ' ' . $last_name;
echo '<br>';
echo "{$fist_name} {$last_name}";
echo '<br>';
echo $fist_name, ' ', $last_name;
echo '<br>';
echo substr($last_name, 0, 4);