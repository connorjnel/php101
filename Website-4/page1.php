<?php
if (isset($_POST["submit"])) { // Triggers session start on submit
  session_start(); //Start session
  $_SESSION["name"] = htmlentities($_POST["name"]); // Setting session value from input
  $_SESSION["email"] = htmlentities($_POST["email"]); // Setting session value from input

  header("Location: page2.php"); // Redirect to other page
}
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
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <input type="text" name="name" placeholder="Enter Name">
    <br>
    <input type="text" name="email" placeholder="Enter Email">
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>