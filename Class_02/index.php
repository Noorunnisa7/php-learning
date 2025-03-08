<?php
include("header.php");
?>

<h1>Hello PHP(hypertext preproccessor)</h1>

<?php

echo "Hello World";
echo("<h1>Echo Function</h1>");

print("Print Function");

$name = "PHP Variables";

echo $name;

$number1 = 100;
$number2 = 200; 

echo $number1.$number2;
echo "<p>Number 1 : ".$number1."</p>";
echo "Number 2 : ".$number2;

print "<p>Number 1 : ".$number1."<p>";
# print $number1,$number2;   // error
?>

<h1>Data types</h1>

<?php

// $number = 10.24;  // numbers data type
// $string = "Aptech learning";   // string
// $boolean = true;
$array = [100 , "Aptech" , true , 12.89];
var_dump($array);

?>


<?php
include("footer.php");
?>