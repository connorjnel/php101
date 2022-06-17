<?php

# DATE & TIMESTAMPS

// echo date("d"); // Show date - DAY
// echo date("m"); // Show date - MONTH
// echo date("Y"); // Show date - YEAR
// echo date("l"); // Show date - DAY OF WEEK

// echo date("Y/m/d"); // Combining date output
// echo date("l d/m/Y"); // Combining date output

// echo date("h"); // Hour
// echo date("i"); // Minutes
// echo date("s"); // Seconds
// echo date("a"); // AM/PM

# Set Timezone - London is GB
date_default_timezone_set("GB");

// echo date("h:i:sa") // Hour + minutes + second + AM/PM

$timestamp = mktime(15, 52, 55, 17, 6, 2022); // Hour + Minute + Second + Day + Month + Year

// echo $timestamp; // Outputs number of seconds passed since 01/01/1970 00:00:00 until date stamped

// echo date("m/d/y h:i:sa", $timestamp)

$timestamp2 = strtotime("7:00pm March 22 2016"); // Setting variable based on time, very flexible
$timestamp3 = strtotime("tomorrow"); // Setting variable based on time, very flexible
$timestamp4 = strtotime("next Sunday"); // Setting variable based on time, very flexible
$timestamp5 = strtotime("+63 Days 14 Minutes"); // Setting variable based on time, very flexible

// echo $timestamp2;

// Echo out date/time variable with preset format in first param and variable name in second param.
echo date("m/d/y h:i:sa", $timestamp5)




?>



<br>
<br>
<p>Text just so that vscode doesnt remove my closing php tag.