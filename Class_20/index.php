<?php

class Animals{
    // properties/ variables
    public  $name = "Elephant";
}
// echo $name; error
// Object 
$obj1 = new Animals();
// access
echo $obj1->name;


$obj2 = new Animals();
echo $obj2->name;

echo "<br>";


// class Car{
//     public $name;
//     public $color;
// }

// // object 
// $car1 = new Car();
// $car1->name = "BMW";
// $car1->color = "White";

// echo "Car Name: ".$car1->name." Car Color: ".$car1->color;
// echo "<br>";

// $car2 = new Car();
// $car2->name = "Civic";
// $car2->color = "Black";

// echo "Car Name: ".$car2->name." Car Color: ".$car2->color;



// Member variable and function

class Car{
    public $name; 
    public $color; 

    public function CarDetails(){
         return "Car Name: ".$this->name."<br> Color: ".$this->color;
    }

    public function Display(){
        echo "Hello PHP Classes & Object";
    }

}

$carOne = new Car();
$carOne->name = "Civic";
$carOne->color = "white";
echo $carOne->CarDetails();
echo "<br>";
echo "<br>";

$carTwo = new Car();
$carTwo->name = "Audi";
$carTwo->color = "Black";
echo $carTwo->CarDetails();
$carTwo->Display();


echo "<br>";
echo "<br>";

$object = new Car();
$object->Display();

?>