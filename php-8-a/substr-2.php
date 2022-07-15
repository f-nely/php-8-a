<?php

// The substr() function accepts a string and returns a substring from the string.

// substr ( string $string , int $offset , int|null $length = null ) : string

// In this syntax:

// $string is the input string.
// $offset is the position at which the function begins to extract the substring.
/* $length is the number of characters to include in the substring. If you omit the $length argument, the substr() function will extract a substring from the $offset to the end of the $string. If the $length is 0, false, or null, the substr() function returns an empty string. */

$s = 'PHP substring';
echo substr($s, 0, 3) . '<br>';

echo substr($s, 4) . '<br>';

$s = 'PHP is cool';
echo substr($s, -4) . '<br>';

echo substr($s, -7, -5) . '<br>';

$message = 'adiós';
echo mb_substr($message, 3, 1) . '<br>';