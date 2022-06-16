<?php

// Single line comment
# Single line comment
/* Multi line 
  comment */

// echo "Hello World </br>"; // Echo outputs string or var
// print 4 * 4; // Print outputs value

# VARIABLE RULES 
/*
  - Prefix with $
  - Start with letter or a underscore, no numbers
  - Only letters, numbers and underscores
  - Case sensitive
*/

# DATA TYPES 
/*
  - Strings, wrap in quotes, single or double quotes
  - Integers, numbers positive or negative, no quotes needed
  - Floats, decimal values
  - Boolean, True or false value, no quotes, lowercase
  - Arrays,
  - Objects,
  - NULL,
  - Resource,
*/

# VARIABLE EXAMPLES

// $string = "Hello World";
// echo $string;
// echo "<br>";
// $integer = 5;
// echo $integer;
// echo "<br>";
// $float = 1.2345;
// echo $float;
// echo "<br>";
// $boolean = false;
// echo $boolean;
// echo "<br>";

# MATHEMATIC OPERATIONS

// $num1 = 4;
// $num2 = 10;
// $sum = $num1 + $num2;

// echo $sum;

# STRING CONCATENATIONS

// $string1 = "Hello";
// $string2 = "World";
// // $greeting = $string1 + $string2; // Incorrect, non numeric value
// // $greeting = $string1 . " " . $string2; // Correct, adds space, concatenate
// $greeting = "$string1 $string2"; // Use double quotes

// echo $greeting;

#ESCAPE SEQUENCE

// $string3 = 'They\'re here'; // Add backslash before single quote, or use double quotes for strings
// $string4 = "They're here"; // Using double quotes
// $string5 = "They\"re here"; // Needs backslash if double quote is in string
// echo $string3;
// echo "</br>";
// echo $string4;
// echo "</br>";
// echo $string5;

#CONSTANTS 

define("greeting", "HAHA"); // Name then value, no $ needed
echo greeting;