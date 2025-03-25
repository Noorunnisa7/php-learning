<?php

$ary = array('BMW' , 'Civic' , 'Audi' , 'Toyota');
var_dump($ary);

array_splice($ary , 2, 1);
var_dump($ary);

echo "<br>";
echo "<br>";


$names = ['Ali' , 'ahmed' , 'sara' , 'zara' , 'sakina' , 'saiqa'];
var_dump($names);
array_splice($names , 2 ,1);
var_dump($names);
array_splice($names , 2 ,1);
var_dump($names);

echo "<br>";
echo "<br>";


$fruits = ['apple' , 'mango' , 'cherry' , 'berry'];

unset($fruits[1]);
var_dump($fruits);

$assoc = ['k1' => 'Ali' , 'k2' => 'Ahmed'];
unset($assoc['k2']);

var_dump($assoc);

echo "<br>";
echo "<br>";

$data = ['name' => 'Hyder' , 'Class' => '5' , 'age' => 14];

$new_array = array_diff($data,['5']) ;

var_dump($new_array);
echo "<br>";
echo "<br>";

$numbers = [1,2,3,4,5,6,7,8,9,10];
var_dump($numbers);
array_pop($numbers);
echo "<br>";
var_dump($numbers);
array_shift($numbers);
echo "<br>";
var_dump($numbers);


$products = ['keyboard' , 'mouse' ,'pc' , 'laptop'];


if(in_array('black mouse' , $products)){
    echo "Data Found";
}
else{
    echo "Data Not Found";

}
?>