<?php
include "db.php";
echo "User ID: ".$_GET['id'];

$id = $_GET['id'];
$query = "DELETE from users where id = $id";
$queryRun = mysqli_query($con,$query);

header("Location:read.php");

?>