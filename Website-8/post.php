<?php

require("config/config.php");
require("config/db.php");

// Get ID
$id = mysqli_real_escape_string($conn, $_GET["id"]);

//Create Query
$query = "SELECT * FROM posts WHERE id= " . $id;

// Get Result
$result = mysqli_query($conn, $query);

// Fetch data
$post = mysqli_fetch_assoc($result);
// var_dump($posts);

// Free Result
mysqli_free_result($result);

// Close Connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">
  <title>PHP Post</title>
</head>

<body>
  <div class="container">
    <a href="<?php echo ROOT_URL; ?>" class="btn btn-primary">Back</a>
    <h1><?php echo $post["title"]; ?></h1><br>
    <small>Created on: <?php echo $post["created_at"]; ?><br></small>
    <strong>Author: <?php echo $post["author"]; ?></strong>
    <p><?php echo $post["body"]; ?></p>
  </div>
  </div>
</body>

</html>