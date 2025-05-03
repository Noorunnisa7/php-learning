<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <?php
    session_start();

    $session_id = session_id();

    echo $session_id;
    ?>
</head>
<body>

<?php
include('db.php');
?>


<section class="container-fluid">
    <div class="row">
        <div class="col-12 text-center"><h1>Shop</h1></div>
        <?php
        $query = "SELECT * from products";
        $queryRun = mysqli_query($con,$query);
        while($fetch = mysqli_fetch_assoc($queryRun)){
            if($fetch['stock'] > 0){
                $stock = '<form action="add_to_cart.php" method="post">
                <input name="product_id" value="'.$fetch['id'].'">
                <input name="qty" type="number" value="1" min="1" max="'.$fetch['stock'].'">
                <button>ADD To CART</button>
                </form>';
            }
            else{
                $stock = "OUT OF STOCK";
            }

            echo ' <div class="col-4">
            <div class="card">
            <img src="images/'.$fetch['image'].'" class="card-img-top w-100" style="height:300px;">
            <div class="card-body">
                <h5 class="card-title">'.$fetch['name'].'</h5>
                <p class="card-text">RS '.$fetch['price'].'</p>
                '.$stock.'
            </div>
            </div>
        </div>';
        }
        ?>
       
    </div>
</section>

    
</body>
</html>