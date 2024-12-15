<h1><a href="index.php">Home</a></h1>

<?php 
if(isset($_POST["submit"])){
    $up_bt= $_POST["submit"];
    $file = $_FILES["file"];
    $new_source = "Uploads/". $file["name"];

    $max_size = 100 * 1024 * 1024;


    $foramt = [".png", "jpg", "gif"];

    if($_FILES["file"]["size"] < $max_size){
        move_uploaded_file($file["tmp_name"], $new_source);
        echo $file["name"];
    }else{
        echo "max size is" + $max_size;
    }
    }


?>

