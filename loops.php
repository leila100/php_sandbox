<?php
# Loops - execute code a set amount of times

/*
      - for 
      - while
      - do ... while
      - foreach
    */

# For Loops
# @params - init, condition, increment
// for ($i = 0; $i < 10; $i++) {
//     echo $i;
//     echo '<br>';
// }

# While Loop
# @params - condition
// $i = 0;
// while ($i < 10) {
//     echo $i;
//     echo '<br>';
//     $i++;
// }


# Do ... While Loop
# @params - condition
// $i = 0;
// do {
//     echo $i;
//     echo '<br>';
//     $i++;
// } while ($i <= 10);

# foreach loop - for arrays
// $people = array('Leila', 'Anissa', 'Kenza');
// foreach ($people as $person) {
//     echo $person;
//     echo '<br>';
// }

# foreach loop - for associative arrays
$people = array('Aida' => 13, 'Kenza' => 9, 'Anissa' => 16);
foreach ($people as $person => $age) {
    echo $person . ': ' . $age;
    echo '<br>';
}
