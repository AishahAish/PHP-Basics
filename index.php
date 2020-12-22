<?php
include 'header.php';


echo ("Welcome")."<br>";  // display - semicolon is compulsary
print ("Welcome to php programing")."<br>";

# this also a comment

#variables

$num1 = 45;
$num2 = 456;

// exadecimal number

$en  = 0x1245;

// Binary number 

$bn = 0b10101;


// floating point number

$fn = 10.5;


// Delete Variable 

unset($fn);

// Arithmatical operations

$a = 123;
$b = 456;
$c = $a + $b;
echo ($c)."<br>";

$x = 60;
// $x = $x * 10;
$x*=10; // short hand of above code $x = $x * 10
echo($x)."<br>";


// increment operator

$a++ ;// means $a+1 - use and then increment

++$a; // first increment then use


// incrdecrement operator
$a--;
--$a;

/*** Strings ***/ 

$name = "Sam";
$name2 = '"Saju"';
echo $name2."<br>";
$name3 = '\'John\''; // use slash to escape error while we need to display string in single quates
echo $name3."<br>";
$name4 = "'Saju'"."<br>";
echo $name4;
$name5 = "\"george\""."<br>";
echo $name5."<br>";

// the difference is while using " is , execution will happen - eg below

$age = 26;
echo "your age is $age"."<br>";

// where as while using single quotes it will considered as text - see below

echo 'your age is $age'."<br>";


//String concatenation

$fname = "Aishah";
$lname = "Yusra";
echo $fname." ".$lname."<br>";


/*** Strings Closed ***/ 


// Constant - to declare predefined values , which will not change, using capital letters to define contant is standard form and define at the top of program

define("PI", 3.14);
echo PI."<br>" ; // will not use $ sign 



// Array

$numbers = [10,20,30,45]; // system generated keys like 0, 1, 2 (means 0th position , 1rst posike and so on )
echo $numbers[0]."<br>";
// $numbers = array(10,20,30,45); // another method to define array using array keyword
// $numbers = [10,20,30,"sam"]; // also can use different datatypes in same array

$ar = ["name"=>"sam", "age"=>"35"]; // manually assigned keys - eg - name and age are keys 
echo $ar["name"];
echo $ar["age"]."<br>";

// Adding elements to array 

array_push($numbers, "60");
echo $numbers[4]."<br>";

// to see all values of array

print_r($numbers)."<br>"; // 1st method
var_dump($numbers)."<br>"; // 2nd method ... detailed display , also gives data types

// to remove element from array

unset($numbers[2]);
var_dump($numbers)."<br>"; 



/*** Control Structures  ***/

// 1. if() - true or false


$y = 10; $z = 20;

if($y <= $z){
echo "success"."<br>";
}
else if(30 > 50){
   echo " nope";
}
else{
    echo "error";
}


// 2. Ternary operator

echo ($y > $z)?$y:$z."<br>";

//3. switch

$s = 1;

switch($s)
{

    case 1 : echo "Happy"."<br>";break;
    case 2 : echo "sad"."<br>";break;
    case 3 : echo "Depressed"."<br>";break;
    default : echo "none of the above"."<br>";break;
}

/*** Loops  ***/

// 1. While Loop - true or false

$i = 0;
while($i<5)
{
    echo $i."<br>";
    $i++;
}

// 2. Do while loop

$j = 0;
do{
    echo $j."<br>";
    $j++;

}while($j<6);


// 3. for loop

for($f=0; $f<10; ++$f)
{
    echo $f."<br>";
}


// 4. for each loop - to define array

$array = [10,20,40,50];

foreach($array as $fe)
{
    echo $fe."<br>";
}


/*** fuctions ***/ 

function sum($a, $b=5){
echo $a+$b."<br>";

}
sum(10, 270); // function call for execution 

// second method - setting default value for argument

function sum2($a, $b=50){ // default value of b is 50
    echo $a+$b."<br>";
    
    }
    sum2(10); // function call for execution 
    
// return values from function 

function sum3($a, $b=150){
    return $a+$b;
    
    }
    echo sum3(10)."<br>";

/*** include another file to this file ***/ 


// 1. using include

//include 'header.php'; // we want to display this section at the top .. so move to top

include 'footer.php';

// 2. using require

require 'footer.php'; // the difference is - if the file is not exist , the program execution will stop where as include will continue program


?>