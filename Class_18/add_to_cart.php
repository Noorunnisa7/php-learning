<?php
session_start();

include('db.php');

$product_id = $_POST['product_id'];
$qty = $_POST['qty'];
$session_id = session_id();


$select = "SELECT * from cart where product_id = $product_id And session_id = '$session_id'";
$selectRun = mysqli_query($con,$select);

$countRow = mysqli_num_rows($selectRun);

echo $countRow;

if($countRow > 0){
    $update = "UPDATE cart set 
               qty = qty +  $qty
               where product_id = $product_id And session_id = '$session_id'";
    $updateRun = mysqli_query($con,$update);
}
else{
    $query = "INSERT into cart (product_id,session_id,qty) VALUES ($product_id,'$session_id',$qty)";
    $queryRun = mysqli_query($con , $query);
}





header("location:cart.php");
?>