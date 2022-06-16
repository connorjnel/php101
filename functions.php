<?php

# FUNCTION - Block of code that can be repeatedly called

/* 
  - Camel case - myFunction() - Usually used for functions
  - Lower case - my_fuction() - Usually used for functions
  - Pascal case - MyFunction() - Usually used for classes
*/

// Simple Function
// function simpleFunction() // Define function
// {
//   echo "Hello World"; // Code that runs
// }

// simpleFunction(); // Calling the function

// Function with Param/Argument
// function sayHello($name = "World") // Default value set if no argument supplied
// {
//   echo "Hello $name<br>";
// }

// // Calling function
// sayHello("Joe"); // Calling function with argument
// sayHello("Bob"); // Calling function with argument
// sayHello(); // Calling function with argument, no argument supplied so used default value

// Function with mathematic method
// function addNumbers($num1, $num2)
// {
//   return $num1 + $num2; // Doesnt display on front end, gives a value we can then use
// }

// addNumbers(2, 3); // Two arguments/values supplied


// Passing arguments by reference

$mynum = 10;

function addFive($num)
{
  $num += 5;
}

function addTen(&$num)
{
  $num += 10;
}

addFive($mynum);
echo "Value: $mynum<br>";

addTen($mynum);
echo "Value: $mynum<br>";

?>



<br>
<br>
<p>Text just so that vscode doesnt remove my closing php tag.