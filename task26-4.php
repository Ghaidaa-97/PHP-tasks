<?php

##########################################


// PHP Basic Tasks                                                
// Date: 26/Apr/2022    Duration: until 4:00 am            
// Array 

//  
//     1. **  Required ** 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
//     • green
//     • red
//     • white
//  

$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $value) {
    echo "<li> $value </li>" ;
}
echo "</ul>";





//     2. **  Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 

$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

asort($cities);
foreach ($cities as $key => $value) {
    echo "The capital of $key is $value <br>";
}


//     3. **  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white

$color = array (4 => 'white', 6 => 'green', 11=> 'red');
echo $color["4"] . "<br>";




//     4. **  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange
$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
krsort($fruits);
foreach ($fruits as $key => $value) {
    echo $key . "= " . $value . "<br>";
}


//  
//     5. **  Optional ** Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures. 

// Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

// Expected Output:
// Average Temperature is: 70.6 
// List of seven lowest temperatures: 60, 62, 63, 63, 64, 
// List of seven highest temperatures: 76, 78, 79, 81, 85,
//  
//     6. **  Optional ** Write a PHP program to merge the following two arrays. 

// Sample Input: 

// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// Expected Output:

// Array
// (
//     [color] => green
//     [0] => 2
//     [1] => 4
//     [2] => a
//     [3] => b
//     [shape] => trapezoid
//     [4] => 4
// )


//  
//     7. **  Optional ** Write a PHP script which displays all the numbers between 200 and 250 that are divisible by 4.      

// Expected Output: 200,204,208,212,216,220,224,228,232,236,240,244,248
//  


//     8. **  Required ** Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.


$words= array("abcd","abc","de","hjjj","g","wer");

$lengths = array_map('strlen', $words);

echo "The shortest array length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".";










//     9. **  Optional ** Write a PHP script to generate unique random 10 numbers within a specific range. 

// Sample Input: (11, 20)
// Sample Output: 17 16 13 20 14 19 18 15 11 12
//  


//     10. **  Optional ** Write a PHP script that returns the lowest integer in the array  that is not 0. 

// Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
// Sample Output:  2




//loop
<?php


// PHP Basic Tasks                                            

// Date: 26/Apr/2022    Duration: until 4:00 am            
// Loops 

//  
//     1. Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **

// Expected Output:  total as a number 
$sum = 0;
for($i=0 ; $i <=30 ; $i++){
    $sum += $i; 
}
echo "<h1> $sum </h1>";


//     2. Create a script to generate the following pattern, using the nested for loop. **  Optional **


// Expected Output:

// A A A A A 
// A A A B B 
// A A C C C 
// A D D D D 
// E E E E E

//     3. Create a script to generate the following pattern, using the nested for loop. . **  Optional **

// Expected Output:

// 1 1 1 1 1 
// 1 1 1 2 2 
// 1 1 3 3 3 
// 1 4 4 4 4 
// 5 5 5 5 5







//     4. Create a script to generate the following pattern, using the nested for loop. **  Required **

// Expected Output:

// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5
echo "<h1>";
$arr =[0,0,0,0,0];
for($i=0 ; $i<count($arr) ; $i++){
    echo "<br>";
    $arr[$i]=$i+1;
    for($j=0 ; $j < 5  ; $j++){
        echo  " " . $arr[$j] ;
    }
    $arr = [0,0,0,0,0];
}
echo "</h1>";


//     5. Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. **  Required **

// Sample Input: 5
// Expected Output: 120
function fact($num){
    for ($j=$num - 1; $j > 0; $j--) { 
        $num *= $j;
    }
    return $num;
}
echo "<h1>" .  fact(5) . "</h1>";

//     6. Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **  Required **


$fibon = [0,1];
// printing only the first 20 number on this example.
for ($i=2; $i <20; $i++) { 
    $fibon[$i] = $fibon[$i-1] + $fibon[$i-2];
}
echo "<h1>" . join(",",$fibon) . "</h1>";

//  
//     7. Write a PHP script that creates the following table using for loops. Add cellpadding="3px" and cell spacing="0px" to the table tag. . **  Optional **
// 1 * 1 = 1
// 1 * 2 = 2
// 1 * 3 = 3
// 1 * 4 = 4
// 1 * 5 = 5
// 2 * 1 = 2
// 2 * 2 = 4
// 2 * 3 = 6
// 2 * 4 = 8
// 2 * 5 = 10
// 3 * 1 = 3
// 3 * 2 = 6
// 3 * 3 = 9
// 3 * 4 = 12
// 3 * 5 = 15
// 4 * 1 = 4
// 4 * 2 = 8
// 4 * 3 = 12
// 4 * 4 = 16
// 4 * 5 = 20
// 5 * 1 = 5
// 5 * 2 = 10
// 5 * 3 = 15
// 5 * 4 = 20
// 5 * 5 = 25
// 6 * 1 = 6
// 6 * 2 = 12
// 6 * 3 = 18
// 6 * 4 = 24
// 6 * 5 = 30

//  

//  
//     8. Write a PHP program that repeats integers from 1 to 50. For multiples of three, print "Fizz" instead of the number, and for multiples of five print "Buzz". For numbers that are multiples of both three and five, print "FizzBuzz".. **  Optional **

// Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….


//     9. Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **


// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15

function FloydTriangle($n){
  $rows = 1;
  for($i = 1; $i <= $n; $i++) {
    for($j = 1; $j <= $i; $j++) {
      echo "$rows "; 
      $rows++;
    }
    echo "<br>"; 
  }
}
echo "<h1>";
FloydTriangle(12);
echo "</h1>";




//     10. Write a PHP program to print the following pattern. . **  Optional **
   
// Expected Output:

//      A 
//     A B 
//    A B C 
//   A B C D 
//  A B C D E 
//   A B C D 
//    A B C 
//     A B 
//      A

//  