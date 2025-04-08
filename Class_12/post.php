
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">


<section class="container">
<h1>Global Variables $_POST</h1>
    <div class="row">
        <div class="col-6">
            <form method="post" action="welcome1.php">
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

if(isset($_POST['btn_submit'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    
    echo $name.$email.$phone.$pass;
}

?>