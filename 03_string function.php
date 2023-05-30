<?php 

$name = "Harry is a good boy";
echo $name;
echo "<br>";

echo "The length of " . "my string is " . strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name, "Harry");
echo "<br>";
echo str_replace("Harry", "Rohan", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
echo "<pre>";
echo rtrim("    this is a good boy     ");
echo "<br>";
echo ltrim("    this is a good boy     ");
echo "</pre>";


///



$str = "This this this";
echo $str. "<br>";
$lenn = strlen($str);
echo "The length of this string is ". $lenn . ". Thank you <br>";
echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
echo "The reversed string is ". strrev($str) . ". Thank you <br>";
echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
// echo $lenn;
?>
