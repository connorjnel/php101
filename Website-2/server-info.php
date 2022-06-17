<?php
#$_SERVER SUPERGLOBAL

// Create Server Array
$server = [
  "Host Server Name" => $_SERVER["SERVER_NAME"], // Server host name
  "Host Header" => $_SERVER["HTTP_HOST"], // HTTP host
  "Server Software" => $_SERVER["SERVER_SOFTWARE"], // What software server is running
  "Document Root" => $_SERVER["DOCUMENT_ROOT"], // Document root directory
  "Current Page" => $_SERVER["PHP_SELF"], // Current Page / useful for form action
  "Script Name" => $_SERVER["SCRIPT_NAME"], // Current script location
  "Absolute Path" => $_SERVER["SCRIPT_FILENAME"], // Absolute path to current page


];

// print_r($server) // Print out entire array

// Create Client Array
$client = [
  "Client System Info" => $_SERVER["HTTP_USER_AGENT"], // User operating system and browser
  "Client IP" => $_SERVER["REMOTE_ADDR"], // User IP Address
  "Remote Port" => $_SERVER["REMOTE_PORT"], // Remote port
];

// print_r($client); // Print out entire array

// Dummy array

$testing = [
  ["Car", "Fast", "Expensive"],
  ["Horse", "Slow", "Cheap"],
  ["Jet", "Super Fast", "Super Expensive"],
];