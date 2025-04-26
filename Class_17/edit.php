<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    

<?php
include("db.php");
$id = $_GET['id'];
echo "User Id ".$id;

$query = "SELECT * from users where id = $id";
$queryRun = mysqli_query($con , $query);
$fetch = mysqli_fetch_assoc($queryRun);

// echo $fetch['name'];

?>
<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <form method="post">
                <h1>Edit User</h1>
                <input type="text" placeholder="Enter your name" class="form-control mb-3" name="name" value="<?php echo $fetch['name'] ?>">
                <input type="email" placeholder="Enter your email" class="form-control mb-3" name="email" value="<?php echo $fetch['email'] ?>">
                <input type="number" placeholder="Enter your Phone" class="form-control mb-3" name="phone" value="<?php echo $fetch['phone'] ?>">
                <input type="text" placeholder="Enter yoxur CNIC" class="form-control mb-3" name="cnic" value="<?php echo $fetch['cnic'] ?>">
                <textarea name="address" class="form-control mb-3" placeholder="Enter Your Address" ><?php echo $fetch['address'] ?></textarea>
                <button class="btn btn-info w-100" name="btn_update">Update</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>


<?php
if(isset($_POST['btn_update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cnic = $_POST['cnic'];
    $address = $_POST['address'];

    $query = "UPDATE users set 
             name = '$name',
             email = '$email',
             phone = $phone,
             cnic = '$cnic',
             address = '$address'
             where id = $id
             ";

    $queryRun = mysqli_query($con , $query);

    if($queryRun){
        header("Location:read.php");
    }
}


?>