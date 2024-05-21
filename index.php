<?php
echo "<h1>This is PHP</h1>";

//integers
//boolean
//string

echo "<br />";

$number = 2;

$dbqstring = `A string`;

// $sqstring = '';

echo "$dbqstring jskks
sjjskksks
sjjwjw";

echo "<br />";


//if else

if ($number > 2) {
    echo "YES";
    $block = "Blocked";
} else {
    echo "NO";
}

echo "<br />";


//echo $block; // cannot echo out because it is blocked scoped.

//Arrays

//Three types of array

//Indexed Array
$fruits = ["Kiwi", "Apple", "StarFruit", ["Pumpkin", "carrot"]];

echo $fruits[3][0];

//Associative Array
$person = [
    "name" => "John",
    "age" => 40
];
echo "<br />";

echo $person["age"];

echo "<br />";


$person2 = [
    "name" => "John",
    "age" => 40,
    "bestfood" => ["rice", "turkey", "salads"]
];

echo $person2["bestfood"][0];

echo "<br />";


//constants

define("person3", [
    "name" => "John",
    "age" => 40,
    "bestfood" => ["rice", "turkey", "salads"]
]);

echo person3["bestfood"][1];

echo "<br />";

echo "<br />";



//LOOPS

//for loop

for ($x = 0; $x <= 10; $x++/* Post Increment Operator */) {
    echo "The number is: $x <br>";
}

echo "<br />";

echo "<br />";

for ($x = 10; $x >= 1; $x--/* Post Decrement Operator */) {
    echo "The number is: $x <br>";
}

//for each loop

echo "<br />";

echo "<br />";

$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $x) {
  echo "$x <br>";
}

//FUNCTIONS

echo "<br />";

echo "<br />";

function MyFunc() {
    //
    echo "My Function";
}

MyFunc();
echo "<br />";

echo "<br />";


function AnotherFunc($params) {
    echo $params;
}

AnotherFunc("My Parameter");
echo "<br />";

echo "<br />";
//OPERATORS


//Arithmetic Operator

$num1 = 2; // An Example of Assignment Operator
$num2 = 3;

//addition
echo $num1 + $num2;
echo "<br />";

echo "<br />";
//substraction
echo $num1 - $num2;
echo "<br />";

echo "<br />";
//multiplication
echo $num1 * $num2;
echo "<br />";

echo "<br />";
//division
echo $num1 / $num2;
echo "<br />";

echo "<br />";

//Comparison Operator -- >, <, <=, >=, ==, ===, !=, !==

//echo $num1 > $num2; // Greater than
// echo $num1 < $num2; // Less Than
// echo $num1 >= $num2; // Greater than or equal to
// echo $num1 <= $num2; // Less than or equal to

//ASSIGMENT ONE -- STUDY THESE ONES
// echo $num1 == $num2; // Equality
// echo $num1 === $num2; // identical
// echo $num1 != $num2; //Not equal to
// echo $num1 <> $num2; // Another syntax for not equal to
// echo $num1 !== $num2; // Not identical

if($num1 > $num2) {
    echo "greater";
} else {
    echo "Lesser";
}

echo "<br />";

echo "<br />";

if($num1 < $num2) {
    echo "Lesser";
} else {
    echo "Greater";
}

echo "<br />";

echo "<br />";

if($num1 >= $num2) {
    echo "greater or equal";
} else {
    echo "Lesser or equal";
}

echo "<br />";

echo "<br />";

if($num1 <= $num2) {
    echo "Lesser or equal";
} else {
    echo "Greater or equal";
}

echo "<br />";

echo "<br />";

# Increment / Decrement Operator

//Example see line 89 and 97

# Increment 
// -- Pre Increment -- ++$X: This means X is return before it increases
// -- Post Increment -- $X++: This means X is returned after it increases

# Decerement
// The same as Increment but it decreases


// Logical Operator 

// and, or, xor, &&, ||, !

//ASSIGNMENT TWO -- STUDY THE NOT OPERATOR

// and and && are the same
// or and || are the same

if($num1 <= $num2 and $num1 < $num2) {
    echo "True";
} else {
    echo "False";
}

echo "<br />";

echo "<br />";

if($num1 >= $num2 or $num1 < $num2) {
    echo "True";
} else {
    echo "False";
}

echo "<br />";

echo "<br />";

if($num1 <= $num2 xor $num1 < $num2) {
    echo "True";
} else {
    echo "False";
}

echo "<br />";

echo "<br />";
