<?php

session_start();

echo '<pre>';

$_SESSION['name'] = 'Taylor';

session_unset();

print_r($_SESSION);