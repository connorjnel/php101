<?php
// Message variables

$msg = "";
$msgClassFail = "";

// Check for submit
if (filter_has_var(INPUT_POST, "submit")) {
  // Get form data
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $message = htmlspecialchars($_POST["message"]);

  // Check required fields 
  if (!empty($email) && (!empty($name) && (!empty($message)))) {
    // Passed
    // Check email
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      // FAILED
      $msg = "Please use a valid email";
      $msgClassFail = "alert-dismissible alert-warning";
    } else {
      // PASSED
      // Recipient email
      $toEmail = "connor.j.nel00@gmail.com";
      $subject = "Contact Request From " . $name;
      $body = "<h2>Contact Request</h2>
              <h4>Name:</h4><p>" . $name . "</p></br>
              <h4>Email:</h4><p>" . $email . "</p></br>
              <h4>Message:</h4><p>" . $message . "</p></br>
              ";

      //Email Headers
      $headers = "MIME-Version: 1.0" . "\r\n";
      $headers .= "Content-Type:text/html;charset=UTF-8" . "
      \r\n";

      // Additional Headers
      $headers .= "From: " . $name . "<" . $email . ">" . "\r\n";

      if (mail($toEmail, $subject, $body, $headers)) {
        //Email sent
        $msg = "Your email has been sent";
        $msgClassFail = "alert-dismissible alert-success";
      } else {
        //Email not sent
        $msg = "Your email was not sent";
        $msgClassFail = "alert-dismissible alert-warning";
      }
    }
  } else {
    // Failed
    $msg = "Please fill in all fields";
    $msgClassFail = "alert-dismissible alert-warning";
  }
}

$test = "123";
$test .= "456";
echo $test;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="inc/bootstrap.min.css">
  <title>Contact Us</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand">My Website</a>
      </div>
    </div>
  </nav>
  <br>
  <div class="container">
    <?php if ($msg != "") : ?>
    <div class="alert <?php echo $msgClassFail; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
      <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST["name"]) ? $name : ""; ?> ">
      </div>
      <div class=" form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST["email"]) ? $email : ""; ?> ">
      </div>
      <div class="form-group">
        <label for="">Message</label>
        <textarea name="message" id="" cols="30" rows="10" class="form-control"><?php echo isset($_POST["message"]) ? $message : ""; ?></textarea>
      </div>
      <br>
      <button type="submit" name="submit" class="btn btn-warning">Submit</button>
    </form>
  </div>
</body>

</html>