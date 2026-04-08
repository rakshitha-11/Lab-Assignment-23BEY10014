<?php
$file = "data.txt";

// Write
file_put_contents($file, "Hello Student\n");

// Append
file_put_contents($file, "New Data Added\n", FILE_APPEND);

// Read
$content = file_get_contents($file);
echo $content;
?>