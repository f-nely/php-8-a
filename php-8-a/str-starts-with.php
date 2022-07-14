<?php

// str_starts_with() function to check if a string starts with a substring
// fonte: https://www.phptutorial.net/php-tutorial/php-str_starts_with/

$str = 'PHP tutorial';
$substr = 'P';

$result = str_starts_with($str, $substr) ? 'is' : 'is not';

echo "The {$str} {$result} starting with {$substr}";