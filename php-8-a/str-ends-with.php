<?php

// str_ends_with() function to check if a string ends with a substring

// $str = 'PHP tutorial';
// $substr = 'l';

// $result = str_ends_with($str, $substr) ? 'is' : 'is not';

// echo "{$str} {$result} ending with {$substr}";

$str = 'PHP tutorial';
$substr = 'tutorial';

$result = str_ends_with($str, $substr) ? 'is' : 'is not';

echo "{$str} {$result} ending with {$substr}";