<?php
# Conditionals
/*
  - == ===
  - < > <= >= 
  - != !==
*/

// $num = '5';
// if ($num == 5) {
//     echo '5 passed';
// }

// if ($num === 5) {
//     echo '5 passed';
// } elseif ($num !== 5) {
//     echo 'did not passed';
// } else {
//     echo 'else statement';
// }

/*
Logical operators
AND - &&
OR - ||
XOR
*/

# switch
$favColor = 'red';
switch ($favColor) {
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, blue, or green';
}
