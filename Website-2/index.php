<!-- PHP Template include -->
<?php include("server-info.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website 2</title>
  <!-- Stylesheet include - Bootstrap CDN -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1>Server & File Info</h1>
    <!-- Check for array -->
    <?php if ($server) : ?>
    <ul class="list-group">
      <!-- Run through associative array and output key and value -->
      <?php foreach ($server as $key => $value) : ?>
      <li class="list-group-item">
        <strong><?php echo $key; ?>: </strong>
        <?php echo $value ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
  <br>

  <div class="container">
    <h1>Client Info</h1>
    <?php if ($client) : ?>
    <ul class="list-group">
      <?php foreach ($client as $key => $value) : ?>
      <li class="list-group-item">
        <strong><?php echo $key; ?>: </strong>
        <?php echo $value ?>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
  <br>

  <!-- Foreach test for a multi dimensional array -->
  <div class="container">
    <h1>Testing array</h1>
    <?php if ($testing) : ?>
    <ul class="list-group">
      <?php foreach ($testing as $test) : ?>
      <li class="list-group-item">
        <strong><?php echo $test[0]; ?>: </strong>
        <?php echo $test[1] ?> |
        <i><?php echo $test[2] ?></i>
      </li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
  </div>
</body>

</html>