<?php
#ARRAY - Variable that holds multiple values
/* 
  - Indexed
  - Associative 
  - Multi Dimensional 
*/

# INDEXED ARRAY STRING
// $people = array("Mike", "Shaun", "Kevin");
// echo $people[0];

# INDEXED ARRAY NUMBERS
// $numbers = array(99, 25, 43);
// echo $numbers[2];

# ARRAYS ALTERNATE METHOD
// $cars = ["Honda", "Mitsubishi", "Toyota", "Volkswagen"];
// echo $cars[2];

# ADDING VALUES TO INDEXED ARRAY
// $cars[4] = "BMW"; // Add value at specific index location
// $cars[] = "Nissan"; // Add value to last index available index location
// echo $cars[5];

#USEFUL ARRARY FUNCTIONS
// echo count($cars); // Display number of values in array
// print_r($cars); // Displays all values in array with index locations
// var_dump($cars); // Displays all values in array with index locations and data types, good for debugging

# ASSOCIATIVE ARRAYS - Array that uses keys
// $people = array("Brad" => 35, "Jose" => 32, "William" => 37);
// $ids = [22 => "Brad", 44 => "Jose", 63 => "William"];
// echo $people["Brad"]; // Use key to call value, ie Brad = 35
// echo $ids[22]; // Same story as before, using key to call value just with number => string
// $people["Jill"] = 42; // Adding value to associative array
// echo $people["Jill"];

# MULTI DIMENSIONAL ARRAY - Array with arrays in it
$cars = [
  ["Honda", 20, 10],
  ["BMW", 25, 15],
  ["Ford", 63, 20]
];

echo $cars[2][1];