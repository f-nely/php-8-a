<?php

// Starting session
session_start();

// $_SESSION['value'] = 100;
$_SESSION['user'] = 'joao';

echo $_SESSION['user'];

// Destroying session
session_destroy();

// https://www.tutorialrepublic.com/php-tutorial/php-sessions.php