<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Loops In PHP</h1>
<?php

echo "<h3>For Loop</h3>";

for($i = 1 ; $i <= 10 ; $i++){
    echo $i."AAA <br>";
}


echo "<h3>While Loop</h3>";

$i = 1;
while($i <= 2){
    echo "While Loop iteration<br>";
    $i++;
}

echo "<h3>do While Loop</h3>";

$j = 1; 
do{
    echo "do While Loop iteration<br>";
    $j++;
}
while($j > 6);

?>


<h1>Break And Continue</h1>

<?php
for($i = 1; $i <=10 ; $i++)
{
    if($i == 6){
        break;
    }
    echo $i;
}

for($i = 1; $i <= 10 ; $i++){
    if($i == 3){
        continue;
    }
    echo "<p>".$i."</p>";
}
?>
</body>
</html>