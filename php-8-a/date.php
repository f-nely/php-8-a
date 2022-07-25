<?php

/*
 The PHP date() function converts timestamp to a more readable date and time format
 Syntax:
 date(format, timestamp)
    - he format parameter in the date() function specifies the format of returned 
      date and time.
    - The timestamp is an optional parameter, if it is not included then the current 
      date and time will be used.

Formatting options available in date() function: The format parameter of the date() 
function is a string that can contain multiple characters allowing to generate the 
dates in various formats. Date-related formatting characters that are commonly used 
in the format string:

    d: Represents day of the month; two digits with leading zeros (01 or 31).
    D: Represents day of the week in the text as an abbreviation (Mon to Sun).
    m: Represents month in numbers with leading zeros (01 or 12).
    M: Represents month in text, abbreviated (Jan to Dec).
    y: Represents year in two digits (08 or 14).
    Y: Represents year in four digits (2008 or 2014).

The following characters can be used along with the date() function to format the time string:

    h: Represents hour in 12-hour format with leading zeros (01 to 12).
    H: Represents hour in 24-hour format with leading zeros (00 to 23).
    i: Represents minutes with leading zeros (00 to 59).
    s: Represents seconds with leading zeros (00 to 59).
    a: Represents lowercase antemeridian and post meridian (am or pm).
    A: Represents uppercase antemeridian and post meridian (AM or PM).
fonte:
https://www.geeksforgeeks.org/php-date-time/
*/
// echo 'Empresa ©️ ' . date('d/m/Y H:i:s');
echo "Today's date is " . date('d/m/Y');

echo "<br> Today's date in various formats <br>";
echo date('d/m/Y') . '<br>';
echo date('d-m-Y') . '<br>';
echo date('d.m.Y') . '<br>';
echo date('d.M.Y/D') . '<br>';

echo date('h:i:s') . '<br>';
echo date('M,d,Y h:i:s A') . '<br>';
echo date('h:i a') . '<br>';
