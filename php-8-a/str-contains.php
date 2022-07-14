<?php

// str_contains() function to check if a string contains a substring

$str = 'Minha terra tem palmeiras
Onde canta o Sabiá';

$content = 'Sabiá';

if (str_contains($str, $content)) {
    echo 'sim';
} else {
    echo 'não';
}

echo '<br>';

$haystack = 'PHP is cool.';
$needle = 'Cool';

$result = str_contains($haystack, $needle) ? 'is' : 'is not';

echo "The string {$needle} {$result} in the sentece.";

