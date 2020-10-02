<?php
$path = '/dir0/dir1/myfile.php';
$file1 = 'file1.txt';
/*
// Return filename
echo basename($path);

//Return filename without ext
echo basename($path, '.php');


// Return directory name from path
echo dirname($path);

// Check if file or directory exists
echo file_exists($file1);

// Get absolute path
echo realpath($file1);

// Check to see if file
echo is_file($file1);

// check if writable
echo is_writable($file1);

//Check if readable
echo is_readable($file1);

// Get file size
echo filesize($file1);

// Create a directory
mkdir('testing');

// Delete directory - has to be empty
rmdir('testing');

// Copy a file
echo copy('file1.txt', 'file2.txt');

// Rename a file
rename($file2, 'file3.txt');

// Delete a file
unlink('file3.txt');

// Write from file to string
echo file_get_contents($file1);

// Write string to file
echo file_put_contents($file1, "Goodbye World!");

// Append to file
$current = file_get_contents($file1);
$current .= " Hello World!";
echo file_put_contents($file1, $current);

// Open file for reading
$handle = fopen($file1, 'r');
$data = fread($handle, filesize($file1));
echo $data;
fclose($handle);
*/

// Create a file, and open it for writing
$handle = fopen('file2.txt', 'w');
$data = "Miss you!\n";
fwrite($handle, $data);
$data = "How are you?\n";
fwrite($handle, $data);
fclose($handle);
