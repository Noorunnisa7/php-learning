<?php

$array = ["Zain" , 'Ali' , "Sara" , "Noor" , "Hyder"];
var_dump($array);
echo "<br>";
// sort($array);
rsort($array);
var_dump($array);


$assoc_array = ["k1"=> "Orange" , 'k2' => 'Yellow' , 'k5' => 'Pink' , 'k4' => 'Red' , 'k3' => 'Black'];
// asort($assoc_array);
krsort($assoc_array);

var_dump($assoc_array);


$fruits = ['Apple' , 'Orange' , 'Mango' , 'Cherry' ,'banana' , 'grapes'];

foreach($fruits as $fruit ){
    echo "<p>".$fruit.'</p>';
}

$country = ['Pakistan' , 'Iran' , 'Iraq' , 'Suadia'];

foreach($country as $value){
    echo $value." ";
}

$student_data = ["Name" => 'Hyder' , 'Email' => 'Hyder@gmail.com' , 'Age' => 30];

// echo "<ul>";
// foreach($student_data as $value){
//     echo "<li>".$value."</li>";
// }
// echo "</ul>";

echo "<ul>";
foreach($student_data as $key => $value ){
    echo "<li>".$key.": ".$value."</li>";
}
echo "</ul>";

?>