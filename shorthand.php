<?php

# Shorthand

$loggedIn = false;
$array = [1, 2, 3, 4, 5];

// if ($loggedIn) {
//   echo "You are logged in";
// } else {
//   echo "You are not logged in";
// }

// echo ($loggedIn) ? "You are logged in" : "You are not logged in";

// $isRegistered = ($loggedIn == true) ? true : false;
// echo $isRegistered;

// $age = 15;
// $score = 9;

// If your score is greater than ten then we check age, if age is greater than ten then score is average, if under ten then score is exceptional. Otherwise if score is less than ten then we check age again, if age is over ten then score is horrible, if age is under ten then score is average.  So this is a shorthand expression with a condition nested within a condition.

// echo "Your score is: " . ($score > 10 ? ($age > 10 ? "Average" : "Exceptional") : ($age > 10 ? "Horrible" : "Average"));


// // Longhand method

// if ($score >= 10 && $age >= 10) {
//   echo "Your score is average A";
// } elseif ($score >= 10 && $age <= 10) {
//   echo "Your score is Exceptional";
// } elseif ($score <= 10 && $age >= 10) {
//   echo "Your score is Horrible";
// } else {
//   echo "Your score is average B";
// }

?>


<!--  Inserting conditional into HTML, looks very dirty -->
<div>
  <?php if ($loggedIn) { ?>
  <h1>Welcome User</h1>
  <?php } else { ?>
  <h1>Welcome Guest</h1>
  <?php } ?>
</div>


<!-- Different way -->
<div>
  <?php if ($loggedIn) : ?>
  <h1>Welcome User</h1>
  <?php else : ?>
  <h1>Welcome Guest</h1>
  <?php endif; ?>
</div>

<!-- Looping through array -->
<?php foreach ($array as $value) : ?>
<?php echo $value . "<br>"; ?>
<?php endforeach; ?>