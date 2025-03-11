<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<h1>Operators</h1>
<?php
$num1 = 10 ;
$num2 = 20;
echo $num1+$num2;

$assign = 50;
$assign++;
$assign++;
$assign--;
$assign += 30;
$assign .= 2;


echo "<p>".$assign."</p>";

$text1 = "Aptech";
$text1 .= "learning";
echo $text1;
?>

<h1>IF ELSE-IF ELSE Conditions</h1>

<?php
$number = -9;

if($number > 0){
    echo "<h3>The number is positive</h3>";
}
elseif($number < 0){
    echo "<h3>The number is Negative</h3>";
}
else{
    echo "<h3>The number is zero</h3>";
}


$name = "Aptech learning";
$result = $name == "Aptech" ? "Condition is true" : "Condition is False";
echo $result;

echo "<br>";

$user = "customer";
$pass = "2323";

if($user == "admin" && $pass == 1234 || $user == "edtior" && $pass == 786 || $user == "customer" && $pass == 2323){
    echo "<script>alert('Login Successfully')</script>";
}
else{
    echo "Invalid username and password";
}

$num = 20;
$output = $num >0 ? "The number is ".$num. "Condition is true" : "The number is zero and condition is false";
echo $output;


$name = "noor";
$pass = 9876; 

$result = $name == "noor" && $pass == 9876 ? "Login Successfully " : "Invalid Credentials";
echo "<h1>".$result."</h1>"; 
?>


</body>
</html>