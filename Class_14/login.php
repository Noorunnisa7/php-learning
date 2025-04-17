<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

</head>
<body>
    
<section class="container">
    <div class="row justify-content-center">
        <div class="col-4">
            <h2>Login Your Account</h2>
            <form method="post">
            <input type="text" placeholder="Enter your username" class="form-control mb-2" name="username">
            <input type="password" placeholder="Enter your password" class="form-control mb-2" name="password">

            <button class="btn btn-dark w-100" name="btn_login">Login</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>

<?php

session_start();

if(isset($_SESSION['user'])){
    header("location:welcome.php");
}
else{
    if(isset($_POST['btn_login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if($username == "nisa" && $password == "aptech123" || $username == "Admin" && $password == "123"){
            echo "login Successfully";
            $_SESSION['user'] = $username;
            header("Location:welcome.php");
        }
        else{
            echo "<script>alert('Invalid username or password')</script>";
        }
    }
}




?>