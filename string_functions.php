<?php

# substr()
# Returns a portion of a string

// $output = substr("Hello", 1, 3); // Accepts to arguments for start and finish
// $output = substr("Hello", -2); // Can also accept negative values
// echo $output;

# strlen()
# Returns the length of a string

// $output = strlen("Hello");
// echo $output;

# strpos()
# Find the position of the first occurence of a sub string

// $output = strpos("Hello World", "o");
// echo $output;

# strrpos()
# Find the position of the last occurence of a sub string

// $output = strrpos("Hello World", "o");
// echo $output;

# trim()
# Strips Whitespace

// $text = "Hello world                                                ";
// // var_dump($text);

// $trimmed = trim($text);
// var_dump($trimmed);

# strtoupper()
# Makes everything uppercase

// $upper = "Haha";
// echo strtoupper($upper);

# strtolower()
# Makes everything lowercase

// $lower = "Haha";
// echo strtolower($lower);

# ucwords()
# Capitalize every word in string

// $output = ucwords("haha haha world");
// echo $output;

# str_replace()
# Replace all occurences of a search string with a replacement
# Case sensitive

// $text = "Hello World";
// $output = str_replace("World", "Everyone", $text);
// echo $output;

# is_string()
# Check if string

// $val = "Hello";
// $output = is_string($val);

// echo $output; // Returns 1 if true

// $values = [true, false, null, "abc", 33, "33", 22.4, "22.4", "", " ", 0, "0"];

// foreach ($values as $value) {
//   if (is_string($value)) {
//     echo "{$value} is a string<br>";
//   }
// }

# gzcompress()
# Compress a string

$string = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. A, architecto! Ipsam, fugiat minus repudiandae nesciunt sunt ut obcaecati accusamus deserunt soluta eum cum placeat excepturi quas incidunt, voluptates tenetur quae debitis ea est mollitia totam. Minima provident reprehenderit exercitationem consequatur voluptatum odit, doloremque fugiat enim nisi magni magnam totam laborum?";

$compressed = gzcompress($string);
// echo $compressed;

$uncompressed = gzuncompress($compressed);
echo $uncompressed;