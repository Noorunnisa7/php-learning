<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <?php
    require "db.php";
    ?>
</head>
<body>
    

<section class="container">
    <div class="row">
        <div class="col-12">
            <a href="create.php" class="btn btn-info">Create User</a>
            <h1>All Users</h1>
            <table class="table table-info">
                <thead>
                    <tr>
                        <th>S No.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>CNIC</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * from users";
                    $queryRun = mysqli_query($con,$query);
                    // $row = mysqli_fetch_assoc($queryRun);

                    while($row = mysqli_fetch_assoc($queryRun)){
                        echo "<tr>
                                 <td>".$row['id']."</td> 
                                 <td>".$row['name']."</td> 
                                 <td>".$row['email']."</td> 
                                 <td>".$row['phone']."</td> 
                                 <td>".$row['cnic']."</td> 
                                 <td>".$row['address']."</td> 
                            </tr>";
                    }
                    // echo $row['name'];
                    // echo $row['email'];
                    // echo $row['phone'];
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>