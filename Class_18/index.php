<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
</head>
<body>

<?php
include('db.php');
?>


<section class="container-fluid">
    <div class="row">
        <?php
        $query = "SELECT * from products";
        $queryRun = mysqli_query($con,$query);
        while($fetch = mysqli_fetch_assoc($queryRun)){
            echo ' <div class="col-4">
            <div class="card">
            <img src="images/'.$fetch['image'].'" class="card-img-top w-100" style="height:300px;">
            <div class="card-body">
                <h5 class="card-title">'.$fetch['name'].'</h5>
                <p class="card-text">RS '.$fetch['price'].'</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>';
        }
        ?>
       
    </div>
</section>

    
</body>
</html>