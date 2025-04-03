<?php
$multi_array = [
    //0       1       2            3
    ["Ali" , "40" , 'Karachi' , "0321654987"], //0
    ['Raza' , '20' , 'Sukkhur' , '021475454'], //1
];

echo $multi_array[0][0];
echo $multi_array[1][0];

echo "<br>";
// multi assoc array 

$multi_assoc = [
    'Data1' => ['Name' => 'Ali' , 'Age' => '10' , 'Country' => 'pakistan'],
    'Data2' => ['Name' => 'Hyder' , 'Age' => '25' , 'Country' => 'iran'],
    'Data3' => ['Name' => 'Ahmed' , 'Age' => '28' , 'Country' => 'China']
];

var_dump($multi_assoc);
echo $multi_assoc['Data2']['Country'];
echo $multi_assoc['Data3']['Name'];

echo "<br>";
echo "<br>";
echo "<br>";



$array = [
           ["Ali" , '25'],
           ['Raza' , '10'],
           ['Ahmed' , '20'],
           ['Zain' , '12']
        ];

foreach($array as $value){
    foreach($value as $data){
        echo $data;
    }
}

$students = ['Sara' , 'Zara' , 'Manahil' , 'Zainab'];

echo "<br>";

foreach($students as $student){
    echo $student."<br>";
}







// for($i = 1; $i<=5 ; $i++){
//     echo $i." - ";
//     for($j = 1; $j <=3 ; $j++){
//         echo $j;
//     }
//     echo "<br>";
// }


// for($k = 1 ; $k <= 5  ; $k++){
//     for($j = 1; $j<=10; $j++){
//         echo $j*5;
//         echo " ---- ";
//     }
//     echo "<br>";
// }


?>