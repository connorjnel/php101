<?php
// People array @TODO Get from DB
$people[] = "Liam";
$people[] = "Olivia";
$people[] = "Noah";
$people[] = "Oliver";
$people[] = "Elijah";
$people[] = "James";
$people[] = "William";
$people[] = "Benjamin";
$people[] = "Lucas";
$people[] = "Henry";
$people[] = "Theodore";
$people[] = "Emma";
$people[] = "Charlotte";
$people[] = "Amelia";
$people[] = "Ava";
$people[] = "Sophia";
$people[] = "Isabella";
$people[] = "Mia";
$people[] = "Evelyn";
$people[] = "Harper";

// Get Query String
$q = $_REQUEST["q"];

$suggestion = "";

// Get suggestions

if ($q !== "") {
  $q = strtolower($q);
  $len = strlen($q);
  foreach ($people as $person) {
    if (stristr($q, substr($person, 0, $len))) {
      if ($suggestion === "") {
        $suggestion = $person;
      } else {
        $suggestion .= ", $person";
      }
    }
  }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;