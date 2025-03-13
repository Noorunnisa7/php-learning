<?php

$day = 8;

switch($day){
    case 1:
        echo "The day is Monday";
    break;
    case 2:
        echo "This Day is Tuesday";
    break;
    case 3:
        echo "This Day is Wednesday";
    break;
    case 4:
        echo "This Day is Thursday";
    break;
    case 5:
        echo "This Day is Friday";
    break;
    case 6:
        echo "This Day is Saturday";
    break;
    case 7:
        echo "This Day is Sunday";
    break;
    default:
    echo "The day number is invalid";
}

echo "<br>";

$num1 = 2;
$num2 = 0;
$opt  = "/";  // + - * /

switch($opt){
    case "+":
    echo "Addition: ".$num1+ $num2;
    break;

    case "-":
    echo "Subtraction: ".$num1- $num2;
    break;

    case "*":
    echo "Multiplication: ".$num1* $num2;
    break;

    case "/":
    echo "Divide: ".$num1/ $num2;
    break;

    default:
    echo "<script>alert('Invalid Operator')</script>";
}


?>