<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="post">
                <h1>Create User</h1>
                <input type="text" placeholder="Enter your name" class="form-control mb-3" name="name">
                <input type="email" placeholder="Enter your email" class="form-control mb-3" name="email">
                <input type="number" placeholder="Enter your Phone" class="form-control mb-3" name="phone">
                <input type="text" placeholder="Enter your CNIC" class="form-control mb-3" name="cnic">
                <textarea name="address" class="form-control mb-3" placeholder="Enter Your Address" ></textarea>
                <button class="btn btn-info w-100" name="btn_create">Create</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>

<?php

include('db.php');


if(isset($_POST['btn_create'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];

    $query = "INSERT into users(name, email,phone , cnic , address) values ('$name','$email' , $phone , '$cnic' , '$address')";

    $queryRun = mysqli_query($con , $query);

    if($queryRun){
        echo "<script>alert('User created Successfully')</script>";
    }

}



?>