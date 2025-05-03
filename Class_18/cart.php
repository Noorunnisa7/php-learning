<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <?php
    include('db.php');
    session_start();
    $session_id = session_id();
    ?>
</head>
<body>
    <section class="container">
        <div class="row">
            <h1>CART</h1>

            <div class="col-12">
                <?php
                $query = "SELECT * FROM cart c 
                        inner join products p  ON p.id = c.product_id
                        where c.session_id = '$session_id'";
                $queryRUN = mysqli_query($con , $query);
                while($fetch = mysqli_fetch_assoc($queryRUN)){
                    echo "Product ID: ".$fetch['product_id']."
                    <br> QTY : ".$fetch['qty']."
                    <br> SESSION : ".$fetch['session_id']."
                    ";
                    echo "<br>Product Name: ".$fetch['name'];
                    echo "<br><img src='images/".$fetch['image']."' width='50px'>";
                }
                
                ?>
            </div>
        </div>
    </section>
</body>
</html>