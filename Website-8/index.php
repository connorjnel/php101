<?php

require("config/config.php");
require("config/db.php");


//Create Query
$query = "SELECT * FROM posts";

// Get Result
$result = mysqli_query($conn, $query);

// Fetch data
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
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
  <title>PHP Blog</title>
</head>

<body>
  <div class="container">
    <h1>Posts</h1><br>
    <?php foreach ($posts as $post) : ?>
    <div class="well">
      <h3><?php echo $post["title"]; ?></h3>
      <small>Created on: <?php echo $post["created_at"]; ?><br></small>
      <strong>Author: <?php echo $post["author"]; ?></strong>
      <p><?php echo $post["body"]; ?></p>
      <a class="btn btn-warning" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post["id"]; ?>">Read more</a>
    </div>
    <?php endforeach; ?>
  </div>
</body>

</html>