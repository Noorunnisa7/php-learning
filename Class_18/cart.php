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
            <table class="table table-info table-striped">
                        <thead>
                           <tr>
                           <th>S.No</th>
                            <th>product title</th>
                            <th>Product Price</th>
                            <th>Product Qty</th>
                            <th>Total</th> 
                           </tr>                           
                        </thead>
                        <tbody>
                <?php
                $query = "SELECT * FROM cart c 
                        inner join products p  ON p.id = c.product_id
                        where c.session_id = '$session_id'";
                $queryRUN = mysqli_query($con , $query);
                $grandTotal = 0;
                while($fetch = mysqli_fetch_assoc($queryRUN)){

                    ?>
                            <tr>
                                <td>1</td>
                                <td><?php echo $fetch['name'];?>
                                    <img src="images/<?php echo $fetch['image'];?>" width="50px">
                                </td>
                                <td><?php echo $fetch['price'];?></td>
                                <td><?php echo $fetch['qty'];?></td>
                                <td><?php echo $fetch['qty']* $fetch['price'];?></td>
                            </tr>
                        
                    <?php
                      $grandTotal += $fetch['qty'] * $fetch['price'];
                    
                }
                
                ?>

                <tr>
                    <td colspan="3"></td>
                    <td>Grand Total</td>
                    <td><?php echo $grandTotal;?></td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </section>
</body>
</html>

<?php
$array = [1,2,3,10,20];

$sum = 0;
foreach($array as $value){
    $sum +=  $value;
    echo ' '.$sum;
}



?>