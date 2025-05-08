<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get In touch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<section class="container">
    <div class="row">
        <div class="col-6">
            <h1>Get in touch</h1>
            <form method="POST">
                <input type="text" placeholder="Enter Name" class="form-control mb-2" name="name">
                <input type="text" placeholder="Enter Email" class="form-control mb-2" name="email">
                <input type="text" placeholder="Enter Phone" class="form-control mb-2" name="phone">
                <input type="text" placeholder="Enter Message" class="form-control mb-2" name="message">
                <button class="btn btn-dark w-100" name="btn">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>
</body>
</html>

<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


function sendEmail($name,$email,$phone,$message){
    //mail object
    $mail = new PHPMailer(true);


     //Server settings
     $mail->SMTPDebug = 0;                      
     $mail->isSMTP();                                            
     $mail->Host       = 'host.mail.com';                     
     $mail->SMTPAuth   = true;                                  
     $mail->Username   = 'YpurMail@gmail.com';                     
     $mail->Password   = 'your app password';     // google app password                             
     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
     $mail->Port       = 465; 

      //Recipients
    $mail->setFrom('Noorunnisa560@gmail.com', 'Connect Nisa'); // add web address
    $mail->addAddress('noorunnisa560@gmail.com', 'Noor');
    $mail->addAddress('hannanmalik0312@gmail.com');
    $mail->addReplyTo($email, $name);


     //Content
     $mail->isHTML(true);                                  //Set email format to HTML
     $mail->Subject = 'Connect Nisa (Testing PHP Mailer)';
     $mail->Body    = '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE_gCCPMuNA9bpRlghjppxL_Gm9bLqgzZ1YiOMa0Z8aMujGVysiKsWy_S8xETLuGk-K7M&usqp=CAU" width="100px"><p style="text-align:center; color:blue;font-size:24px;">Name: '.$name.'<br> Email: '.$email.'<br> Phone: '.$phone.'<br> Message: '.$message.'</p>';

     if($mail->send()){
        echo "<script>alert('Message has been sent')</script>";
     }
}









if(isset($_POST['btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    sendEmail($name,$email,$phone,$message);
}

?>