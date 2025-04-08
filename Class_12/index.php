
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">


<section class="container">
<h1>Global Variables</h1>
    <div class="row">
        <div class="col-6">
            <form method="get" action="welcome.php">
                <h1>Fill This Form</h1>
                <input type="text" placeholder="Enter Your Name" class="form-control mb-3" name="username">
                <input type="text" placeholder="Enter Your Email" class="form-control  mb-3" name="email">
                <input type="text" placeholder="Enter Your Phone No." class="form-control  mb-3" name="phone">
                <input type="password" placeholder="Enter Your password" class="form-control  mb-3" name="password">
                <button class="btn btn-dark w-100" name="btn_submit">Submit</button>
            </form>
        </div>
    </div>
</section>

<?php

// if(isset($_GET['btn_submit'])){
//     $name = $_GET['username'];
//     $email = $_GET['email'];
//     $phone = $_GET['phone'];
//     echo $name;
//     echo $email;
//     echo $phone;
// }




// $user = $_GET['user'];
// echo $user;




?>