<?php
#Function - Block of code that could be repeatedly called

function simpleFunction()
{
    echo 'Hello World!!';
}

// simpleFunction();

function sayHello($name = 'Kenza')
{
    echo "Hello $name<br>";
}

// sayHello('Leila');
// sayHello('Anissa');
// sayHello();

function addNumbers($num1, $num2)
{
    return $num1 + $num2;
}

// echo addNumbers(5, 8);

// by reference
function addFive($num)
{
    $num += 5;
}
function addTen(&$num)
{
    $num += 10;
}

$myNum = 20;
addFive($myNum);
echo "My num: $myNum<br>";
addTen($myNum);
echo "My num: $myNum<br>";
