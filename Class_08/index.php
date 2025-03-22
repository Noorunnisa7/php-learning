<?php

// Index Array
$array = ['Noor' , 'hira' , 'sidra'];
$array1 = array('1', '2','3','4');
var_dump($array);

echo $array[1];
echo $array1[3];

// echo "<br>";

// associative array

$ary = ['name' => 'Ali' , 'city' => 'karachi' , 'Age' => 24];

echo $ary['name'];
echo $ary['city'];
echo $ary['Age'];

echo "<br>";

var_dump($ary);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

// update an array 

$data = ['Ali' , 'Raza' , 'Hyder', 'Sufyan'];
var_dump($data);
$data[2] = "Haider Ali";
$data[1] = "Zain";
var_dump($data);


$data_assoc = array("name1" => 'Hira' , 'name2' => 'Sidra' , 'name3' => 'Mehak');
var_dump($data_assoc);
$data_assoc['name3'] = "Mehak Khan";
var_dump($data_assoc);

echo "<br>";
echo "<br>";

// Add an item in array

$array = ['student1' => 'Raza' , 'student2' => 'Ali' , 'student3' => 'sara'];
var_dump($array);
$array['student4'] = "Hira khan";
$array['student5'] = "Zain";
var_dump($array);
echo "<br>";
echo "<br>";
echo "<br>";

$index = ['keyboard' , 'mouse' , 'speaker' , 'headphone'];
var_dump($index);
$index[] = "Airpods";
echo "<br>";

var_dump($index);
echo "<br>";

$fruits = [];
$fruits[] = 'orange';
$fruits[] = 'Apple';
$fruits[] = 'Mango';
$fruits[] = 'Cherry';


var_dump($fruits);

array_push($fruits,"strawberry" , 'blueberry');
var_dump($fruits);


$push = ['car'=> 'civic'];
$push += ['color' => 'white' , 'model' => 'abcd'];
var_dump($push);
?>