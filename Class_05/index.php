<?php

echo "<h1>Functions</h1>";

function hello(){
    echo "Hello PHP";
}


hello();
hello();
?>

<h1><?php hello(); ?></h1>

<?php

function add($num1,$num2){
    echo $num1+$num2;
}

add(10 , 90);
echo "<br>";
add(79,67);
echo "<br>";
add(2,7);


function student($name , $email , $age , $class ){
    echo "Name: ".$name."<br>
           Email".$email."<br>
            Age: ".$age."<br>
            Class".$class;
}

?>

<p><?php student("Raza" , "Raza@gmail.com" , 25 , "BSIT" , "Ali") ?></p>
<p><?php student("Ali" , "Ali@gmail.com" , 26 , "BSCS") ?></p>


<?php
function sayHello(){
    echo "Hello ";
}
function welcome(){
    sayHello();
    echo "Welcome Admin";
    hello();
}

welcome();
?>





<?php

// $sayHello = function(){
//     return "This is  Variable function";
// }
// $sayHello;
?>