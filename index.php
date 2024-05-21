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

for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

echo "<br />";

echo "<br />";

for ($x = 10; $x >= 1; $x--) {
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