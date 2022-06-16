<?php

# CONDITIONALS - Test for value, compare value

/*

  ==    Equal to
  ===   Equal to with data type matching
  <     Less than
  >     Greater than
  <=    Less than or equals to
  >=    Greater than or equals to
  !=    NOT equals to 
  !==   NOT equals to with data type matching

*/

// Example
// $num = 6;

// if ($num == 5) {
//   echo "5 Passed";
// } elseif ($num == 6) {
//   echo "6 Passed";
// } else {
//   echo "Did not pass";
// }

// $age = 19;

// if ($age == 18) {
//   echo "You barely pass";
// } elseif ($age < 18) {
//   echo "Too young";
// } elseif ($age > 18) {
//   echo "You pass";
// }

# NESTING IF STATEMENTS

// $num = 5;

// if ($num > 4) {
//   if ($num < 10) {
//     echo "$num Passed";
//   } else {
//     echo "$num Failed";
//   }
// }

# LOGICAL OPERATORS

/*

  AND   &&    Both true
  OR    ||    Either true
  XOR         One true and one false

*/

// $num = 6;

// if ($num > 4 xor $num < 10) {
//   echo "$num Passed";
// }

#SWITCHES

$favColor = "green";

switch ($favColor) {
  case "red":
    echo "Your Fav colour is red";
    break;
  case "blue":
    echo "Your Fav colour is blue";
    break;
  case "green":
    echo "Your Fav colour is green";
    break;
  default:
    echo "Your Fav colour is unknowable";
}

?>



<br>
<br>
<p>Text just so that vscode doesnt remove my closing php tag.