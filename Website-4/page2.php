<?php
session_start(); // Starting session

$name = $_SESSION["name"]; // Declaring session variable
$email = $_SESSION["email"]; // Declaring session variable

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Sessions</title>
</head>

<body>
  <h5>Thank you <?php echo $name; ?>,<br>
    You have subscribed with the email <?php echo $email; ?></h5>
  <a href="page3.php">Go to page 3</a>
</body>

</html>