<?php

// str_replace() function returns a new string with all occurrences of a substring replaced with another string

// The following shows the syntax of the str_replace() function:

/*
str_replace ( 
    array|string $search , 
    array|string $replace , 
    string|array $subject , 
    int &$count = null 
) : string|array

The str_replace() has the following parameters:

    The $search is a substring to be replaced.
    The $replace is the replacement string that replaces the$search value.
    The $subject is the input string
    The $count returns the number of replacements that the function performed. The $count is optional.
*/

$frase = 'Learning Javascript';
echo str_replace('Javascript', 'PHP', $frase);
echo '<br>';

$str = 'Hello there!';
$new_str = str_replace('Hello', 'Hi', $str);
echo $new_str . '<br>';
echo $str . '<br>';

$str = 'bye bye bye';
$new_str = str_replace('bye', 'hey', $str);
echo $new_str . '<br>';

$str = 'Hi, hi, hi';
$new_str = str_replace('hi', 'bye', $str, $cout);
echo $cout . '<br>';

$str  = 'The quick brown fox jumps over the lazy dog';
$animals = ['fox', 'dog'];
$new_animals = ['wolf', 'cat'];

$new_str = str_replace($animals, $new_animals, $str);
echo $new_str . '<br>';

$str = 'Hi, hi, hi';
$new_str = str_ireplace('hi', 'bye', $str, $cout);
echo $new_str;
