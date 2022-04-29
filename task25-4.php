<?php
function leap($y){
    if($y % 4 == 0){
        echo "leap year <br>" ;
    }
    else{
        echo "not a leap year <br>" ;
    }
}
leap(2022);

// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’

function ac($t){
    if($t < 20){
        echo "We are in Winter <br>" ;
    }
    else{
        echo  "It is Summertime! <br>"  ;
    }
}
ac(27);


// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’

function sum1($n1, $n2){
    if($n1 == $n2){
        return  ($n1 + $n2) * 3 ;
    }else{
        return  $n1 + $n2 ;
    }
}
echo sum1(2,2)."<br>";




// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

function y($n1,$n2){
    $s = $n1 + $n2;
    if($s == 30){
        return  $s ;
    }
    else{
        return "False" ;
    }
}
echo y(10,10)."<br>";

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

function t($m){
    if($m % 3 == 0){
        return  $nm ;
    }
    else{
        return  "False" ;
    }
}
echo t(20)."<br>";


// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

function c($m){
    if($m <= 50 && $m >= 20){
        return "$m";
    }
    else{
        return " number is not in the range";
    }
}
echo c(50)."<br>";

// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9
function larger($n1, $n2, $n3){
    $a = [$n1,$n2,$n3];
    return  max($a)  ;
}
echo larger(1, 5, 9 )."<br>";

// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit

function bill($e){
    if ($e > 0 && $e <= 50){
        return " bill: " . $e * 2.5 . "JOD";
    }
    elseif($e > 50 && $e <= 150){
        return " bill: " . 50 * 2.5 + ($e - 50) * 5 . "JOD";
    }
    elseif($e > 150 && $e <= 250){
        return " bill: " . 50 * 2.5 + 100 * 5 + ($e - 150) * 6.2 . "JOD";
    }
    elseif($e > 250){
        return " bill: " . 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($e - 250) * 7.5 . "JOD";
    }
    else{
        return "invalid number";
    }
}
echo bill(200)."<br>";


// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

function g($age){
    if($age>=18){
        return "eligible to vote ";
    }
    else{
        return "illeligible to vote ";
    }
}
echo g(15)."<br>";

// 10.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

function check($n){
    if($n < 0){
        return " negative ";
    }
    elseif($n == 0){
        return " zero ";
    }
    else{
        return " positive";
    }
}
echo check("-60")."<br>";

// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

function ca($n1, $n2, $op){
    if($op== "+"){
        return $n1 + $n2;
    }elseif($op === "-"){
        return $n1 - $n2;
    }elseif($op === "*"){
        return $n1 * $n2;
    }elseif($op === "/"){
        return $n1 / $n2;
    }
}
echo ca(2, 5 , "*")."<br>";

// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

// Range	Grade
// <60	F
// <70	D
// <80	C
// <90	B
// <100	A

function GPA($a){
    $mark = "";
    $sum=0;
    foreach($a as $mark){
        $sum += $mark;
    }
    $sum /= count($a);
    switch($sum){
        case $sum <= 60:
            $mark = "F";
            break;
        case $sum <= 70 :
            $mark = "D";
            break;
        case $sum <= 80:
            $mark = "C";
            break;
        case $sum <= 90:
            $mark = "B";
            break;
        case $sum <= 100:
            $mark = "A";
            break;
    }
    return $mark;
}
echo GPA([60,86,95,63,55,74,79,62,50]);