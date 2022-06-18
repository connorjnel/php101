<?php
if (isset($_GET["name"])) { // Used to check if array is there using isset
  $name = htmlentities($_GET["name"]); // good for securing against harmful script injection
  // print_r($_GET);
}

// if (isset($_POST["name"])) { // Used to check if array is there using isset
//   $name = htmlentities($_POST["name"]); // good for securing against harmful script injection, using variable even better
//   echo $name;
//   // print_r($_GET);
// }

// if (isset($_REQUEST["name"])) { // With post the method in form can be either GET or POST, not used often
//   $name = htmlentities($_REQUEST["name"]); // good for securing against harmful script injection, using variable even better
//   echo $name;
//   // print_r($_GET);
// }

// echo $_SERVER["QUERY_STRING"]; // Not secure
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET & POST</title>
</head>

<body>
  <h1>Form</h1><br>
  <form action="get_post.php" method="POST">
    <div>
      <label for="">Name</label><br>
      <input type="text" name="name" id="">
    </div>
    <div>
      <label for="">Email</label><br>
      <input type="email" name="email" id="">
    </div>
    <input type="submit" name="" id="" value="Submit">
  </form>
  <ul>
    <li>
      <a href="get_post.php?name=Jovan">Jovan</a>
      <a href="get_post.php?name=Steve">Steve</a>
    </li>
  </ul>
  <?php echo "{$name}'s Profile"; ?>

</body>

</html>