<?php

// echo readfile("28_file.txt");

//fopen

$mydata=fopen("28_file.txt","r");
// $filesize=filesize("28_file.txt");
//to find the file size use this method
// echo fread($mydata,$filesize);//entire thing will be prinrted in one paragraph

// echo fgets($mydata);
//only first line will be printed
while(!feof($mydata)){
    // echo fgets($mydata);
    echo fgetc($mydata);//get character by character
    echo "<br>";

}
fclose($mydata);
//fread will have two parameters fread(filemode ,and filesize)

// readfile("myfile.txt");
// readfile("1.png");
// readfile("bootstrap.html");

?>
