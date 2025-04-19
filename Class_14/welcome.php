<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

<?php
require("session.php");
?>

<h1>Welcome <?php echo $_SESSION['user']?></h1>

<h1>Cookie Name: <?php  echo $_COOKIE['user'];?></h1>
<a href="logout.php" class="btn btn-danger">Logout</a>