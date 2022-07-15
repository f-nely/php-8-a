<?php

// explode() function to split a string by a separator into an array of strings

/*
The PHP explode() function returns an array of strings by splitting a string by 
a separator. The following shows the syntax of the explode() function:
*/

// explode ( string $separator , string $string , int $limit = PHP_INT_MAX ) : array

/*
The explode() function has the following parameters:

    $separator is the delimiter that the explode() function uses to split the $string.
    $string is the input string
    $limit specifies how the function will return the result array.
*/

echo '<pre>';
$str_nomes = 'joão, carlos, ana, antônio';
$nomes = explode(', ', $str_nomes);
print_r($nomes);

$nomes = explode(', ', $str_nomes, 2);
print_r($nomes);

// The following example uses the explode() function to split a string by a comma (,):
$str = 'first_name, last_name, email, phone';
$headers = explode(', ', $str);
print_r($headers);

// Using the PHP explode() function with a positive $limit
$headers = explode(', ', $str, 3);
print_r($headers);

// Using the PHP explode() function with a negative $limit
$headers = explode(', ', $str, -2);
print_r($headers);

echo '</pre>';

// A practical example of the PHP explode() function
/* The following str_after() function returns the remainder 
of a string after the first occurrence of a string: */
function str_after($str, $search) 
{
    return $search === '' ? $search : array_reverse(explode($search, $str, 2))[0];
}

echo str_after('john.doe@phptutorial.net', '@');