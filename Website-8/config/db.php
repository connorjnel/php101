<?php

// Create DB Connection

$conn = mysqli_connect("localhost", "root", "baka", "phpblog");

// Check DB Connection

if (mysqli_connect_errno()) {
  // Connection Failed
  echo "Connection failed to DB" . mysqli_connect_errno();
} else {
  // Connection Succeeded
  // echo "Connection successfully established to DB" . mysqli_connect_errno() . "<br>";
}