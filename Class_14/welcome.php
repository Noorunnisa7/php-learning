<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}
?>

<h1>Welcome <?php echo $_SESSION['user']?></h1>

<a href="logout.php" class="btn btn-danger">Logout</a>