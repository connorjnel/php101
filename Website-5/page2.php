<?php
// setcookie("username", "Frank", time() + (86400 * 30));

// // Delete cookie
// setcookie("username", "Frank", time() - 3600);

if (count($_COOKIE) > 0) { // Check if there are any cookies
  echo "There are " . count($_COOKIE) . " cookies saved <br>";
} else {
  echo "There are no cookies saved <br>";
}

if (isset($_COOKIE["username"])) {
  echo "Your username is " . $_COOKIE["username"];
} else {
  echo "Username is not set";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Cookies</title>
</head>

<body>

</body>

</html>