<?php

// Writing to a file in php
// echo "Welcome to write files in php";
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "This is the best file on this planet. Please dont argue with me on this one.\n"); 
// fwrite($fptr, "This is another content\n"); 
// fwrite($fptr, "This is another content3"); 
// fclose($fptr);


// Appending to a file in php
// $fptr = fopen("31_file.txt", "a");
// fwrite($fptr, "This is being appended to the file\n"); 
// fclose($fptr);

//fOpen()
$mynewfile=fopen("php.txt","w");
// echo $mynewfile;

$text="aashiqui bhai";
fwrite($mynewfile,$text);
// fclose($text);

?>
