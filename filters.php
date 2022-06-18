<?php

// Check for posted data
// if (filter_has_var(INPUT_POST, "data")) {
//   echo "Data Found";
// } else {
//   echo "Data not found";
// }

// if (filter_has_var(INPUT_POST, "data")) { // Is data field being submitted
//   $email = $_POST["data"]; // If submitted then set as variable
//   // Remove illegal characters
//   $email = filter_var($email, FILTER_SANITIZE_EMAIL); // Filter out illegal characters
//   echo $email . "<br>"; // Echo out filtered email
//   if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // Validate if filtered email is valid
//     echo "EMAIL is valid";
//   } else {
//     echo "EMAIL is not valid";
//   }
// }

# DIFFERENT VALIDATE TYPES

# FILTER_VALIDATE_BOOLEAN
# FILTER_VALIDATE_EMAIL
# FILTER_VALIDATE_FLOAT
# FILTER_VALIDATE_INT
# FILTER_VALIDATE_IP
# FILTER_VALIDATE_REGEXP
# FILTER_VALIDATE_URL

# DIFFERENT SANITIZE TYPES 

# FILTER_SANITIZE_EMAIL
# FILTER_SANITIZE_ENCODED
# FILTER_SANITIZE_NUMBER_FLOAT
# FILTER_SANITIZE_NUMBER_INT
# FILTER_SANITIZE_SPECIAL_CHARS
# FILTER_SANITIZE_STRING
# FILTER_SANITIZE_URL

// $var = 23.5;

// if (filter_var($var, FILTER_VALIDATE_INT)) {
//   echo $var . " is a number";
// } else {
//   $var . " is not a number";
// }

// $var = "<script>alert(1)</script>";
// // echo $var;
// echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
// // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));


// $filters = array(
//   "data" => FILTER_VALIDATE_EMAIL,
//   "data2" => array(
//     "filter" => FILTER_VALIDATE_INT,
//     "options" => array(
//       "min_range" => 1,
//       "max_range" => 100,
//     )
//   )
// );

// print_r(filter_input_array(INPUT_POST, $filters));


// Uber validation and sanitizing of array
$arr = array(
  "name" => "jovan",
  "age" => "34",
  "email" => "test@test.com"
);

$filters = array(
  "name" => array(
    "filter" => FILTER_CALLBACK,
    "options" => "ucwords"
  ),
  "age" => array(
    "filter" => FILTER_VALIDATE_INT,
    "options" => array(
      "min_range" => 1,
      "max_range" => 120,
    )
  ),
  "email" => FILTER_VALIDATE_EMAIL
);

print_r(filter_var_array($arr, $filters));

?>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
  <input type="text" name="data" id="">
  <input type="text" name="data2" id="">
  <button type="submit">Submit</button>
</form>