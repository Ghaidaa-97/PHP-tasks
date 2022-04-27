<?php
function leapYears($year){
    if($year % 4 === 0){
        echo "<h1>" . "This year is a leap year" . "</h1>";
    }
    else{
        echo "<h1>" . "This year is not a leap year" . "</h1>";
    }
}
leapYears(2016);

// 2.	Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’

function checkSeason($temp){
    if($temp < 20){
        echo "<h1>" . "We are in Winter" . "</h1>";
    }
    else{
        echo "<h1>" . "It is Summertime!" . "</h1>" ;
    }
}
checkSeason(18);


// 3.	Write a PHP script to calculate the sum of the two integers. If the two values are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’

function calc($num1, $num2){
    if($num1 == $num2){
        return "<h1>" .  ($num1 + $num2) * 3 . "</h1>";
    }else{
        return "<h1>" . $num1 + $num2 . "</h1>" ;
    }
}
echo calc(2,2);




// 4.	Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

function isThirty($num1,$num2){
    $sum = $num1 + $num2;
    if($sum == 30){
        return "<h1>" . $sum . "</h1>" ;
    }
    else{
        return "<h1>" . "False" . "</h1>";
    }
}
echo isThirty(15,5);

// 5.	Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

function isMultipleOfThree($num){
    if($num % 3 == 0){
        return "<h1>" . $num . "</h1>";
    }
    else{
        return "<h1>" . "False" . "</h1>";
    }
}
echo isMultipleOfThree(27);


// 6.	Write a PHP script to check if the integer value is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

function rangeCheck($num){
    if($num <= 50 && $num >= 20){
        return "<h1> $num </h1>";
    }
    else{
        return "<h1> False the number is not in range";
    }
}
echo rangeCheck(50);

// 7.	Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9
function largestNumber($num1, $num2, $num3){
    $arr = [$num1,$num2,$num3];
    return "<h1>" . max($arr) . "</h1>" ;
}
echo largestNumber(6,24,"100");

// 8.	Write PHP script to calculate the monthly electricity bill according to these rules
// a.	For first 50 units – 2.50 JOD/Unit
// b.	For next 100 units – 5.00 JOD/Unit
// c.	For next 100 units – 6.20 JOD/Unit
// d.	For units above 250 – 7.50 JOD/Unit

function electricBill($voltage){
    if ($voltage > 0 && $voltage <= 50){
        return "<h1> Your bill is: " . $voltage * 2.5 . "JOD";
    }
    elseif($voltage > 50 && $voltage <= 150){
        return "<h1> Your bill is: " . 50 * 2.5 + ($voltage - 50) * 5 . "JOD";
    }
    elseif($voltage > 150 && $voltage <= 250){
        return "<h1> Your bill is: " . 50 * 2.5 + 100 * 5 + ($voltage - 150) * 6.2 . "JOD";
    }
    elseif($voltage > 250){
        return "<h1> Your bill is: " . 50 * 2.5 + 100 * 5 + 100 * 6.2 + ($voltage - 250) * 7.5 . "JOD";
    }
    else{
        return "Please enter a valid number";
    }
}
echo electricBill(450);


// 9.	Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

function checkAge($age){
    if($age>=18){
        return "<h1> You are eligible to vote </h1>";
    }
    else{
        return "<h1> You're illeligible to vote </h1>";
    }
}
echo checkAge(15);

// 10.	Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

function checkNumberSign($num){
    if($num < 0){
        return "<h1> Negative </h1>";
    }
    elseif($num == 0){
        return "<h1> Zero </h1>";
    }
    else{
        return "<h1> Positive</h1>";
    }
}
echo checkNumberSign("-60");

// 11.	Write php script to make a calculator, the calculator should contain the four main operations 

// e.	Addition
// f.	Subtraction
// g.	Multiplication
// h.	Division

function calculator($num1, $num2, $sign){
    if($sign === "+"){
        return $num1 + $num2;
    }elseif($sign === "-"){
        return $num1 - $num2;
    }elseif($sign === "*"){
        return $num1 * $num2;
    }elseif($sign === "/"){
        return $num1 / $num2;
    }
}
echo calculator(2, 5 , "*");
echo "<br>";
// 12.	Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’

// Range	Grade
// <60	F
// <70	D
// <80	C
// <90	B
// <100	A

function GPA($arr){
    $grade = "";
    $sum=0;
    foreach($arr as $grade){
        $sum += $grade;
    }
    $sum /= count($arr);
    switch($sum){
        case $sum <= 60:
            $grade = "F";
            break;
        case $sum <= 70 :
            $grade = "D";
            break;
        case $sum <= 80:
            $grade = "C";
            break;
        case $sum <= 90:
            $grade = "B";
            break;
        case $sum <= 100:
            $grade = "A";
            break;
    }
    return $grade;
}
echo GPA([60,86,95,63,55,74,79,62,70]);