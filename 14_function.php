<?php
// echo "Welcome to php tutorial on functions <br>";

// function processMarks($marksArr){
//     $sum = 0;
//     foreach ($marksArr as $value) {
//         $sum += $value;
//     }
//     return $sum;
// }

// function avgMarks($marksArr){
//     $sum = 0;
//     $i = 0;
//     foreach ($marksArr as $value) {
//         $sum += $value;
//         $i++;
//     }
//     echo $i . "<br>";
//     return $sum/$i;
// }

// $rohanDas = [34, 98, 45, 12, 98, 93];
// // $sumMarks = processMarks($rohanDas);
// $sumMarks = avgMarks($rohanDas);

// $harry = [99, 98, 93, 94, 17, 100];
// // $sumMarksHarry = processMarks($harry);
// $sumMarksHarry = avgMarks($harry);
// echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
// echo "Total marks scored by Harry out of 600 is $sumMarksHarry <br>";


// // declare(strict_types=1);
// // function numbers(int $x,int $y){
// //     return $x+$y;//it will add the string and int and result 210 to avoid use 
// // }
// // echo numbers(10,20);


declare(strict_types=1);
function numbers(int $x,float $y):float{
    return $x+$y;//it will add the string and int and result 210 to avoid use 
}
echo numbers(10,10.4);


?>
