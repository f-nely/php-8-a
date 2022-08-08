<?php

// COOKIES

/*
O PHP suporta a criação de cookies que são mecanismos de armazenamento
de informação do lado do cliente (o mesmo que dizer do lado do browser).
Sempre que criamos um cookie, deixamos uma marca do nosso website no browser
do visitante e, dessa forma, numa visita futura, podemos verificar se existe 
o cookie e agir em conformidade.
*/

if (isset($_COOKIE['meu_cookie'])) {
    echo $_COOKIE['meu_cookie'];
} else {
    setrawcookie('meu_cookie', date('H:i:s'));
}

echo '<p>terminado</p>';