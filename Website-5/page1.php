<?php
if (isset($_POST["submit"])) { // Check if form has been submitted
  $username = htmlentities($_POST["username"]); // Save username as variable

  setcookie("username", $username, time() + 3600); // Set Cookie for 1 hour

  header("Location: page2.php"); // Redirect to different page
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
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="username" placeholder="Enter Username">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>