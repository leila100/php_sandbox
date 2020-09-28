<?php
# Array - Variable that olds multiple values
/*
      Three types:
      - Indexed
      - Associative
      - Multi-dimensional
    */

// Indexed
$people = array('Leila', 'Anissa', 'Kenza');
// echo $people[1];
$ids = array(23, 55, 12);
// echo $ids[2];
$cars = ['Honda', 'Toyota', 'Ford'];
// echo $cars[0];
$cars[3] = 'BMW'; // add at specific index
$cars[] = "Audi"; // add to end of array
// echo count($cars);
// print_r($cars); //to print all the values in the array
// var_dump($cars); // to print more details about hte values datatypes

//Associative - kind of like hashmap/objects
$people = array('Aida' => 13, 'Kenza' => 9, 'Anissa' => 16);
// echo $people['Aida'];
$ids = array(13 => 'Aida', 9 => 'Kenza', 16 => 'Anissa');
// echo $ids[16];
$people['Leila'] = 46;
// echo $people['Leila'];
// print_r($people);
// var_dump($people);

// Multi-dimensional
$cars = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 10, 5),
);

// echo $cars[1][0];
print_r($cars);
