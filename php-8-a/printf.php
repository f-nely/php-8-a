<?php

// printf - mostra uma string formatada (com um número variável de argumentos)

// podemos usar a função para simplesmente fazer o output do texto
printf('Olá Mundo!<br>');

// substitui o %s pelo argumento em sequência
printf('O meu nome é %s e o apelido é %s<br>', 'joão', 'ribeiro.');

// apresenta o código binário do valor
$valor = 65;
printf('%b<br>', $valor);

// apresenta o caracter cujo código ASCII é indicado em $valor
printf('%c<br>', $valor);

/*
o valor é apresentado como um inteiro.
se o valor for uma string alfanumérica, vai dar zero. se for 
uma string com valor numérico apresentado o número.
*/
printf('%d<br>', $valor);

// The printf function outputs a formatted string
/*
printf(format,arg1,arg2,arg++) 
format - Required. Specifies the string and how to format the variables in it.
Possible format values:

    %% - Returns a percent sign
    %b - Binary number
    %c - The character according to the ASCII value
    %d - Signed decimal number (negative, zero or positive)
    %e - Scientific notation using a lowercase (e.g. 1.2e+2)
    %E - Scientific notation using a uppercase (e.g. 1.2E+2)
    %u - Unsigned decimal number (equal to or greather than zero)
    %f - Floating-point number (local settings aware)
    %F - Floating-point number (not local settings aware)
    %g - shorter of %e and %f
    %G - shorter of %E and %f
    %o - Octal number
    %s - String
    %x - Hexadecimal number (lowercase letters)
    %X - Hexadecimal number (uppercase letters)
arg1 - Required. The argument to be inserted at the first %-sign in the format string
arg2 - Optional. The argument to be inserted at the second %-sign in the format string
arg++ - Optional. The argument to be inserted at the third, fourth, etc. %-sign in the format string
*/
$number = 9;
$str = 'Beijing';
printf('There are %u million bicycles in %s.<br>', $number, $str);

// Using the format value %f
$number = 123;
printf("%f<br>",$number);

// Use of placeholders
printf("With 2 decimals: %1\$.2f
<br>With no decimals: %1\$u<br>",$number);

// A demonstration of all possible format values
$num1 = 123456789;
$num2 = -123456789;
$char = 50; // The ASCII Character 50 is 2

// Note: The format value "%%" returns a percent sign
printf("%%b = %b <br>",$num1); // Binary number
printf("%%c = %c <br>",$char); // The ASCII Character
printf("%%d = %d <br>",$num1); // Signed decimal number
printf("%%d = %d <br>",$num2); // Signed decimal number
printf("%%e = %e <br>",$num1); // Scientific notation (lowercase)
printf("%%E = %E <br>",$num1); // Scientific notation (uppercase)
printf("%%u = %u <br>",$num1); // Unsigned decimal number (positive)
printf("%%u = %u <br>",$num2); // Unsigned decimal number (negative)
printf("%%f = %f <br>",$num1); // Floating-point number (local settings aware)
printf("%%F = %F <br>",$num1); // Floating-point number (not local settings aware)
printf("%%g = %g <br>",$num1); // Shorter of %e and %f
printf("%%G = %G <br>",$num1); // Shorter of %E and %f
printf("%%o = %o <br>",$num1); // Octal number
printf("%%s = %s <br>",$num1); // String
printf("%%x = %x <br>",$num1); // Hexadecimal number (lowercase)
printf("%%X = %X <br>",$num1); // Hexadecimal number (uppercase)
printf("%%+d = %+d <br>",$num1); // Sign specifier (positive)
printf("%%+d = %+d <br>",$num2); // Sign specifier (negative)

// A demonstration of string specifiers
$str1 = "Hello";
$str2 = "Hello world!";

printf("[%s]<br>",$str1);
printf("[%8s]<br>",$str1);
printf("[%-8s]<br>",$str1);
printf("[%08s]<br>",$str1);
printf("[%'*8s]<br>",$str1);
printf("[%8.8s]<br>",$str2);