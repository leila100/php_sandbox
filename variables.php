<?php
// single line comment
# single line comment
/*
multi line 
comment
*/

$output = 'Hello World!';
$string1 = 'Hello';
$string2 = 'World';
$greeting1 = $string1 . ' ' . $string2 . '!';
$greeting2 = "$string1 $string2!";

// Declaring and initializing a constant
define('GREETING', 'Hello World!!!');

// echo $greeting1;
// echo $greeting2;
echo GREETING;
