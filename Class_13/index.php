<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">

<section class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>File Upload</h2>
            <form method="post" enctype="multipart/form-data">
                <input type="file" class="form-control mb-2" name="file">
                <button class="btn btn-dark" name="btn_upload">File upload</button>
            </form>
        </div>
    </div>
</section>

<?php
if(isset($_POST['btn_upload'])){
    $file_name = $_FILES['file']['name']; // file name
    $tmp_name = $_FILES['file']['tmp_name']; // tmp name
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];

    $allow_type = ['image/png' , 'image/jpg' , 'image/jpeg'];

    if(in_array($file_type,$allow_type)){
        $location = "images/";
        if(move_uploaded_file($tmp_name,$location.$file_name)){
            echo "<p>File uploaded Successfully</p>";
    
            echo "<img src='images/".$file_name."' width='50%'>";
        }
        else{
            echo "file Not Found";
        }
    }
    else{
        echo "Error: upload only this type of files (png, jpg and jpeg)";
    }


    



    // echo $file_name;
    // echo "<br>";
    // echo $tmp_name;
    // echo "<br>";
    // echo $file_size;
    // echo "<br>";
    // echo $file_type;
}

?>