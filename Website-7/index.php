<?php

$path = "/dir1/myfile.php";
$file = "file1.txt";

// Return filename
// echo basename($path);

// Return filename withouth extension
// echo basename($path, ".php");

// Return the directory name from the path
// echo dirname($path);

// Check to see if file exists, checks current directory
// echo file_exists($file);

// Returns real/absolute path
// echo realpath($file);

// Checks to see if file
// echo is_file($file);

// Check if file is writable
// echo is_writable($file);

// Check if file is readable
// echo is_readable($file);

// Check file size
// echo filesize($file);

// Create a directory - F5 in vscode to run
// mkdir("test");

// Delete a directory - directory has to be empty - F5 in vscode to run
// rmdir("test");

// Copy a file - F5 in vscode to run
// echo copy("file1.txt", "file2.txt");

// Rename a file - F5 in vscode to run
// rename("file2.txt", "myfile.txt");

// Delete a file - F5 in vscode to run
// unlink("myfile.txt");

// Write from file to string
// echo file_get_contents($file);

// Write a string to a file - replaces what is there - F5 in vscode to run
// file_put_contents($file, "Goodbye World");

// Append string to a file, need to get whats there first - F5 in vscode to run
// $current = file_get_contents($file);
// $current .= " Goodbye World";
// file_put_contents($file, $current);

// Open a file for reading
// $handle = fopen($file, "r"); // r for read - open can also be used to create a file
// $data = fread($handle, filesize($file));
// echo $data;

// Open file for writing - F5 in vscode to run
// $handle = fopen($file, "w"); // w for write
// $txt = "John Doe\n"; // \n is new line character in php
// fwrite($handle, $txt);
// fclose($handle); // Close file