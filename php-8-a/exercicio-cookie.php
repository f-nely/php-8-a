<?php

if (!isset($_COOKIE['visitou_o_site'])) {
    // primeira visita
    setcookie('visitou_o_site', true, time() + (365*24*60*60));
    echo 'É a primeira visita ao site. Bem-vindo!';
} else {
    // apresentar mensagem
    echo 'Você já esteve neste site na última hora. Seja bem-vindo(a) novamente.';
}