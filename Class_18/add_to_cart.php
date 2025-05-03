<?php
session_start();

include('db.php');

$product_id = $_POST['product_id'];
$qty = $_POST['qty'];
$session_id = session_id();

// echo "Product id: ".$product_id."<br> QTY: ".$qty;

// echo "<br>";

// echo $session_id;


$query = "INSERT into cart (product_id,session_id,qty) VALUES ($product_id,'$session_id',$qty)";
$queryRun = mysqli_query($con , $query);

header("location:cart.php");
?>