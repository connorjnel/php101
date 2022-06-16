<?php
# LOOPS - Exectutes code set number of times

/* 
    - For
    - While 
    - Do..While
    - Foreach
  */

# FOR LOOP
# @params - init, condition, increment

// for ($i = 0; $i < 10; $i++) {
//   echo "Number " . $i;
//   echo "<br>"; // Adds linebreak between result values
// }

# WHILE LOOP
# @params - condition
# Initial value and increment set seperately
# Used when you dont know the set number

// $i = 0;

// while ($i < 10) {
//   echo $i;
//   echo "<br>";
//   $i++;
// }

# DO WHILE LOOP
# @params - condition
# Will always run at least once

// $i = 0;

// do {
//   echo $i;
//   echo "<br>";
//   $i++;
// } while ($i < 10);

# FOR EACH LOOP - Used for arrays

// $people = ["Brad", "Mike", "Bill"];

// foreach ($people as $person) {
//   echo $person;
//   echo "<br>";
// }

$people = ["Brad" => "email@haha.com", "Mike" => "haha@email.com", "Bill" => "Test@fail.com"];

foreach ($people as $person => $email) {
  echo $person . " : " . $email;
  echo "<br>";
}

?>



<br>
<br>
<p>Text just so that vscode doesnt remove my closing php tag.